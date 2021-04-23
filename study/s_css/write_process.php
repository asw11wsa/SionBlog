<?php
require_once $_SERVER['DOCUMENT_ROOT']."/vendor/autoload.php";

use Blog\BlogController;

$write = new BlogController();

$write->writeBlog($_POST['title'],$_POST['content']);

Header("Location:/study/s_css/index.php?con=");

