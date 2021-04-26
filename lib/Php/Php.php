<?php

namespace Php;

use Database\Database;

class Php extends Database{
    protected function getAllContent(){
        $sql = "SELECT * FROM phps";
        $stmt = $this->connect()->query($sql);
        $results = $stmt->fetchAll();
        return $results;
    }

    protected function createPhp($title,$content){
        $sql = "INSERT INTO phps (title,content) VALUE (?,?)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$title,$content]);
    }

    protected function getPickId($id){
        $sql = "SELECT * FROM phps WHERE id = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$id]);

        $results = $stmt->fetchAll();
        return $results;
    }
}
