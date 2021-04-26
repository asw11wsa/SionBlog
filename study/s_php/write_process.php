<?php
require_once $_SERVER['DOCUMENT_ROOT']."/vendor/autoload.php";

use Css\CssController;

$write = new CssController();

$write->writeCss($_POST['title'],$_POST['content']);

Header("Location:/study/s_css/index.php?con=");

