<?php
class CartController extends Controller {

	public function __construct(){

		$this->helper("link");
		$this->cartModal = $this->model('cartModal');
		

	}
	public function cart(){
		

		$name = $_POST['name'];
		$price = $_POST['price'];
		$quantity = $_POST['qty'];
		// $description = $_POST['description'];
		// $price = $_POST['price'];
		 $Productdata = array($name,$price,$quantity);
		 // print_r($Productdata);
		$_SESSION['$name'] = $Productdata;
		$this->view("cart");
		
	

}
    public function cartDelete(){
 

    if(isset($_POST['event'])){
        $name = $_POST['pro0'];
        $price = $_POST['pro1'];
        $quantity = $_POST['pro2'];
        $btn = $_POST['event'];

        $product = array($name,$price,$quantity);
        if($btn == "Update"){
            $_SESSION[$name] = $product;
             $this->redirect("../eCommerceShop/CartController/cart");
            // header('location:viewCart.php?value=updated');
        }else if($btn == "Delete"){
            unset($_SESSION[$name]);
            // echo "sandip";
             $this->redirect("../eCommerceShop/CartController/cart"); 
        }
        
    }

    }
}