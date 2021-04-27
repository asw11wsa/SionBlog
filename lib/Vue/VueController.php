<?php

namespace Vue;

use Vue\Vue;

class VueController extends Vue {
    protected function giveVueList(){
        $results = $this->getAllContent();
        return $results;
    }

    protected function givePickId($id){
        $results = $this->getPickId($id);
        return $results;
    }

    public function writeVue($title,$content){
        $this->createVue($title,$content);
    }

    public function deleteVue($id){
        $this->removeVue($id);
    }

    public function updateVue($id,$title,$content){
        $this->renewVue($id,$title,$content);
    }

    public function countPlus($id){
        $this->addCount($id);
    }
}
