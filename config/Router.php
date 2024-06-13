<?php

class Router {
    
    private DefaultController $dc;
    private CategoryController $cc;
    
    public function __construct() {
        $this->dc = new DefaultController();
        $this->cc = new CategoryController();
    }
    
    public function handleRequest(?string $route) : void {
/*    elle reçoit la route et se chargera de faire correspondre la route à une méthode de controller
1 URL === 1 ROUTE === UNE MÉTHODE DE CONTROLLER*/

        if ($route !== null && $route === 'home') {
            $this->dc->home();
        }
        else if ($route !== null && $route === 'add-category') {
            echo "route add-category";
        }
        else if ($route !== null && $route === 'get-category') {
            echo "route add-category";
        }
        else if ($route !== null && $route === 'get-categories') {
            $this->cc->getCategories();
        }
        else if ($route !== null && $route === 'add-room') {
            echo "route add-room";
        }
        else if ($route !== null && $route === 'get-rooms') {
            echo "route add-category";
        }
        else if ($route !== null && $route === 'add-message') {
            echo "route add-message";
        }
        else if ($route !== null && $route === 'show-room') {
            echo "route show-room";
        }
        else if ($route === null) {
            $this->dc->home();
        }
        else {
            $this->dc->notFound();
        }

    }
    
}

?>






