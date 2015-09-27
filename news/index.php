<?php echo file_get_contents("../header.html"); include $_SERVER['DOCUMENT_ROOT'].'/news/feed_functions.php'; ?>
<link rel="stylesheet" href="/css/news.css">
<div class="title">Newsfeed</div>
<div id="feed">
    <?php loadFeed("posts", $start, $start + $numPosts, $mode); ?>
    <div class="navigate">
        <?php loadNav($start, $finished, $numPosts); ?>
    </div>
</div>
<script src="/js/news.js"></script>
<?php echo file_get_contents("../footer.html"); ?>
