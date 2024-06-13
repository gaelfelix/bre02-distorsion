<?php

class CategoryController {
    
    private CategoryManager $cm;
    
    public function __construct() {
        $this->cm = new CategoryManager();
    }
    
    public function getCategories() : array {
        $categories = $this->cm->findAllCategories();
    }
    
}

?>