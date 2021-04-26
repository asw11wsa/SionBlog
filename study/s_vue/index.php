<?php require_once $_SERVER['DOCUMENT_ROOT']."/assets/inc/header.php"; ?>

<?php
if($_GET['con']) {
    switch ($_GET['con']) {
        case 'list':
            include_once $_SERVER['DOCUMENT_ROOT']."/study/s_vue/list.php";
            break;
        case 'update':
            include_once $_SERVER['DOCUMENT_ROOT']."/study/s_vue/update.php";
            break;
        case 'write':
            include_once $_SERVER['DOCUMENT_ROOT']."/study/s_vue/wirte.php";
            break;
        case 'view':
            include_once $_SERVER['DOCUMENT_ROOT']."/study/s_vue/view.php";
            break;
        default:
            include_once $_SERVER['DOCUMENT_ROOT']."/study/s_vue/list.php";
    }
}else{
    include_once $_SERVER['DOCUMENT_ROOT']."/study/s_vue/list.php";
}
?>

<?php require_once $_SERVER['DOCUMENT_ROOT']."/assets/inc/footer.php"; ?>