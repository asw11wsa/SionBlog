<?php

namespace Blog;

use Blog\BlogController;

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
}
