<?php

namespace Blog;

use Blog\Blog;

class BlogController extends Blog {
    protected function giveBlogList(){
        $results = $this->getAllContent();
        return $results;
    }

    public function writeBlog($title,$content){
        $this->createBlog($title,$content);
    }
}
