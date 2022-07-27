<?php
class ProductController extends framework{

   public function __construct(){
       if(!$this->getSession('userId')): 
               $this->redirect("../../../../eCommerceShop");
                endif;
      $this->helper("link");
      $this->productModel = $this->model("productModel");

   }
   public function create(){
      $data = $this->productModel->getData();

      $this->view("profile", $data);
   }

   public function index(){
      $this->view("addproduct");          
   }
   public function createAccount(){

      $userData = [

         'name'        => $this->input('name'),
         'price'           => $this->input('price'),
         'qty'        => $this->input('qty'),
         'sku'        => $this->input('sku'),
         'rrp'        => $this->input('rrp'),
         'image'        => $this->input('image'),
         'desc'        => $this->input('desc'),

         'nameError'   => '',
         'priceError'      => '',
         'qtyError'   => '', 
         'skuError'   => '', 
         'rrpError'   => '', 
         'imageError'   => '', 
         'colorError'   => '', 
         'descError'   => '', 

      ];

      if(empty($userData['name'])){

         $userData['nameError'] = ' Name is required';

      }

      if(empty($userData['price'])){
         $userData['priceError'] = 'Price is required';

      }
      

      if(empty($userData['qty'])){
         $userData['qtyError'] = "Quantity is required";

      }
      if(empty($userData['sku'])){
         $userData['skuError'] = "SKU is required";

      }
      if(empty($userData['rrp'])){
         $userData['rrpError'] = "RRP is required";

      }
      /*if(empty($userData['image'])){
         $userData['imageError'] = "Image is required";

      }*/
      if(empty($userData['desc'])){
        $userData['descError'] = " Description  is required";
     }
       // if(empty($userData['nameError']) && empty($userData['priceError']) && empty($userData['qtyError']) && empty($userData['skuError']) && empty($userData['rrpError'])){ 

      $banner=$_FILES['image']['name']; 
      $expbanner=explode('.',$banner);
      $bannerexptype=$expbanner[1];
      $bannername=time().'.'.$bannerexptype;
      $bannerpath="assets/upload/".$bannername;
      //echo $bannerpath;exit;
      move_uploaded_file($_FILES["image"]["tmp_name"],$bannerpath);
 

     if(empty($userData['nameError']) && empty($userData['priceError']) && empty($userData['qtyError']) && empty($userData['skuError'])&& empty($userData['rrpError'])&& empty($userData['imageError']) && empty($userData['descError'])){
     } else {
      $this->view('addproduct', $userData);
      return false;
   }

   if($userData['rrp']>$userData['price']){
      $data = [$userData['name'],$userData['price'], $userData['qty'],$userData['sku'],$userData['rrp'],$bannername,$userData['desc'] ];
      if($this->productModel->createAccount($data)){
         $this->redirect("ProductController/create");
         $this->setFlash("registerd", "Your account has been created successfully");

      }
   }else{
      echo"rrp must be grater than price";
   }

}
public function editProduct($id){
      
      $Edit = $this->productModel->editProduct($id);
      $data = [

        'data'    => $Edit,
        'nameError' => '',
        'priceError' => '',
        'qualityError' => ''

      ];
      $this->view("updateProduct",$data);

    }
     public function updateProduct(){

      $id = $this->input('hiddenId');
      $Edit = $this->productModel->editProduct($id);
      $productData = [
         'name'        => $this->input('name'),
         'price'       => $this->input('price'),
         'qty'        => $this->input('qty'),
         'sku'        => $this->input('sku'),
         'rrp'        => $this->input('rrp'),
         'image'        => $this->input('image'),
         'desc'        => $this->input('desc'),
        'data'           => $Edit,
        'hiddenId'       => $this->input('hiddenId'),
         'nameError'   => '',
         'priceError'      => '',
         'qtyError'   => '', 
         'skuError'   => '', 
         'rrpError'   => '', 
         'imageError'   => '', 
         'colorError'   => '', 
         'descError'   => ''
 
     ];
  
      if(empty($productData['name'])){

         $productData['nameError'] = ' Name is required';

      }

      if(empty($productData['price'])){
         $productData['priceError'] = 'Price is required';

      }
      

      if(empty($productData['qty'])){
         $productData['qtyError'] = "Quantity is required";

      }
      if(empty($productData['sku'])){
         $productData['skuError'] = "SKU is required";

      }
      if(empty($productData['rrp'])){
         $productData['rrpError'] = "RRP is required";

      }
      if(empty($productData['image'])){
         $productData['imageError'] = "Image is required";

      }
      if(empty($productData['desc'])){
        $productData['descError'] = " Description  is required";
     }
       // if(empty($userData['nameError']) && empty($userData['priceError']) && empty($userData['qtyError']) && empty($userData['skuError']) && empty($userData['rrpError'])){ 


     if(empty($productData['nameError']) && empty($productData['priceError']) && empty($productData['qtyError']) && empty($productData['skuError'])&& empty($productData['rrpError'])&& empty($productData['imageError']) && empty($productData['descError'])){
     } else {
      $this->view('updateProduct', $productData);
      return false;
   }

   if($productData['rrp']>$productData['price']){
      $productData = [$productData['name'],$productData['price'], $productData['qty'],$productData['sku'],$productData['rrp'],$productData['image'],$productData['desc'],$productData['hiddenId']];
        if($this->productModel->updateProduct($productData)){

          $this->setFlash('fruitUpdated', 'Your fruit record has been updated successfully');
          $this->redirect("ProductController/create");

        }

       } else {
        $this->view("updateproduct", $productData);
       }
}
public function logout(){
 $this->destroy();
 $this->redirect("../../../../eCommerceShop");

    }

}




?>