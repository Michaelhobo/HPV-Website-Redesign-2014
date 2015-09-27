<?php
$numPosts = 5;
$start = 0;
$mode = "time";
if (preg_match("#numPosts=(\d+)#", $_SERVER['QUERY_STRING'], $matches)) {
    $numPosts = intval($matches[1]);
}
if (preg_match("#start=(\d+)#", $_SERVER['QUERY_STRING'], $matches)) {
    $start = intval($matches[1]);
    $mode = "time";
}
if (preg_match("#post=(.*?)(?:&|\z)#", $_SERVER['QUERY_STRING'], $matches)) {
    $mode = "post";
    $post_name = $matches[1];
}
$finished = false;
function loadFeed($path, $start, $end, $mode) {
    $files = scandir($path, 1);// "1" means SCANDIR_SORT_DESCENDING
    $count = 0;
    $printArray = array();
    if ($mode == "time") {
        $curtime = date("YmdHi");
        foreach ($files as $file) {
            if (preg_match("#^\d{12}-.*#", $file)) {
                $pieces = explode("-", $file, 2);
                if (strtotime($pieces[0]) <= strtotime($curtime)) {
                    if ($count >= $start && $count < $end) {
                        $printArray[$pieces[0]] = $pieces[1];
                    }
                    $count += 1;
                }
            }
            if ($count >= $end) {
                break;
            }
        }
    } else if ($mode == "post") {
        global $post_name;
        foreach ($files as $file) {
            if (strpos($file, str_replace("+", " ", $post_name)) !== FALSE) {
                $pieces = explode("-", $file, 2);
                $printArray[$pieces[0]] = $pieces[1];
                break;
            }
        }
    }
    foreach ($printArray as $date => $name) { ?>
        <div class="post">
            <a class="newsfeed_link" href=".?post=<?php echo str_replace(" ", "+", $name);?>"><div class="subsection_header"><?php echo ucwords($name); ?><div class="timestamp"><?php echo "Published ".date("l, F j, Y", strtotime($date)); ?></div></div></a>
            <div class="post_content"><?php echo file_get_contents($path."/".$date."-".$name);?></div>
            </div>
            <?php $count -= 1;
    }
    $finished = ($count == 0);
}
function loadNav($start, $finished, $numPosts) {
    global $mode;
    if ($mode == "time") {
    $prevStyle = "";
    $nextStyle = "";
    if ($start <= 0) {
        $prevStyle = "display:none;";
    }
    if ($finished) {
        $nextStyle = "display:none;";
    } ?>
        <a style="<?php echo $prevStyle; ?>" href=".?<?php echo "start=".($start - $numPosts)."&numPosts=".$numPosts; ?>">Previous</a>
        <a style="float:right;<?php echo $nextStyle; ?>" href=".?<?php echo "start=".($start + $numPosts)."&numPosts=".$numPosts; ?>">Next</a><?php
    } else if ($mode == "post") {?>
        <a style="float:left;" href="/news">Back to Newsfeed</a>
    <?php
    }
}
?>
