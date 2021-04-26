<?php

namespace Css;

use Css\Css;

class CssController extends Css {
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
