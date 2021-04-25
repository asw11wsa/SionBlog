<?php require_once $_SERVER['DOCUMENT_ROOT']."/vendor/autoload.php"; ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<?php
use Blog\BlogView;

$list = new BlogView();

$list->showBlogList();
?>
</body>
</html>