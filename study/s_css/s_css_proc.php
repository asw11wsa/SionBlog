<?php
require_once $_SERVER['DOCUMENT_ROOT']."/vendor/autoload.php";
use Css\CssController;
use Css\CssView;

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
    $write = new CssController();
    $write->deleteCss($id);
}

function callList(){
    $list = new CssView();
    $list->showCssList();
}
function show($id){
    $list = new CssView();
    $list->showPickId($id);

    $count = new CssController();
    $count->countPlus($id);
}

function write($title,$content){
    $write = new CssController();
    $write->writeCss($title,$content);
}

function update($title,$content,$id){
    $write = new CssController();
    $write->updateCss($title,$content,$id);
}

function showToUpdate($id){
    $list = new CssView();
    $list->showPickIdToUpdate($id);
}