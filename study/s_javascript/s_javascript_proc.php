<?php
require_once $_SERVER['DOCUMENT_ROOT']."/vendor/autoload.php";
use Javascript\JavascriptController;
use Javascript\JavascriptView;

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
    $write = new JavascriptController();
    $write->deleteJavascript($id);
}

function callList(){
    $list = new JavascriptView();
    $list->showJavascriptList();
}
function show($id){
    $list = new JavascriptView();
    $list->showPickId($id);

    $count = new JavascriptController();
    $count->countPlus($id);
}

function write($title,$content){
    $write = new JavascriptController();
    $write->writeJavascript($title,$content);
}

function update($title,$content,$id){
    $write = new JavascriptController();
    $write->updateJavascript($title,$content,$id);
}

function showToUpdate($id){
    $list = new JavascriptView();
    $list->showPickIdToUpdate($id);
}