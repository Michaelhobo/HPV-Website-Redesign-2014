<?php echo file_get_contents("../header.html"); ?>
<link rel="stylesheet" href="/css/sponsors.css">
<link rel="stylesheet" href="/css/slider.css">
<script src="/js/s3Slider.js" type="text/javascript"></script>
<?php include $_SERVER['DOCUMENT_ROOT'].'/slider_posts.php'; include $_SERVER['DOCUMENT_ROOT']."/sponsors/parse_sponsors.php";?>
<div class="title">Sponsors</div>
<div id="banner">
    <p>
The Human Powered Vehicle team is reforming this year, and we are currently seeking sponsorship to help us reach our goal of building the fastest bike on Earth. Our primary need is carbon-fiber to be used as the primary structural component of the fairing, however we also need bicycle components such as chains, wheels, and pedals.
<br></br>
The fairing provides a large advertising space which will be seen by engineers, students, and industry professionals. Sponsors will also be displayed prominently on our website.
<br></br>
CalHPV appreciates donations from alumni and those interested in our project. Donated money goes towards materials and travel funds to help us on the road to competing in the ASME HPV Competition. Donate at our <a href="http://givetocal.berkeley.edu/fund/?f=FU1170000" target="_blank">Give to Cal</a> page or talk to us directly at calhpv@gmail.com. CalHPV thanks you for your interest and contribution!
    </p>
</div>
<div id="sponsor_list">
    <?php printSponsors(); ?>
</div>
<script type="text/javascript">
    $(document).ready(function() {
        $('#sponsors').s3Slider({timeOut: 7000});
    });
</script>
<script src="/js/sponsors.js"></script>
<?php echo file_get_contents("../footer.html"); ?>
