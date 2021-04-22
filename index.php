<?php require_once $_SERVER['DOCUMENT_ROOT']."/asset/inc/header.php"; ?>


<?php
use Blog\BlogView;

$blog = new BlogView();

$blog->showBlogList();

?>

<?php require_once $_SERVER['DOCUMENT_ROOT']."/asset/inc/footer.php"; ?>