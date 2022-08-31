<?php
class CartController extends Controller {

	public function __construct(){

		$this->helper("link");
		$this->cartModal = $this->model('cartModal');
		

	}
	public function cartview(){
		$this->view("cart");
	}
	public function cartAdd(){
		$name = $_POST['name'];
		$price = ($_POST['price']) ? (int) $_POST['price'] : 0;
		$quantity = ($_POST['qty']) ? (int) $_POST['qty'] : 1;
		$Productdata = array($name,$price,$quantity);
		$_SESSION['cart_item'][$name] = $Productdata;
		$this->view("cart");
	}
	public function detail(){
		$name = $_POST['name'];
		$price = (int)$_POST['price'];
		$quantity = (int)$_POST['qty'];	
		$Productdata = array($name,$price,$quantity);
		$_SESSION['cart_item'][$name] = $Productdata;
		$this->view("detail");
	}
	public function cartUpdate(){
		if(isset($_POST['event'])){
			$name = $_POST['pro0'];
			$price = (int)$_POST['pro1'];
			$quantity = (int) $_POST['pro2'];
			$btn = $_POST['event'];
			$product = array($name,$price,$quantity);
			if($btn == "Update"){
				$_SESSION['cart_item'][$name] = $product;
				$this->view("cart");
			}else if($btn == "Delete"){
				unset($_SESSION['cart_item'][$name]);
				$this->view("cart");
			}

		}

	}
	public function couponApply(){
		$coupondataValue = $this->input('valueToCoupon');
		$CouponData  = $this->cartModal->AddCoupon($coupondataValue);
		$data['CouponData'] = $CouponData;
		 // var_dump($data);exit;
		$this->view("cart",$data);

	}
	public function CreateReview(){

		    $userData = [

       'rate'                  => $this->input('rate'),
       'product_id'            => $this->input('product_id'),
       'review'                => $this->input('review'),
       'name'                  => $this->input('name'),
       'email'                 => $this->input('email'),

   ];
   // var_dump($userData);exit;


   if(empty($userData['rateError']) && empty($userData['product_idError']) && empty($userData['reviewError']) && empty($userData['nameError']) && empty($userData['emailError'])){

    $data = [$userData['rate'], $userData['product_id'], $userData['review'], $userData['name'], $userData['email']];

   // var_dump($data);exit;

    if($this->cartModal->CreateReview($data)){
        $this->setFlash("CreateReview", "Your account has been created successfully");
        $this->redirect("../eCommerceShop/accountController/shop");

    }

} else {
    $this->view('CreateReview', $userData);
}

}


}