<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/vendor/autoload.php";
use Controllers\BlogController;
use Views\BlogView;

switch($_POST['functionName']){
    case "delete" :
        delete($_POST['table'],$_POST['id']);
        break;
    case "list" :
        callList($_POST['table'],$_POST['searchType'],$_POST['searchKey'],$_POST['limit']);
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
    case "count" :
        count_items($_POST['table'],$_POST['searchType'],$_POST['searchKey'],$_POST['limit']);
        break;
}

function delete($table,$id){
    $write = new BlogController();
    $write->delete($table,$id);
}

function callList($table,$searchType,$searchKey,$limit){
    $list = new BlogView();
    $list->showListTest($table,$searchType,$searchKey,$limit);
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

function count_items($table,$searchType,$searchKey){
    $count = new BlogView();
    $count->countItems($table,$searchType,$searchKey);
}