<?php
require_once $_SERVER['DOCUMENT_ROOT']."/vendor/autoload.php";

use Vue\VueController;

$write = new VueController();

$write->writeVue($_POST['title'],$_POST['content']);

Header("Location:/study/s_vue/index.php?con=");

