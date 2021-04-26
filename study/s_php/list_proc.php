<?php
//error_reporting(E_ALL);
//ini_set("display_errors", 1);

require_once $_SERVER['DOCUMENT_ROOT']."/vendor/autoload.php";

use Css\CssView;

$list = new CssView();

$list->showCssList();