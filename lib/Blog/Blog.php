<?php

namespace Blog;

use Database\Database;

class Blog extends Database{
    protected function getAllContent(){
            $sql = "SELECT * FROM blogs";
            $stmt = $this->connect()->query($sql);
            $results = $stmt->fetchAll();
            return $results;
    }
}