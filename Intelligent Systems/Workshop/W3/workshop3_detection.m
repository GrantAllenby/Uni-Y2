%Create a castade detector object.
faceDetector = vision.CascadeObjectDetector();

%Prompt the user to choose an image
[filename, pathname] = uigetfile({'*.jpg;*.png;*.bmp','Image files'}); 
path = [pathname,filename];

%Load the image
FaceImage = imread(path);

%Detect faces
bboxes = faceDetector.step(FaceImage);

%Draw boxes over the detected faces
FaceOut = insertShape(FaceImage,'Rectangle',int32(bboxes),'Color','red');

%Display the output
figure, imshow(FaceOut), title('Detected Faces');

%Clean up
faceDetector.release();