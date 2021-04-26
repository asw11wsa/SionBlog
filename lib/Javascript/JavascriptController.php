<?php

namespace Javascript;

use Javascript\Javascript;

class JavascriptController extends Javascript {
    protected function giveCssList(){
        $results = $this->getAllContent();
        return $results;
    }

    protected function givePickId($id){
        $results = $this->getPickId($id);
        return $results;
    }

    public function writeCss($title,$content){
        $this->createCss($title,$content);
    }
}
