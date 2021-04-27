<?php

namespace Html;

use Html\HtmlController;

class HtmlView extends HtmlController {
    public function showHtmlList(){
        $results = $this->giveHtmlList();
        $num = 0;
        foreach ($results as $result){
            $num += 1;
            $put = '';
            $put .= "<tr>";
            $put .= "<th scope='row'>".$num."</th>";
            $put .= "<td><a href='/study/s_html/index.php?con=view&id={$result['id']}'>".$result['title']."</a></td>";
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

    public function showPickIdToUpdate($id){
        $results = $this->givePickId($id);
        foreach ($results as $result){
            $put = '';
            $put .= "<input type='text' name='title' value='".$result['title']."'></input>";
            $put .= "<input type='text' name='content' value='".$result['content']."'></input>";
            echo $put;
        }
    }
}
