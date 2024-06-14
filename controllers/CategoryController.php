<?php

class CategoryController {
    
    private CategoryManager $cm;
    
    public function __construct() {
        $this->cm = new CategoryManager();
    }
    
    public function getCategories() : void {
        $categories = $this->cm->findAllCategories();
        $template = "templates/get_categories.phtml";
        require ("templates/layout.phtml");
    }
    
    public function getCategory() : void {
        $category = $this->cm->findCategory();
        $template = "templates/get_category.phtml";
        require ("templates/layout.phtml");
    }
    
}

?>