<?php
require_once $_SERVER['DOCUMENT_ROOT']."/vendor/autoload.php";
use Php\PhpController;
use Php\PhpView;

switch($_POST['functionName']){
    case "delete" :
        delete($_POST['id']);
        break;
    case "list" :
        callList();
        break;
    case "show" :
        show($_POST['id']);
        break;
    case "write" :
        write($_POST['title'],$_POST['content']);
        break;
    case "updateView" :
        showToUpdate($_POST['id']);
        break;
    case "update" :
        update($_POST['title'],$_POST['content'],$_POST['id']);
        break;
}

function delete($id){
    $write = new PhpController();
    $write->deletePhp($id);
}

function callList(){
    $list = new PhpView();
    $list->showPhpList();
}
function show($id){
    $list = new PhpView();
    $list->showPickId($id);

    $count = new PhpController();
    $count->countPlus($id);
}

function write($title,$content){
    $write = new PhpController();
    $write->writePhp($title,$content);
}

function update($title,$content,$id){
    $write = new PhpController();
    $write->updatePhp($title,$content,$id);
}

function showToUpdate($id){
    $list = new PhpView();
    $list->showPickIdToUpdate($id);
}