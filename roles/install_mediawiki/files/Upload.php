<?php

$wgUploadPath = "$wgScriptPath/img_auth.php";
$wgImgAuthPublicTest = false;
$wgUploadDirectory = "$INSTANCE_DIR/images";
$wgTmpDirectory = "$INSTANCE_DIR/images/temp";

## To enable image uploads, make sure the 'images' directory
## is writable, then set this to true:
$wgEnableUploads = true;
$wgUseImageMagick = true;
$wgImageMagickConvertCommand = "/usr/bin/convert";
$wgVerifyMimeType = false;

# InstantCommons allows wiki to use images from http://commons.wikimedia.org
$wgUseInstantCommons = false;

## If you use ImageMagick (or any other shell command) on a
## Linux server, this will need to be set to the name of an
## available UTF-8 locale
$wgShellLocale = "en_US.utf8";

## If you want to use image uploads under safe mode,
## create the directories images/archive, images/thumb and
## images/temp, and make them all writable. Then uncomment
## this, if it's not already uncommented:
#$wgHashedUploadDirectory = false;

$wgFileExtensions[] = 'vsd';
$wgFileExtensions[] = 'svg';
$wgFileExtensions[] = 'kml';
$wgFileExtensions[] = 'docx';
$wgFileExtensions[] = 'doc';
$wgFileExtensions[] = 'pptx';
$wgFileExtensions[] = 'ppt';
$wgFileExtensions[] = 'xlsx';
$wgFileExtensions[] = 'xls';
$wgFileExtensions[] = 'mm';
$wgFileExtensions[] = 'pdf';
$wgFileExtensions[] = 'zip';
$wgFileExtensions[] = 'jar';
$wgFileExtensions[] = 'wmv';
$wgFileExtensions[] = 'qt';
$wgFileExtensions[] = 'mov';
$wgFileExtensions[] = 'mpg';
$wgFileExtensions[] = 'ico';
$wgFileExtensions[] = 'owl';
$wgFileExtensions[] = 'ics';
$wgFileExtensions[] = 'txt';
$wgFileExtensions[] = 'png';
$wgFileExtensions[] = 'csv';
$wgFileExtensions[] = 'gff';
$wgFileExtensions[] = 'json';
$wgFileExtensions[] = 'xml';
