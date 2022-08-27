<?php
class orderController extends Controller{

   public function __construct(){
     $this->accountModel = $this->model("accountModel");
     $this->helper("link");

  }
  public function checkout(){
    $this->view("checkout");
 }
//   public function index(){
//    $orderdata = $this->accountModel->getOrder();
//    $this->view("checkout", $orderdata);      
// }
public function create(){
  $orderdata = $this->accountModel->createOrder();
   $this->view("checkout", $orderdata);      
}
public function createOrder(){
   
   $orderdata = [
      'firtsname' =>$this->input('firtsname'),
      'lastname' => $this->input('lastname'),
      'email'    =>$this->input('email'),
      'mobile'   =>$this->input('mobile'),
      'address_1' =>$this->input('address_1'),
      'address_2' =>$this->input('address_2'),
      'state'    =>$this->input('state'),
      'city'     =>$this->input('city'),
      'post_code' =>$this->input('post_code'),
      'Country'   =>$this->input('Country'),
      'user_id'   =>$this->input('user_id'),
     // 'Country' =>$this->input('Country'),
     'firtsnameError'=>'',
     'lastnameError'=>'',
     'emailError'=>'',
     'mobileError'=>'',
     'address_1Error'=>'',
     'address_2Error'=>'',
     'stateError'=>'',
     'cityError'=>'',
     'post_codeError'=>'',
     'CountryError'=>''

   ];
   //var_dump($orderdata);exit;  
   $error=false;
   if(empty($orderdata['firtsname'])){
     $orderdata['firtsnameError'] = ' firtsname is required';
     $error=true;
  }
  
  if (empty($orderdata['lastname'])) {

      $orderdata['lastnameError'] = 'lastname is required';
      $error=true;
  }
  if (empty($orderdata['email'])) {

      $orderdata['emailError'] = 'email is required';
   }else {
      if(!$this->accountModel->checkEmail($orderdata['email'])){
         
         $orderdata['emailError'] = "Sorry this email is already exist";
         $error=true;

}
}
  if (empty($orderdata['mobile'])) {

      $orderdata['mobileError'] = 'mobile is required';
      $error=true;
  }
  if (empty($orderdata['address_1'])) {

      $orderdata['address_1Error'] = 'address_1 is required';
      $error=true;
  }
  if (empty($orderdata['address_2'])) {

      $orderdata['address_2Error'] = 'address_2 is required';
      $error=true;
  } 
  if (empty($orderdata['state'])) {

      $orderdata['stateError'] = 'Please Enter state';
      $error=true;
  }
  if (empty($orderdata['city'])) {

      $orderdata['cityError'] = 'Please Enter  city';
      $error=true;
  }
  if (empty($orderdata['post_code'])) {

      $orderdata['post_codeError'] = 'Please Enter  post_code';
      $error=true;
  }
  if (empty($orderdata['Country'])) {

      $orderdata['CountryError'] = 'Please Enter Country';
      $error=true;
  }
if($error==true){
   $this->view('checkout', $orderdata);
   return false;
   
}
   $orderdata = [$orderdata['firtsname'],$orderdata['lastname'],$orderdata['email'],$orderdata['mobile'],$orderdata['address_1'],$orderdata['address_2'],$orderdata['state'],$orderdata['city'],$orderdata['post_code'],$orderdata['Country'],$orderdata['user_id']];
   // print_r($orderdata);exit;
   if($this->accountModel->createOrder($orderdata)){
      $this->redirect("orderController/checkout");
     // echo "samdip";
   //   TempData["Success"] = "Added Successfully!";
   //   return RedirectToAction("actionname", "orderController");
   }
}

}