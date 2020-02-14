% Create a cascade detector object.
faceDetector = vision.CascadeObjectDetector();

% Prompt the user to select a video
[filename,pathname] = uigetfile({'*.mpg;*.mp4;*.avi;*.mov','Video files'});
path=[pathname,filename];

% create a video file reader object.
videoFileReader = vision.VideoFileReader(path);

% Detect faces in the first video frame
videoFrame = step(videoFileReader);
bboxes = step(faceDetector,videoFrame);

% Draw the bounding box and display the frame
videoFrame = insertShape(videoFrame,'Rectangle',bboxes);
figure;
imshow(videoFrame);
title('Detected face');

% Convert the first box into a list of 4 points 
bboxesPts = bbox2points(bboxes(1,:));

%% Tracking
% Detect feature points in the face region.
points = detectMinEigenFeatures(rgb2gray(videoFrame),'ROI',bboxes);

% Create a point tracker and enable the bidirectional error constraint
pointTracker = vision.PointTracker('MaxBidirectionalError',2);

% Initialise the tracker with the initial point locations and video frame
points = points.Location;
pointTracker.initialize(points,videoFrame);

% Create a video player object for displaying video frames.
videoPlayer = vision.VideoPlayer();
oldPoints = points;

% While video is not finished (i.e: there are still frames in the video)
while ~isDone(videoFileReader)
    
% get the next frame
videoFrame = step(videoFileReader);

% Track the points
[points,isFound] = step(pointTracker, videoFrame);
visiblePoints = points(isFound,:);
oldInliers = oldPoints(isFound, :);

if size(visiblePoints,1) >= 2 % need at least 2 points
    
% Estimate the geometric transformation between the old points
% and the new points and eliminate outliers
[xform, oldInliers, visiblePoints] = estimateGeometricTransform...
(oldInliers,visiblePoints,'similarity','MaxDistance',4);

% Apply the transformation to the bounding box points
bboxesPts = transformPointsForward(xform, bboxesPts);

% Draw a bounding box around the tracked face
bboxPolygon = reshape(bboxesPts',1,[]);
videoFrame = insertShape(videoFrame,'Polygon',bboxPolygon);

% Reset the points 
oldPoints = visiblePoints;
setPoints(pointTracker,oldPoints);
end

% Display the video frame 
step(videoPlayer,videoFrame);
end

% Clean up videoFileReader.release();
videoPlayer.release(); pointTracker.release();