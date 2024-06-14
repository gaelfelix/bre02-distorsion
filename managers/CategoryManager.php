<?php

class CategoryManager extends AbstractManager {
    
    public function __construct() {
        parent::__construct();
    }
    
    public function findAllCategories() : array {
        
        $categories = [];
        
        $query = $this->db->prepare("SELECT * FROM categories");
        $query->execute();
        $result =  $query->fetchAll(PDO::FETCH_ASSOC);
        
        foreach ($result as $item) {
            $category = new Category($item["name"]);
            $category->setId($item["id"]);
            $categories[] = $category;
        }
        return $categories;
    }
    
    public function findCategory(string $category) : ?Category {
        
        $query = $this->db->prepare("SELECT * FROM categories WHERE name = :name");
        $parameters = [
            'name' => $category   
        ];
        $query->execute($parameters);
        $category =  $query->fetch(PDO::FETCH_ASSOC);
        return $category;
    }
    
}

?>