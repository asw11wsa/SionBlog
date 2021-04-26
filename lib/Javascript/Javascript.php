<?php

namespace Javascript;

use Database\Database;

class Javascript extends Database{
    protected function getAllContent(){
        $sql = "SELECT * FROM javascripts";
        $stmt = $this->connect()->query($sql);
        $results = $stmt->fetchAll();
        return $results;
    }

    protected function createJavascript($title,$content){
        $sql = "INSERT INTO javascripts (title,content) VALUE (?,?)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$title,$content]);
    }

    protected function getPickId($id){
        $sql = "SELECT * FROM javascripts WHERE id = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$id]);

        $results = $stmt->fetchAll();
        return $results;
    }
}
