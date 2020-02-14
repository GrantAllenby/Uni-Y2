%% Clear the screen using the ‘clc’ function
clc;
% Clear all existing variables in the workspace using
% the ‘clear’ function
clear;
%% Importing data from a text file using the ‘load’ function
% This creates a matrix whose name is similar to the name of
% the text file that contains the data
load 'matrix.txt'
%% You can also assign a different name to the resulting matrix
% which holds the imported data by using the text file name as
% an input parameter – between brackets - as follows:
MyImportedData=load('matrix.txt')
%% Importing an ASCII-delimited numeric data file
% into a matrix called MatrixTxt using the ‘dlmread’ function
MatrixTxt=dlmread('matrix.txt');
%% Importing data from a an Excel spreadsheet (a .csv commaseparated
% values file) using the ?csvread? function
MatrixCsv=csvread('matrix.csv');
%% Importing data from an Excel spreadsheet using the
% ?xlsread? function
values1 = xlsread('capri.xlsx');
%% Importing data from an Excel spreadsheet (.xlsx file)
% using the ?xlsread? function.
% Both the values and the variables names - column headers -
% are also returned as an output
[values2,headertxt ]= xlsread('capri.xlsx');
%% importing data from an Excel spreadsheet using the
% readtable function
TableMuseum = readtable('museum.xls')
%% Read a sample image using the function imread and display it
% using the function imshow
imageMatrix = imread('newcastle.jpg');
imshow(imageMatrix);
%% Read data from a sound file and returns sampled data,stored
% in variable y, and the sampling rate for that data, stored in
% variable Fs
[y,Fs] = audioread('apollo.wav');
% plot the imported sound data, i.e. the sound wave
plot(y)
% play the audio
sound(y,Fs);