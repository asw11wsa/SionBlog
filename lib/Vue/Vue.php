<?php

namespace Vue;

use Database\Database;

class Vue extends Database{
    protected function getAllContent(){
        $sql = "SELECT * FROM vues";
        $stmt = $this->connect()->query($sql);
        $results = $stmt->fetchAll();
        return $results;
    }

    protected function createVue($title,$content){
        $sql = "INSERT INTO vues (title,content) VALUE (?,?)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$title,$content]);
    }

    protected function getPickId($id){
        $sql = "SELECT * FROM vues WHERE id = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$id]);

        $results = $stmt->fetchAll();
        return $results;
    }
}
