<?php
require_once $_SERVER['DOCUMENT_ROOT']."/vendor/autoload.php";

use Javascript\JavascriptController;

$write = new JavascriptController();

$write->writeJavascript($_POST['title'],$_POST['content']);

Header("Location:/study/s_javascript/index.php?con=");

