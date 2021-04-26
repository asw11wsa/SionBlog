<?php
require_once $_SERVER['DOCUMENT_ROOT']."/vendor/autoload.php";

use Php\PhpController;

$write = new PhpController();

$write->writePhp($_POST['title'],$_POST['content']);

Header("Location:/study/s_php/index.php?con=");

