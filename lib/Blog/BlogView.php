<?php

namespace Blog;

use Blog\BlogController;

class BlogView extends BlogController {
    public function showBlogList(){
        $results = $this->giveBlogList();
        foreach ($results as $result){
            echo $result['id']."<hr>".$result['title']."<br>".$result['content'];
        }
    }
}