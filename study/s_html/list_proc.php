<?php
//error_reporting(E_ALL);
//ini_set("display_errors", 1);

require_once $_SERVER['DOCUMENT_ROOT']."/vendor/autoload.php";

use Html\HtmlView;

$list = new HtmlView();

$list->showHtmlList();