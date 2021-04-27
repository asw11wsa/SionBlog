<?php

namespace Vue;

use Vue\VueController;

class VueView extends VueController {
    public function showVueList(){
        $results = $this->giveVueList();
        $num = 0;
        foreach ($results as $result){
            $num += 1;
            $put = '';
            $put .= "<tr>";
            $put .= "<th scope='row'>".$num."</th>";
            $put .= "<td><a href='/study/s_vue/index.php?con=view&id={$result['id']}'>".$result['title']."</a></td>";
            $put .= "<td>".$result['created_at']."</td>";
            $put .= "</tr>";
            echo $put;
        }
    }

    public function showPickId($id){
        $results = $this->givePickId($id);
        foreach ($results as $result){
            $put = '';
            $put .= "<div>".$result['title']."</div>";
            $put .= "<div>".$result['content']."</div>";
            echo $put;
        }
    }
}
