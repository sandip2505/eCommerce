<?php

class welcome extends framework{

   public function __construct(){
      $this->helper("link");
   }

   public function index(){
      $this->view("index");
   }

   public function shop(){
      $this->view("shop");
   }
    public function contact(){
      $this->view("contact");
   }
    public function checkout(){
      $this->view("checkout");
   }
    public function cart(){
      $this->view("cart");
   }
   public function detail(){
      $this->view("detail");
   }

}

?>