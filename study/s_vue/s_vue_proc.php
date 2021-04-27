<?php
require_once $_SERVER['DOCUMENT_ROOT']."/vendor/autoload.php";
use Vue\VueController;
use Vue\VueView;

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
    $write = new VueController();
    $write->deleteVue($id);
}

function callList(){
    $list = new VueView();
    $list->showVueList();
}
function show($id){
    $list = new VueView();
    $list->showPickId($id);

    $count = new VueController();
    $count->countPlus($id);
}

function write($title,$content){
    $write = new VueController();
    $write->writeVue($title,$content);
}

function update($title,$content,$id){
    $write = new VueController();
    $write->updateVue($title,$content,$id);
}

function showToUpdate($id){
    $list = new VueView();
    $list->showPickIdToUpdate($id);
}