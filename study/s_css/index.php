<?php require_once $_SERVER['DOCUMENT_ROOT']."/assets/inc/header.php"; ?>

<?php
 switch ($_GET['con']){
     case 'list':
         include_once $_SERVER['DOCUMENT_ROOT']."/study/s_css/list.php";
         break;
     case 'update':
         include_once $_SERVER['DOCUMENT_ROOT']."/study/s_css/update.php";
         break;
     case 'write':
         include_once $_SERVER['DOCUMENT_ROOT']."/study/s_css/wirte.php";
         break;
     default:
         include_once $_SERVER['DOCUMENT_ROOT']."/study/s_css/list.php";
 }
?>

<?php require_once $_SERVER['DOCUMENT_ROOT']."/assets/inc/footer.php"; ?>