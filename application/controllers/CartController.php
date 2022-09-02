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
		$id = $_POST['product_id'];
		$Productdata = array($name,$price,$quantity,$id);
		 // var_dump($Productdata);exit;
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
		$coupondataValue  = $this->input('valueToCoupon');
		if(isset($coupondataValue));
		$data  = $this->cartModal->getcoupon($coupondataValue);
		// $data= $this->cartModal->getcoupon();
		foreach ($data as $item) { 
			$cart_min_value =	$item->cart_min_value;

		}
	

		$t = 0;
		$s = 0;
		$gt = [];
		if(count($_SESSION['cart_item'])){

			foreach ($_SESSION['cart_item']  as $item) {

				foreach($item as $key => $value){
					if($key == 1){
						$p = $value;
					}else if($key == 2){
						$q = $value;
					}
				}
				$t = $p * $q ;
				$gt[] = $t;
			}
			$Gt =  array_sum($gt);
		}

		date_default_timezone_set("Asia/Kolkata"); 
		$CouponData = [

			'coupon_code'        => $this->input('valueToCoupon'),
			'date'     => date('Y-m-d')
		];
		$Coupondata=[$CouponData['coupon_code']];
		$Coupondate=date('Y-m-d');
		$error=false;

		if (empty($CouponData["coupon_code"])) {

			$CouponData['couponError']= "<b>**Coupon is required</b>";
			$error=true;
		}
		else {
			if(!$this->cartModal->checkCoupon($Coupondata)){
				$CouponData['couponError'] = "<b>**The Coupon was invalid</b>";
				$error=true;

			}else {
				if(!$this->cartModal->checkCouponDate($Coupondata,$Coupondate)){
					$CouponData['couponError'] = "<b>**The coupon is Expired</b> ";
					$error=true;

				}
				else {
					if(!$this->cartModal->checkCouponValue($Coupondata,$Gt)){
						$CouponData['couponError'] = "<b>**The Minumum Value For This Coupon is '".$cart_min_value."'</b> ";
						$error=true;

					}
				}

			}
		}

		if($error==true){
			$this->view('cart', $CouponData);
			return false;
		}
		$coupondataValue = $this->input('valueToCoupon');
		$CouponData  = $this->cartModal->AddCoupon($coupondataValue);
		$CouponData['CouponData'] = $CouponData;
		$this->view("cart",$CouponData);;
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
?>
