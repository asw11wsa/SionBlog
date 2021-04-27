<?php
require_once $_SERVER['DOCUMENT_ROOT']."/vendor/autoload.php";
use Html\HtmlController;
use Html\HtmlView;

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
    $write = new HtmlController();
    $write->deleteHtml($id);
}

function callList(){
    $list = new HtmlView();
    $list->showHtmlList();
}
function show($id){
    $list = new HtmlView();
    $list->showPickId($id);

    $count = new HtmlController();
    $count->countPlus($id);
}

function write($title,$content){
    $write = new HtmlController();
    $write->writeHtml($title,$content);
}

function update($title,$content,$id){
    $write = new HtmlController();
    $write->updateHtml($title,$content,$id);
}

function showToUpdate($id){
    $list = new HtmlView();
    $list->showPickIdToUpdate($id);
}