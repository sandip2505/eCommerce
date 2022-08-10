
<?php

class accountController extends framework {


    public function __construct(){

        if($this->getSession('userId')){
            // $this->redirect("admin");
        }
        $this->helper("link");
        $this->accountModel = $this->model('accountModel');
        
    }

    public function index(){
       $Categorydata = $this->accountModel->getdata();
       $Productdata  = $this->accountModel->getProductData();
       $CategorychilDdata  = $this->accountModel->getchildData();
       // var_dump($Categorydata);exit;
       $data['Categorydata'] = $Categorydata;
       $data['Productdata'] = $Productdata;
       $data['CategorychilDdata'] = $CategorychilDdata;
       $this->view("index",$data);
   }
   public function shop(){
       $Categorydata = $this->accountModel->getdata();
       $Productdata  = $this->accountModel->getProductData();
       $data['Categorydata'] = $Categorydata;
       $data['Productdata'] = $Productdata;
       $this->view("shop",$data);
   }


   public function checkout(){
     $Categorydata = $this->accountModel->getdata();
     $data['Categorydata'] = $Categorydata;
     $this->view("checkout",$data);
 }
 public function cart(){
     $Categorydata = $this->accountModel->getdata();
     $data['Categorydata'] = $Categorydata;
     $this->view("cart",$data);
 }
 public function detail(){
    $Categorydata = $this->accountModel->getdata();
    $data['Categorydata'] = $Categorydata;
    $this->view("detail",$data);
}

public function header(){
    $Categorydata = $this->accountModel->getdata();
    $data['Categorydata'] = $Categorydata;
    $this->view("header",$data);
}
public function contact(){
 $Categorydata = $this->accountModel->getdata();
 $data['Categorydata'] = $Categorydata;
 $this->view("contact",$data);
}





public function createAccount(){

    $userData = [

     'uname'            => $this->input('uname'),
     'fname'            => $this->input('fname'),
     'lname'            => $this->input('lname'),
     'email'            => $this->input('email'),
     'password'         => $this->input('password'),
     'is_deleted'       =>$this->input('is_deleted'),
     'unameError'       => '',
     'fnameError'       => '',
     'lnameError'       => '' ,
     'emailError'       => '', 
     'passwordError'    => '' 

 ];

 if(empty($userData['uname'])){

    $userData['unameError'] = 'User Name is required';

}
if(empty($userData['fname'])){

    $userData['fnameError'] = 'first Name is required';

}
if(empty($userData['lname'])){

    $userData['lnameError'] = 'Last Name is required';

}


if(empty($userData['email'])){
    $userData['emailError'] = 'Email is required';
} else {
    if(!$this->accountModel->checkEmail($userData['email'])){

     $userData['emailError'] = "Sorry this email is already exist";

 }
}

if(empty($userData['password'])){
    $userData['passwordError'] = "Password is required";
} else if(strlen($userData['password']) < 5 ){
    $userData['passwordError'] = "Passowrd must be 5 characters long";
}

if(empty($userData['unameError']) && empty($userData['fnameError']) && empty($userData['lnameError']) && empty($userData['emailError']) && empty($userData['passwordError'])){

    $password = password_hash($userData['password'], PASSWORD_DEFAULT);
    $data = [$userData['uname'], $userData['fname'], $userData['lname'], $userData['email'], $password, $userData['is_deleted']];
    if($this->accountModel->createAccount($data)){

        $this->setFlash("accountCreated", "Your account has been created successfully");
        $this->redirect("../eCommerceShop");

    }

} else {
    $this->view('index', $userData);
}

}

public function loginForm(){
    $this->view("index");
}

public function userLogin(){


    $userData = [

     'email'         => $this->input('email'),
     'password'      => $this->input('password'),
     'emailError'    => '',
     'passwordError' => ''

 ];
 $error=false;
 if(empty($userData['email'])){
    $userData['emailError'] = "Email is required";
    $error=true;
}
if(empty($userData['password'])){
    $userData['passwordError'] = "Password is required";
    $error=true;
}
if($error==true){
 $this->view("components/header", $userData);
 return false;
}


$result = $this->accountModel->userLogin($userData['email'], $userData['password']);
            //echo "<pre>";print_r($result);exit;
if($result['status'] === 'emailNotFound'){
    $userData['emailError'] = "Sorry invalid email";
    $this->view("index", $userData);
}
else if($result['status'] === 'passwordNotMacthed'){
    $userData['passwordError'] = "Sorry invalid password";
    $this->view("index", $userData);
} 
else if($result['status'] === "ok"){
    $this->setSession("userId", $result['user_id']);
    $this->setSession("role", $result['role_id']);
    $this->setSession("userName", $result['user_name']);            

    if($this->getSession('role') == 1){
        $this->redirect("../eCommerceAdmin");
                    // echo "admin";
    }else{
        $this->redirect("../eCommerceShop");
    }

}



}

public function contactform(){
 $Categorydata = $this->accountModel->getdata();
 $data['Categorydata'] = $Categorydata;

 $userData = [

     'name'            => $this->input('name'),
     'email'           => $this->input('email'),
     'subject'         => $this->input('subject'),
     'msg'             => $this->input('msg'),
     'nameError'       => '',
     'emailError'      => '', 
     'subjectError'    => '', 
     'msgError'        => '', 

 ];

 if(empty($userData['name'])){

    $userData['nameError'] = '';

}
if(empty($userData['email'])){
    $userData['emailError'] = '';
}
if(empty($userData['subject'])){
    $userData['subjectError'] = '';
}
if(empty($userData['msg'])){

    $userData['msgError'] = '';
}


if(empty($userData['nameError']) && empty($userData['emailError']) && empty($userData['subjectError']) && empty($userData['msgError'])){

    $data = [$userData['name'], $userData['email'], $userData['subject'], $userData['msg']];
    if($this->accountModel->contactform($data)){

        $this->setFlash("contactform", "Your account has been created successfully");
        $this->redirect("");

    }

} else {
    $this->view('contact', $userData);
}

}
public function newsletter(){

    $userData = [

     'name'            => $this->input('name'),
     'email'           => $this->input('email'),

 ];


 if(empty($userData['nameError']) && empty($userData['emailError'])){

    $data = [$userData['name'], $userData['email']];
    if($this->accountModel->newsletter($data)){

        $this->setFlash("newsletter", "Your account has been created successfully");
        $this->redirect("../eCommerceShop");

    }

} else {
    $this->view('newsletter', $userData);
}

}


public function logout(){

    $this->destroy();
    $this->redirect("../eCommerceShop");

}
}
?>