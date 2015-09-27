<?php
/*writePosts based in path in folder name.
 * Usage: For example, if you want to write posts in 'DOC_ROOT/path_name/folder_name':
 * Path should be '/path_name/'
 * name should be 'folder_name'
 * It's important that name does not have any slashes, and that it matches the name of the slider.
 */
function printSponsors() {
    $delimiter = "====";
    $sortedSponsors = array(
        "gold" => array(),
        "silver" => array(),
        "friend" => array(),
    );
    $order = array("gold","silver","friend");
    $dir = opendir("sponsorlist");
    while ($sponsor = readdir($dir)) {
        if (preg_match("/(\w+)\..*\.sponsor/", $sponsor, $matches)) {
            $sortedSponsors[$matches[1]][] = file_get_contents("sponsorlist/".$sponsor);
        }
    }
    unset($sponsor);
    unset($matches);
    foreach ($order as $type) {
        foreach ($sortedSponsors[$type] as $curSponsor) {
            $pieces = explode($delimiter, $curSponsor, 2);
            echo "<div class=\"".$type." sponsor\"><div class=\"icon\">".$pieces[0]."</div><div class=\"description\">".$pieces[1]."</div></div>";
        }
    }
    unset($curSponsor);
    unset($type);
}
