<?php

$zip = new ZipArchive;

// Zip File Name
if ($zip->open('elementor-pro.zip') === TRUE) {

    // Unzip Path
    $zip->extractTo('./');
    $zip->close();
    echo 'Unzipped Process Successful!';
} else {
    echo 'Unzipped Process failed';
}
?>