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

        if($this->Query("INSERT INTO users (username,firstname,lastname,email,password,gender) VALUES (?,?,?,?,?,?)", $data)){
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
                $role=$row->role;
                if(password_verify($password, $dbPassword)){

                    //return ['status' => 'ok', 'data' => $userId];
                    $data = ['status' => 'ok', 'role_id' => $role,'user_id'=>$userId];


                } else {
                    $data = ['status' => 'passwordNotMacthed'];
                }

            } else {
                $data = ['status' => 'emailNotFound'];
            }

        }
        return $data;

    }
      public function contact($data){

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

    public function subscribe($data){

        if($this->Query("INSERT INTO subscribe (email) VALUES (?)", $data)){
            echo "done";
            

             return true;
        }

    }

}


?>