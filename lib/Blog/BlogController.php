<?php

namespace Blog;

use Blog\Blog;

class BlogController extends Blog {
    protected function giveBlogList(){
        $results = $this->getAllContent();
        return $results;
    }

    protected function givePickId($id){
        $results = $this->getPickId($id);
        return $results;
    }

    public function writeBlog($title,$content){
        $this->createBlog($title,$content);
    }
}
