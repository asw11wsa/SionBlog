<?php

namespace Views;

use Controllers\BlogController;

class BlogView extends BlogController {
    public function showList($table,$searchType,$searchKey){
        $results = $this->giveList($table,$searchType,$searchKey);
        $num = 0;
        $category = substr($table, 0, -1);
        foreach ($results as $result){
            $num += 1;
            $put = '';
            $put .= "<tr>";
            $put .= "<th scope='row'>".$num."</th>";
            $put .= "<td><a href='/study/s_{$category}/index.php?con=view&id={$result['id']}'>".$result['title']."</a></td>";
            $put .= "<td>".$result['created_at']."</td>";
            $put .= "<td>".$result['view_count']."</td>";
            $put .= "</tr>";
            echo $put;
        }
    }

    public function showListTest($table,$searchType,$searchKey,$limit){
        $results = $this->giveList($table,$searchType,$searchKey,$limit);
        $num = 0;
        $category = substr($table, 0, -1);
        foreach ($results as $result){
            $num += 1;
            $put = '';
            $put .= "<div class='card m-1 flex w-75' style='width: 18rem;'>";
            $put .= "<div class='card-body'>";
            $put .= "<h5 class='card-title'>".$result['title']."</h5>";
            $put .= "<p class='card-text'>".$result['content']."</p>";
            $put .= "<a href='/study/s_{$category}/index.php?con=view&id={$result['id']}' class='float-end btn btn-primary'>Go read</a>";
            $put .= "</div>";
            $put .= "</div>";
            echo $put;
        }
    }

    public function showPickId($table,$id){
        $results = $this->givePickId($table,$id);
        foreach ($results as $result){
            $put = '';
            $put .= "<div>".$result['title']."</div>";
            $put .= "<div>".$result['content']."</div>";
            echo $put;
        }
    }

    public function showPickIdToUpdate($table,$id){
        $results = $this->givePickId($table,$id);
        foreach ($results as $result){
            $put = '';
            $put .= "<input type='text' name='title' value='".$result['title']."'></input>";
            $put .= "<input type='text' name='content' value='".$result['content']."'></input>";
            echo $put;
        }
    }

    public function countItems($table,$searchType,$searchKey){
        $results = $this->countPickItems($table,$searchType,$searchKey);
        foreach ($results as $result){
            echo $result['cnt'];
        }
    }
}
