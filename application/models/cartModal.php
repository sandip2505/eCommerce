<?php

class cartModal extends database {

    
    public function getCartData(){

        if($this->Query("SELECT * FROM product"   )){
            $Cartdata = $this->fetchAll();
            // var_dump($Cartdata);exit;

            return $Cartdata;

        }
    }
    public function getProductData(){

        if($this->Query("SELECT * FROM product where is_deleted=0" )){
            $Productdata = $this->fetchAll();

            return $Productdata;

        }
    }
   

}
?>