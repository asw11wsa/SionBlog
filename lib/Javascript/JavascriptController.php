<?php

namespace Javascript;

use Javascript\Javascript;

class JavascriptController extends Javascript {
    protected function giveJavascriptList(){
        $results = $this->getAllContent();
        return $results;
    }

    protected function givePickId($id){
        $results = $this->getPickId($id);
        return $results;
    }

    public function writeJavascript($title,$content){
        $this->createJavascript($title,$content);
    }

    public function deleteJavascript($id){
        $this->removeJavascript($id);
    }

    public function updateJavascript($id,$title,$content){
        $this->renewJavascript($id,$title,$content);
    }

    public function countPlus($id){
        $this->addCount($id);
    }
}
