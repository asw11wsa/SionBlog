<?php

namespace Css;

use Database\Database;

class Css extends Database{
    protected function getAllContent(){
        $sql = "SELECT * FROM csss";
        $stmt = $this->connect()->query($sql);
        $results = $stmt->fetchAll();
        return $results;
    }

    protected function createCss($title,$content){
        $sql = "INSERT INTO csss (title,content) VALUE (?,?)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$title,$content]);
    }

    protected function getPickId($id){
        $sql = "SELECT * FROM csss WHERE id = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$id]);

        $results = $stmt->fetchAll();
        return $results;
    }

    protected function removeCss($id){
        $sql = "DELETE FROM csss WHERE id = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$id]);
    }

    protected function renewCss($title,$content,$id){
        $sql = "UPDATE csss SET title = ?, content = ? WHERE id = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$title,$content,$id]);
    }

    protected function addCount($id){
        $sql = "UPDATE csss SET view_count = view_count + 1 WHERE id = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$id]);
    }
}
