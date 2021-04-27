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

    protected function removeJavascript($id){
        $sql = "DELETE FROM javascript WHERE id = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$id]);
    }

    protected function renewJavascript($title,$content,$id){
        $sql = "UPDATE javascript SET title = ?, content = ?, updated_at = current_timestamp() WHERE id = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$title,$content,$id]);
    }

    protected function addCount($id){
        $sql = "UPDATE javascript SET view_count = view_count + 1 WHERE id = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$id]);
    }
}
