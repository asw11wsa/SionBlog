<?php

namespace Models;

use Database\Database;

class Blog extends Database{
    protected function getAllContent($table){
        $sql = "SELECT * FROM {$table}";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$table]);
        $results = $stmt->fetchAll();
        print_r($this->connect());
       // print_r("<hr>");
       // print_r($sql);
       // print_r("<hr>");
       // print_r($results);
        return $results;
    }

    protected function getPickedContent($table,$searchType,$searchKey){
        $sql = "SELECT * FROM {$table} WHERE REPLACE({$searchType}, ' ', '') LIKE '%{$searchKey}%'";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$searchType,$searchKey]);
        $results = $stmt->fetchAll();
//        print_r($this->connect());
//         print_r("<hr>");
//         print_r($sql);
//         print_r("<hr>");
//         print_r($results);
//        print_r("<hr>");
//        print_r($searchType);
//        print_r("<hr>");
//        print_r($searchKey);
        return $results;
    }

    protected function create($table,$title,$content){
        $sql = "INSERT INTO {$table} (title,content) VALUE (?,?)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$title,$content]);
    }

    protected function getPickId($table,$id){
        $sql = "SELECT * FROM {$table} WHERE id = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$id]);

        $results = $stmt->fetchAll();
        return $results;
    }

    protected function remove($table,$id){
        $sql = "DELETE FROM {$table} WHERE id = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$id]);
    }

    protected function renew($table,$title,$content,$id){
        $sql = "UPDATE {$table} SET title = ?, content = ?, updated_at = current_timestamp() WHERE id = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$title,$content,$id]);
    }

    protected function addCount($table,$id){
        $sql = "UPDATE {$table} SET view_count = view_count + 1 WHERE id = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$id]);
    }
}
