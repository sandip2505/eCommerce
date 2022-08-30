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
              // var_dump($Cartdata);exit;

            return $Productdata;

        }
    }
    public function AddCoupon($coupondataValue){
       
     if($this->Query("SELECT coupon_value FROM coupon_master where coupon_code = ? ", [$coupondataValue] )){
            $CouponData = $this->fetchAll();
            return $CouponData;
            // var_dump($CouponData);exit;

    }

}
 public function CreateReview($data)
    {

        if ($this->Query("INSERT INTO product_review (rate,product_id,review,name,email) VALUES (?,?,?,?,?)", $data)) {
            return true;
        }
    }











/*public function searchProduct($searchdata){
   if($this->Query("SELECT * FROM product WHERE name LIKE '%$searchdata%' " )){
       $searchdata = $this->fetchAll();
       return $searchdata;
   }
}*/
}
?>