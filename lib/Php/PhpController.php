<?php

namespace Php;

use Php\Php;

class PhpController extends Php {
    protected function givePhpList(){
        $results = $this->getAllContent();
        return $results;
    }

    protected function givePickId($id){
        $results = $this->getPickId($id);
        return $results;
    }

    public function writePhp($title,$content){
        $this->createPhp($title,$content);
    }
}
