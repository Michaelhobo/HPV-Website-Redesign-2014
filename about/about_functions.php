<?php
function writeTeams() {
    $path=$_SERVER['DOCUMENT_ROOT']."/about/teams/";
    $files = scandir($path, 1);
    $sorted = array();
    foreach ($files as $file) {
        if (is_dir($path."/".$file) && preg_match("#\d+-.*#", $file, $matches)) {
            $pieces = explode("-", $matches[0], 2);
            $sorted[intval($pieces[0])] = $pieces[1];
        }
    }
    foreach ($sorted as $order => $name) {
        echo "<li class='team_blurb'><div class=\"subsection_header\">".ucwords($name)."</div>";
        if (file_exists($path."/".$order."-".$name."/icon.png")) {
            echo "<img class='team_icon' src='teams/".$order."-".$name."/icon.png'/>";
        }
        if (file_exists($path."/".$order."-".$name."/description.txt")) {
            echo "<div class='team_description'><p>".file_get_contents($path."/".$order."-".$name."/description.txt")."</p></div>";
        }
        echo "</li>";
    }
}
?>
