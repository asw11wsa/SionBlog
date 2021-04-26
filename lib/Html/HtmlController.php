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
}
