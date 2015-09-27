<?php
/*writePosts based in path in folder name.
 * Usage: For example, if you want to write posts in 'DOC_ROOT/path_name/folder_name':
 * Path should be '/path_name/'
 * name should be 'folder_name'
 * It's important that name does not have any slashes, and that it matches the name of the slider.
 */
function writeSponsorPosts($path, $name, $pattern = "/(\d+)-.*post/", $alt_pattern = "/.*post/") {
    $opening = '<li class="'.$name.'Post defPost">';
    $closing = '</li>';
    $sortedPosts = array();
    $dirName = $_SERVER['DOCUMENT_ROOT'].$path.$name;
    $dir = opendir($dirName);
    while ($post = readdir($dir)) {
        if (preg_match($pattern, $post, $matches)) {
            $sortedPosts[$matches[1]] = $post;
        }
    }
    foreach ($sortedPosts as $curPost) {
        echo $opening.file_get_contents($dirName.'/'.$curPost).$closing;
    }
    unset($curPost);
    foreach ($unsortedPosts as $curPost) {
        echo $opening.file_get_contents($dirName.'/'.$curPost).$closing;
    }
    unset($curPost);
}
