<?php
require_once $_SERVER['DOCUMENT_ROOT']."/vendor/autoload.php";

use Blog\BlogController;

$write = new BlogController();

$write->writeBlog('hello this is big test2','this is second update in webpage');