<?php

namespace Html;

use Html\Html;

class HtmlController extends Html {
    protected function giveHtmlList(){
        $results = $this->getAllContent();
        return $results;
    }

    protected function givePickId($id){
        $results = $this->getPickId($id);
        return $results;
    }

    public function writeHtml($title,$content){
        $this->createHtml($title,$content);
    }

    public function deleteHtml($id){
        $this->removeHtml($id);
    }

    public function updateHtml($id,$title,$content){
        $this->renewHtml($id,$title,$content);
    }

    public function countPlus($id){
        $this->addCount($id);
    }
}
