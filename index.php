<?php echo file_get_contents("./header.html"); ?>
<link rel="stylesheet" href="/css/main.css">
<link rel="stylesheet" href="/css/slider.css">
<script src="/js/s3Slider.js" type="text/javascript"></script>
<?php include $_SERVER['DOCUMENT_ROOT'].'/slider_posts.php'; ?>
<div id="banner">
    <h1 id="banner_message">Welcome to the Human Powered Vehicle Team!</h1>
</div>
<div class="block">
    <div class="section_header">Updates</div>
    <div class="defSlider" id="updates">
        <ul class="defContent" id="updatesContent">
            <?php writeUpdates(); ?>
            <div class="clear defPost updatesPost"></div>
        </ul>
    </div>
</div>
<!--<div class="block" id="teamsBlock">
    <div class="section_header">Teams</div>
    <div class="defSlider" id="teams">
        <ul class="defContent" id="teamsContent">
            <?php writePosts('/main/', 'teams'); ?>
            <div class="clear defPost teamsPost"></div>
        </ul>
    </div>
</div>
<div class="block" id="sponsorsBlock">
    <div class="section_header">Sponsors</div>
    <div class="defSlider" id="sponsors">
        <ul class="defContent" id="sponsorsContent">
            <?php writeSponsors(); ?>
            <div class="clear defPost teamsPost"></div>
        </ul>
    </div>
</div>-->
<script type="text/javascript">
    $(document).ready(function() { 
        $('#updates').s3Slider({timeOut: 6000});
        //$('#teams').s3Slider({timeOut: 6000});
        //$('#sponsors').s3Slider({timeOut: 6000});
    });
</script>
<script type="text/javascript" src="/js/main.js"></script>
<?php echo file_get_contents("./footer.html"); ?>
