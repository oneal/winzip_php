<?php

// Include and initialize ZipArchive class
require_once 'ZipArchiver.class.php';
$zipper = new ZipArchiver;

// Path of the directory to be zipped
$dirPath = './wp-content/plugins/elementor-pro';

// Path of output zip file
$zipPath = 'elementor-pro.zip';

// Create zip archive
$zip = $zipper->zipDir($dirPath, $zipPath);

if($zip){
    echo 'ZIP archive created successfully.';
}else{
    echo 'Failed to create ZIP.';
}

?>