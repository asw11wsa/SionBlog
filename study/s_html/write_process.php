<?php
require_once $_SERVER['DOCUMENT_ROOT']."/vendor/autoload.php";

use Html\HtmlController;

$write = new HtmlController();

$write->writeHtml($_POST['title'],$_POST['content']);

Header("Location:/study/s_css/index.php?con=");

