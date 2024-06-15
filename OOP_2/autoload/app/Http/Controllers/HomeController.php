<?php

namespace App\Http\Controllers;

use App\User;
use App\Product;

class HomeController {

     public function index()
     {
         $user = new User();
         return $user->getListUser();
     }

     public function listProduct()
     {
         $product = new Product();
         return $product->listProduct();
     }


}