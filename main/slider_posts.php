<?php
function writePosts($name) {
    $opening = '<li class="'.$name.'Post defPost">';
    $closing = '</li>';
    $sortedFiles = array();
    $dirName = $_SERVER['DOCUMENT_ROOT'].'/main/'.$name;
    $dir = opendir($dirName);
    while ($file = readdir($dir)) {
        if ($file != '.' && $file != '..') {
            echo $opening.file_get_contents($dirName.'/'.$file).$closing;
        }
    }
}
