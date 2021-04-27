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

    protected function removePhp($id){
        $sql = "DELETE FROM phps WHERE id = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$id]);
    }

    protected function renewPhp($title,$content,$id){
        $sql = "UPDATE phps SET title = ?, content = ?, updated_at = current_timestamp() WHERE id = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$title,$content,$id]);
    }

    protected function addCount($id){
        $sql = "UPDATE phps SET view_count = view_count + 1 WHERE id = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$id]);
    }
}
