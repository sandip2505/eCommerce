<?php

class accountModel extends database {

    public function checkEmail($email){

        if($this->Query("SELECT email FROM users WHERE email = ?", [$email])){

            if($this->rowCount() > 0 ){
                return false;
            } else {
                return true;
            }

        }

    }

    public function createAccount($data){


        if($this->Query("INSERT INTO users (username,firstname,lastname,email,password, is_deleted) VALUES (?,?,?,?,?,?)", $data)){
            echo "done";

            return true;
        }

    }

    public function userLogin($email, $password){

        if($this->Query("SELECT * FROM users WHERE email = ? ", [$email])){

            if($this->rowCount() > 0 ){

                $row = $this->fetch();
                $dbPassword = $row->password;
                $userId = $row->id;
                $userName = $row->username;
                $role=$row->role;
                if(password_verify($password, $dbPassword)){

                    $data = ['status' => 'ok', 'role_id' => $role,'user_id'=>$userId,'user_name' => $userName,];


                } else {
                    $data = ['status' => 'passwordNotMacthed'];
                }

            } else {
                $data = ['status' => 'emailNotFound'];
            }

        }
        return $data;

    }
    public function contactform($data){

        if($this->Query("INSERT INTO contact (name,email,subject,msg) VALUES (?,?,?,?)", $data)){
            echo "done";

            return true;
        }

    }

    public function newsletter($data){

        if($this->Query("INSERT INTO newsletter (name,email) VALUES (?,?)", $data)){
            echo "done";

            return true;
        }

    }

    public function getprofiledata(){
        if($this->Query("SELECT * FROM users where is_deleted=1 " )){
            $Profiledata = $this->fetchAll();
            return $Profiledata;


        }
    }
    public function getdata(){
        $this->Query("SELECT * FROM category where is_deleted = 0 AND parent_id = 0"  );
        $Categorydata = $this->fetchAll();
        return $Categorydata;

        
    }
    public function getchildData($id){
        if($this->Query("SELECT * FROM category where is_deleted=0 AND parent_id = $id " )){
            $CategorychildData = $this->fetchAll();
            return $CategorychildData;


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