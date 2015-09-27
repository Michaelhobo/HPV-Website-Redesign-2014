<?php echo file_get_contents("../header.html"); ?>
<link rel="stylesheet" href="/css/photos.css">
<link rel="stylesheet" href="resources/UberGallery.css">
<link rel="stylesheet" href="resources/colorbox/3/colorbox.css">
<script type="text/javascript" src="resources/colorbox/jquery.colorbox.js"></script>
<?php $files = scandir('galleries', 1);?>
<script type="text/javascript">
    $(document).ready(function(){
        <?php 
        if (strlen($_SERVER['QUERY_STRING']) > 0) {
            foreach ($files as $file): 
                if (is_dir('galleries/'.$file) && $file != '.' && $file != '..'): ?>
                    $("a[rel='<?php echo str_replace("+", " ", $file);?>']").colorbox({maxWidth: "90%", maxHeight: "90%", opacity: ".5"});
                <?php endif;
            endforeach; 
        } ?>
    });
</script>
<?php include('resources/UberGallery.php'); ?>
<div class="title">Photos</div>
<div id="gallery_box">
        <?php 
        $gallery_dir="galleries";
        if (strlen($_SERVER['QUERY_STRING']) > 0) { ?>
            <div class="subsection_header"><?php echo ucwords(str_replace("+", " ", $_SERVER['QUERY_STRING'])); ?></div>
            <div class="gallery_container">
                <?php $gallery = UberGallery::init()->createGallery($gallery_dir."/".str_replace("+", " ", $_SERVER['QUERY_STRING']), str_replace("+", " ", $_SERVER['QUERY_STRING'])); ?>
            </div>
        <?php
        } else {
            foreach ($files as $file):
                $dir = $gallery_dir."/".$file;
                if (is_dir($dir) && $file != '.' && $file != '..'): ?>
                    <div class="subsection_header"><?php echo ucwords(str_replace("+", " ", $file)); ?></div>
                        <div class="gallery_container">
                            <a rel="<?php echo $file; ?>" href=".?<?php echo urlencode($file); ?>">
                                <div class="gallery_choice">
                                    <img class="gallery_thumb" src="<?php $images = scandir($dir);
                                                    foreach ($images as $image) {
                                                        if ($image != "." && $image != ".."
                                                                && !is_dir($image)
                                                                    && !preg_match("#.txt$#", $image)) {
                                                            echo $dir."/".$image;
                                                            break;
                                                        }
                                                    } ?>" />
                                    <div class="gallery_description"><?php if (file_exists($dir."/description.txt")) {
                                                                                echo file_get_contents($dir."/description.txt");
                                                                            } else {
                                                                                echo "";
                                                                            } ?>
                                    </div>
                                </div>
                            </a>
                        </div>
                <?php endif;
            endforeach;
        } ?>
</div>
<script src="/js/photos.js"></script>
<?php echo file_get_contents("../footer.html"); ?>
