<?php

namespace Controllers;

use Models\Blog;

class BlogController extends Blog {
    protected function giveList($table,$searchType,$searchKey,$limit){
        if($searchKey == '' && $searchType == ''){
            $results = $this->getAllContent($table,$limit);
            return $results;
        }else{
            $results = $this->getPickedContent($table,$searchType,$searchKey,$limit);
            return $results;
        }
    }

    protected function givePickId($table,$id){
        $results = $this->getPickId($table,$id);
        return $results;
    }

    protected function countPickItems($table,$searchType,$searchKey){
        if($searchKey == '' && $searchType == ''){
            $results = $this->getAllCount($table);
            return $results;
        }else{
            $results = $this->getPickedCount($table,$searchType,$searchKey);
            return $results;
        }
    }

    public function write($table,$title,$content){
        $this->create($table,$title,$content);
    }

    public function delete($table,$id){
        $this->remove($table,$id);
    }

    public function update($table,$id,$title,$content){
        $this->renew($table,$id,$title,$content);
    }

    public function countPlus($table,$id){
        $this->addCount($table,$id);
    }
}
