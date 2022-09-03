<?php

class accountModel extends database
{

    public function checkEmail($email)
    {

        if ($this->Query("SELECT email FROM users WHERE email = ?", [$email])) {

            if ($this->rowCount() > 0) {
                return false;
            } else {
                return true;
            }
        }
    }

    public function createAccount($data)
    {


        if ($this->Query("INSERT INTO users (username,firstname,lastname,email,password, is_deleted) VALUES (?,?,?,?,?,?)", $data)) {
            echo "done";

            return true;
        }
    }

    public function userLogin($email, $password)
    {

        if ($this->Query("SELECT * FROM users WHERE email = ? ", [$email])) {

            if ($this->rowCount() > 0) {

                $row = $this->fetch();
                $dbPassword = $row->password;
                $userId = $row->id;
                $userName = $row->username;
                $role = $row->role;
                if (password_verify($password, $dbPassword)) {

                    $data = ['status' => 'ok', 'role_id' => $role, 'user_id' => $userId, 'user_name' => $userName,];
                } else {
                    $data = ['status' => 'passwordNotMacthed'];
                }
            } else {
                $data = ['status' => 'emailNotFound'];
            }
        }
        return $data;
    }
    public function contactform($data)
    {

        if ($this->Query("INSERT INTO contact (name,email,subject,msg) VALUES (?,?,?,?)", $data)) {
            echo "done";

            return true;
        }
    }

    public function newsletter($data)
    {

        if ($this->Query("INSERT INTO newsletter (name,email) VALUES (?,?)", $data)) {
            echo "done";

            return true;
        }
    }

    public function getprofiledata()
    {
        if ($this->Query("SELECT * FROM users where is_deleted=1 ")) {
            $Profiledata = $this->fetchAll();
            return $Profiledata;
        }
    }
    public function getdata()
    {
        $this->Query("SELECT * FROM category where is_deleted = 0 AND parent_id = 0");
        $Categorydata = $this->fetchAll();
        return $Categorydata;
    }
    public function getchildData($id)
    {
        if ($this->Query("SELECT * FROM category where is_deleted=0 AND parent_id = $id ")) {
            $CategorychildData = $this->fetchAll();
            return $CategorychildData;
        }
    }
    public function getProductData()
    {

        if ($this->Query("SELECT * FROM images RIGHT JOIN product ON product.id = images.product_id GROUP BY product.id")) {
            $Productdata = $this->fetchAll();

            return $Productdata;
        }
    }


    public function getProductImages($id){
        if ($this->Query("SELECT * FROM product RIGHT JOIN images ON  images.product_id = product.id where product_id=$id GROUP BY images.product_id ")) {
            $Productdata = $this->fetchAll();
            return $Productdata;
        }
    }


    public function getCatProductData($id)
    {

        if ($this->Query("SELECT * FROM category INNER JOIN product ON category.id = product.cat_id JOIN images ON  images.product_id = product.id where cat_id=$id")) {
            $CatProductData = $this->fetchAll();
           
            return $CatProductData;
        }
    }

    
    public function searchProduct($searchdata){
       if($this->Query("SELECT * FROM product JOIN images ON  product.id = images.product_id WHERE name LIKE '%$searchdata%' " )){
           $searchdata = $this->fetchAll();
           return $searchdata;
       }
   }

   public function createOrder($orderdata)
   {
       // print_r($orderdata);exit;
       // $user_Id =$conn->insertid; 
    if ($this->Query("INSERT INTO user_address (firstname,lastname,email,mobile,address_1,address_2,state,city, post_code,Country,user_id) VALUES (?,?,?,?,?,?,?,?,?,?,?)", $orderdata)) {

        return true;
    }
}
public function Order($order)
{
        // var_dump($oreder_id);exit;
    foreach($order as $oreder_id){
        if ($this->Query("INSERT INTO orders (product_id) VALUES (?) ",$oreder_id)) {
            return true;
        }

    }
}
public function getOrder()
{

    if ($this->Query("SELECT * FROM user_address")) {
        $orderdata = $this->fetchAll();
        return $orderdata;
    }
}
public function getdetaildata(){


   if ($this->Query("SELECT * FROM  product  LEFT JOIN images ON images.product_id = product.id  GROUP BY product.id")) {

    $detaildata = $this->fetchAll();

    return $detaildata;

}
}
public function getReviewData($id){

    if($this->Query("SELECT * FROM product_review where product_id = ?",[$id] )){
        $data = $this->fetchAll();
              // var_dump($Cartdata);exit;

        return $data;

    }

}
public function getSetdata()
{
    $this->Query("SELECT * FROM settings WHERE is_deleted = 0  ");
    $Settingsdata = $this->fetchAll();
    return $Settingsdata;
}
}