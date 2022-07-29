<?php
class productModel extends database {

    public function createProduct($data,$imagedata){

        if($this->Query("INSERT INTO product  (name,price,quantity,sku,rrp,description,status) VALUES (?,?,?,?,?,?,?)", $data)){

         $this->Query("SELECT id FROM product order by id desc ");
         $row = $this->fetch();
         $product_id = $row->id;


         if($this->Query("INSERT INTO images (product_id,image) VALUES ($product_id,'".$imagedata."')")){

            return true;

        }
    }
}
public function getData(){

    if($this->Query("SELECT * FROM product where status=1 " )){
        $data = $this->fetchAll();
        return $data;

    }
}
public function displaygetData(){

    if($this->Query("SELECT * FROM category where status=1 " )){
        $displaydata = $this->fetchAll();
        return $displaydata;

    }
}


public function editProduct($id){

    if($this->Query("SELECT * FROM product WHERE id = ?  ", [$id])){

        $row = $this->fetch();
        return $row;

    }

}
public function updateProduct($productData){


    if($this->Query("UPDATE product SET name = ? , price = ? , quantity = ?, sku = ?, rrp = ?,  description = ? WHERE id = ? ", $productData)){

        return true;

    }

}
public function deleteProduct($id){

    if($this->Query("UPDATE product set status=0 WHERE id = ? ", [$id])){
        return true;
    }

}
public function searchProduct($searchdata){
   if($this->Query("SELECT * FROM product WHERE name LIKE '%$searchdata%' " )){
       $searchdata = $this->fetchAll();
       return $searchdata;
   }
}


    public function Productcatogery($categorydata){

        if($this->Query("INSERT INTO category (category_name) VALUES (?)", $categorydata)){
            
             return true;
        }

    }
    public function getcategory(){

    if($this->Query("SELECT * FROM category where status=1 " )){
        $categorydata = $this->fetchAll();
        return $categorydata;

    }
}

public function editCategory($id){

    if($this->Query("SELECT * FROM category WHERE id = ?  ", [$id])){

        $row = $this->fetch();
        return $row;

    }

}
public function updateCategory($catogeryData){


    if($this->Query("UPDATE category SET category_name = ?  WHERE id = ? ", $catogeryData)){

        return true;

    }

}
public function deleteCategory($id){

    if($this->Query("UPDATE category set status=0 WHERE id = ? ", [$id])){
        return true;
    }

}


}


?>