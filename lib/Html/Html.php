<?php

namespace Html;

use Database\Database;

class Html extends Database{
    protected function getAllContent(){
        $sql = "SELECT * FROM htmls";
        $stmt = $this->connect()->query($sql);
        $results = $stmt->fetchAll();
        return $results;
    }

    protected function createHtml($title,$content){
        $sql = "INSERT INTO htmls (title,content) VALUE (?,?)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$title,$content]);
    }

    protected function getPickId($id){
        $sql = "SELECT * FROM htmls WHERE id = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$id]);

        $results = $stmt->fetchAll();
        return $results;
    }
}
