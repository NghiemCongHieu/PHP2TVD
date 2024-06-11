<?php

namespace Dell\Php21\Controllers\Client;

use Dell\Php21\Commons\Controller;
class HomeController extends Controller
{
        public function index() {
            $name = 'Dell';
    
            $this->renderViewClient('home', [
                'name' => $name
            ]);
        }
    

    
}