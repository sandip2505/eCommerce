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
      'user_id'   =>$this->input('user_id')
     // 'Country' =>$this->input('Country'),
      


   ];
   
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