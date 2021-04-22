<?php

namespace Blog;

use Blog\Blog;

class BlogController extends Blog {
    protected function giveBlogList(){
        $results = $this->getAllContent();
        return $results;
    }
}
