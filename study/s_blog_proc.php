<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/vendor/autoload.php";
use Blog\BlogController;
use Blog\BlogView;

switch($_POST['functionName']){
    case "delete" :
        delete($_POST['table'],$_POST['id']);
        break;
    case "list" :
        callList($_POST['table']);
        break;
    case "show" :
        show($_POST['table'],$_POST['id']);
        break;
    case "write" :
        write($_POST['table'],$_POST['title'],$_POST['content']);
        break;
    case "updateView" :
        showToUpdate($_POST['table'],$_POST['id']);
        break;
    case "update" :
        update($_POST['table'],$_POST['title'],$_POST['content'],$_POST['id']);
        break;
}

function delete($table,$id){
    $write = new BlogController();
    $write->delete($table,$id);
}

function callList($table){
    $list = new BlogView();
    $list->showList($table);
}
function show($table,$id){
    $list = new BlogView();
    $list->showPickId($table,$id);

    $count = new BlogController();
    $count->countPlus($table,$id);
}

function write($table,$title,$content){
    $write = new BlogController();
    $write->write($table,$title,$content);
}

function update($table,$title,$content,$id){
    $write = new BlogController();
    $write->update($table,$title,$content,$id);
}

function showToUpdate($table,$id){
    $list = new BlogView();
    $list->showPickIdToUpdate($table,$id);
}