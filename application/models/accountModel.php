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

        if ($this->Query("SELECT * FROM images RIGHT JOIN product ON product.id = images.product_id ")) {
            $Productdata = $this->fetchAll();

            return $Productdata;
        }
    }
    /*SELECT table1.column1, table2.column2...
FROM table1
LEFT JOIN table2
ON table1.common_field = table2.common_field;*/

    /*SELECT column_name(s)
FROM table1
LEFT JOIN table2
ON table1.column_name = table2.column_name;*/

public function createOrder($orderdata)
{
       // print_r($orderdata);exit;
       // $user_Id =$conn->insertid; 
    if ($this->Query("INSERT INTO user_address (firstname,lastname,email,mobile,address_1,address_2,state,city, post_code,Country,user_id) VALUES (?,?,?,?,?,?,?,?,?,?,?)", $orderdata)) {

        return true;
    }
}
public function getOrder()
{

    if ($this->Query("SELECT * FROM user_address where ")) {
        $orderdata = $this->fetchAll();
        return $orderdata;
    }
}
    // public function getImgData(){

    //     if($this->Query("SELECT image FROM images " )){
    //         $Imgdata = $this->fetchAll();

    //         return $Imgdata;

    //     }
    // }
/*SELECT * FROM images RIGHT JOIN product ON product.id = images.product_id */
public function getdetaildata($id){

        // if($this->Query("SELECT * FROM images  where product_id = ? ",[$id] )){
        //     $detaildata = $this->fetchAll();
            // var_dump($detaildata);exit;
   if ($this->Query("SELECT * FROM  product  LEFT JOIN images ON images.product_id = product.id where PRODUCT_id = ? ",[$id])) {
    $detaildata = $this->fetchAll();

    return $detaildata;

}
}
/*"SELECT * FROM users WHERE is_deleted=0 and (firstname LIKE '%$valueToSearch%' OR lastname LIKE '%$valueToSearch%' OR email LIKE '%$valueToSearch%' OR mobile LIKE '%$valueToSearch%'*/
// public function getSerachdata(){

//         $valueToSearch = $_POST['view_users'];
//         if($this->Query("SELECT * FROM product WHERE is_deleted = 1 and (name LIKE '%$valueToSearch%' OR  price LIKE '%$valueToSearch%'")){
//             $Serachdata = $this->fetchAll();
//             // var_dump($Serachdata);exit;

//   return $Serachdata;

public function searchProduct($searchdata){
   if($this->Query("SELECT * FROM product WHERE name LIKE '%$searchdata%' " )){
       $searchdata = $this->fetchAll();
       return $searchdata;
   }
}



}



















    // public function storeImage($id){

    //         if($=NULL){
    //             if($this->Query("INSERT INTO user_address ('user_id') VALUES ($id)")){     
    //             }
    //         }

    //     return true;
    // }
//ALTER TABLE "appointments" DROP FOREIGN KEY "appointments_user_id_foreign";

//ALTER TABLE "appointments" ADD CONSTRAINT "appointments_user_id_foreign" FOREIGN KEY ("user_id") REFERENCES "users" ("id")
