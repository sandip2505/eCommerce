<?php
 class productModel extends database {

public function createAccount($data){
       
        if($this->Query("INSERT INTO addproduct  (name,price,quantity,sku,rrp,image,description) VALUES (?,?,?,?,?,?,?)", $data)){
            return true;
        }
}
 public function getData(){

        if($this->Query("SELECT * FROM addproduct")){

            $data = $this->fetchAll();
            return $data;

        }

    }
     public function editProduct($id){

        if($this->Query("SELECT * FROM addproduct WHERE id = ?  ", [$id])){

            $row = $this->fetch();
            return $row;

        }

    }
     public function updateProduct($productData){


        if($this->Query("UPDATE addproduct SET name = ? , price = ? , quantity = ?, sku = ?, rrp = ?, image = ? , description = ? WHERE id = ? ", $productData)){

            return true;

        }

    }

}

/*
 public function updateFruit($updateData){

        if($this->Query("UPDATE fruit SET name = ? , price = ? , quality = ? WHERE id = ? AND userId = ? ", $updateData)){

            return true;

        }

    }*/
?>