<?php
/*writePosts based in path in folder name.
 * Usage: For example, if you want to write posts in 'DOC_ROOT/path_name/folder_name':
 * Path should be '/path_name/'
 * name should be 'folder_name'
 * It's important that name does not have any slashes, and that it matches the name of the slider.
 */
function writePosts($path, $name, $pattern = "/(\d+)-.*post/", $alt_pattern = "/.*post/") {
    $opening = '<li class="'.$name.'Post defPost">';
    $closing = '</li>';
    $sortedPosts = array();
    $unsortedPosts = array();
    $dirName = $_SERVER['DOCUMENT_ROOT'].$path.$name;
    $dir = opendir($dirName);
    while ($post = readdir($dir)) {
        if (preg_match($pattern, $post, $matches)) {
            $sortedPosts[$matches[1]] = $post;
        } else if (preg_match($alt_pattern, $post)) {
            $unsortedPosts[] = $post;
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
function writeUpdates() {
    $path = $_SERVER["DOCUMENT_ROOT"]."/news/posts/";
    $files = scandir($path, 1); //"1" means SCANDIR_SORT_DESCENDING"
    $count = 0;
    $numPosts = 5;
    $curtime = date("YmdHi");
    foreach ($files as $file) {
        if (preg_match("/^\d{12}-.*/", $file)) {
            $pieces = explode("-", $file, 2);
            if (strtotime($pieces[0]) <= strtotime($curtime)) {
                if ($count < $numPosts) {
                    $printArray[$pieces[0]] = $pieces[1];
                }
                $count += 1;
            }
        }
        if ($count >= $numPosts) {
            break;
        }
    }
    foreach ($printArray as $date => $name) { ?>
        <li class="updatesPost defPost"><?php $contents = file_get_contents($path.$date."-".$name);
            if (preg_match("#<img(?:[^>]*)src=(?:\'|\")((?:(?!\"|\').)*)(?:\'|\")(?:[^>]*)\/\s*>#", $contents, $matches)) {
                $caption = "";
                if (preg_match("#alt\s*=\s*(?:\"|\')((?:(?!\"|\').)*)(?:\"|\')#", $matches[0], $matchCaptions)) {
                    $caption = $matchCaptions[1];
                }
                echo "<a class=\"update_link\" href=\"news/?post=".str_replace(" ", "+", $name)."\"><div class=\"updateBackground\" style=\"background-image:url('".$matches[1]."');\"><div class='caption'>".$caption."</div></div></a>";
            } else {
                echo $contents;
            } ?>
            <span><?php echo ucwords($name)." - ". date("l, F j", strtotime($date)); ?></span>
        </li>
        <?php
    }
}
function writeSponsors() {
    $delimiter = "====";
    $sortedSponsors = array(
        "gold" => array(),
        "silver" => array(),
        "friend" => array(),
    );
    $order = array("gold","silver","friend");
    $dir = opendir("sponsors/sponsorlist");
    while ($sponsor = readdir($dir)) {
        if (preg_match("/(\w+)\..*\.sponsor/", $sponsor, $matches)) {
            $sortedSponsors[$matches[1]][] = file_get_contents("sponsors/sponsorlist/".$sponsor);
        }
    }
    unset($sponsor);
    unset($matches);
    foreach ($order as $type) {
        foreach ($sortedSponsors[$type] as $curSponsor) {
            $pieces = explode($delimiter, $curSponsor, 2);
            echo "<li class='sponsorsPost defPost'><div class='sponsor'>".$pieces[0]."</div><span>"."</span></li>";
        }
    }
    unset($curSponsor);
    unset($type);
}
