<?php
class ProductController extends framework{

   public function __construct(){
      $this->helper("link");
      $this->productModel = $this->model("productModel");

   }
   public function create(){
      $data = $this->productModel->getData();
      $this->view("ProductListing", $data);
   }
   public function index(){
      $categorydata = $this->productModel->displaygetData();
      $this->view("CategoeyListing", $categorydata);          
   }
   public function category(){
      $this->view("category");          
   }
   public function CategoeyListing(){
     $categorydata = $this->productModel->getcategory();
      $this->view("CategoeyListing", $categorydata);      
   }

   public function createProduct(){

      $productData = [

         'name'        => $this->input('name'),
         'price'       => $this->input('price'),
         'qty'        => $this->input('qty'),
         'sku'        => $this->input('sku'),
         'rrp'        => $this->input('rrp'),
         'desc'        => $this->input('desc'),
         'status' =>$this->input('status'),

         'nameError'   => '',
         'priceError'      => '',
         'qtyError'   => '', 
         'skuError'   => '', 
         'rrpError'   => '', 
         'colorError'   => '', 
         'descError'   => '', 

      ];
      $error=false;
      if(empty($productData['name'])){

         $productData['nameError'] = ' Name is required';
         $error=true;

      }

      if(empty($productData['price'])){
         $productData['priceError'] = 'Price is required';
         $error=true;

      }
      

      if(empty($productData['qty'])){
         $productData['qtyError'] = "Quantity is required";
         $error=true;

      }
      if(empty($productData['sku'])){
         $productData['skuError'] = "SKU is required";
         $error=true;   

      }
      if(empty($productData['rrp']) || $productData['rrp']<=$productData['price']){
         $productData['rrpError'] = "RRP is required Or RRP must be graterthan or equal to price";
         $error=true;

      }

      $bannername = '';
      $imagesName = array();
      $bannerexptype=array();
      if(isset($_FILES['image']['name'])){
         if(count($_FILES['image']['name']) > 0){
            foreach ($_FILES['image']['name'] as $key => $value) {
               $banner=$_FILES['image']['name'][$key]; 
               $expbanner=explode('.',$banner);
               $image_name=$expbanner[0];
               $bannerexptype=$expbanner[1];
                  $bannername=time().'_'.$image_name.'.'.$bannerexptype;
               $bannerpath="assets/upload/".$bannername;
               $imagesName[] = $bannerpath;
               move_uploaded_file($_FILES["image"]["tmp_name"][$key],$bannerpath);
            }
            // ["assets\/upload\/1658235161.jpg","assets\/upload\/1658235161.jpg","assets\/upload\/1658235161.jpg"]
            $bannername = json_encode($imagesName);
         }
      }

      if($error==true){
         $this->view('Products', $productData);
         return false;
      }

      $data = [$productData['name'],$productData['price'], $productData['qty'],$productData['sku'],$productData['rrp'],$productData['desc'],$productData['status']];
      $imagedata =$bannername;
      if($this->productModel->createProduct($data,$imagedata)){
         $this->redirect("ProductController/create");
         $this->setFlash("registerd", "Your account has been created successfully");

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
   $error=false;
   if(empty($productData['name'])){
    $productData['nameError'] = ' Name is required';
    $error=true;
 }
 if(empty($productData['price'])){
   $productData['priceError'] = 'Price is required';
   $error=true;
}
if(empty($productData['qty'])){
   $productData['qtyError'] = "Quantity is required";
   $error=true;
}
if(empty($productData['sku'])){
   $productData['skuError'] = "SKU is required";
   $error=true;
}
if(empty($productData['rrp']) || $productData['rrp']<=$productData['price']){
   $productData['rrpError'] ="RRP is required Or RRP must be graterthan or equal to price";                                                            
   $error=true;
}

       // if(empty($userData['nameError']) && empty($userData['priceError']) && empty($userData['qtyError']) && empty($userData['skuError']) && empty($userData['rrpError'])){ 


if($error==true){
   $this->view('updateProduct', $productData);
   return false;
}

$productData = [$productData['name'],$productData['price'], $productData['qty'],$productData['sku'],$productData['rrp'],$productData['desc'],$productData['hiddenId']];
if($this->productModel->updateProduct($productData)){
  $this->setFlash('fruitUpdated', 'Your fruit record has been updated successfully');
  $this->redirect("ProductController/create");
}
} 
public function delete($id){

   if($this->productModel->deleteProduct($id)){
    $this->setFlash('deleted', 'product has been deleted successfully');
    $this->redirect('ProductController/create');
 }

}
public function search(){  
   $searchdataValue = $this->input('valueToSearch');
   $searchdata = $this->productModel->searchProduct($searchdataValue);

   $this->view("ProductListing", $searchdata);
}


 public function Productcategory(){
     
      $catogeryData = [

         'catogery'        => $this->input('catogery'),
        
         'catogeryError'   => '',
         

      ];
      $error=false;
      if(empty($catogeryData['catogery'])){

         $catogeryData['catogeryError'] = ' Catogery is required';
         $error=true;

      }
      if($error==true){
         $this->view('category', $catogeryData);
         return false;
      }
      
      $catogeryData = [$catogeryData['catogery']];
      if($this->productModel->Productcatogery($catogeryData)){
         $this->redirect("ProductController/CategoeyListing");
         $this->setFlash("registerd", "Your account has been created successfully");

      }

   }
 
  public function editCategory($id){

      $Edit = $this->productModel->editCategory($id);
      $data = [

       'data'    => $Edit,
    ];
    $this->view("updateCategory",$data);

 }

    public function updateCategory(){
     
  
   $id = $this->input('hiddenId');
   $Edit = $this->productModel->editCategory($id);
   
   // $Edit = $this->productModel->editCategory($id);
   $catogeryData = [

      
      'category'             => $this->input('category'),
      'hiddenId'             => $this->input('hiddenId'),
      'nameError'            => '',
      
   ];
   $error=false;
   if(empty($catogeryData['category'])){
    $catogeryData['categoryError'] = ' Category is required';
    $error=true;
 }
 


if($error==true){
   $this->view('updateCategory', $catogeryData);
   return false;
}

$catogeryData = [$catogeryData['category'],$catogeryData['hiddenId']];

if($this->productModel->updateCategory($catogeryData)){
  $this->setFlash('fruitUpdated', 'Your fruit record has been updated successfully');
  $this->redirect("ProductController/CategoeyListing");
}
}


public function deletecategory($id){

   if($this->productModel->deleteCategory($id)){
    $this->setFlash('deleted', 'product has been deleted successfully');
    $this->redirect('ProductController/CategoeyListing');
 }

}




public function logout(){

 $this->destroy();
 $this->redirect("../eCommerceShop");

}
}


?>