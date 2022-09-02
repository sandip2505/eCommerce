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

       if($this->Query("SELECT * FROM coupon_master where coupon_code = ? AND coupon_status = 1 ", [$coupondataValue])){
        $CouponData = $this->fetchAll();
         // var_dump($CouponData);exit;
        return $CouponData;

    }

}

public function checkCoupon($Coupondata)
{

    if ($this->Query("SELECT coupon_code FROM coupon_master WHERE coupon_code = ? ", $Coupondata)) {

        if ($this->rowCount() > 0) {
            return true;
        }

    }
}

public function checkCouponDate($Coupondata,$Coupondate)
{   
    if ($this->Query("SELECT end_date FROM coupon_master WHERE coupon_code = ?  AND end_date > '".$Coupondate."'" ,$Coupondata)) {
       if ($this->rowCount()>0){
        return true;

    }

}
}

public function checkCouponValue($Coupondata,$Gt)
{
    if ($this->Query("SELECT * FROM coupon_master WHERE coupon_code = ?  AND cart_min_value <'".$Gt."'" ,$Coupondata)) {
      if ($this->rowCount()>0){
        return true;
    }

}
}

public function CreateReview($data)
{

    if ($this->Query("INSERT INTO product_review (rate,product_id,review,name,email) VALUES (?,?,?,?,?)", $data)) {
        return false;
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