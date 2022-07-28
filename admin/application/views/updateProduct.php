<!DOCTYPE html>
<html lang="en">

<head>
  <?php include "components/header.php"; ?>
</head>
<style>
  div .error{
    color: red;
  }
</style>
<body>
  <?php include "components/menu.php"; ?>
  <div class="content-wrapper" style="min-height: 1302.12px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">

          </div>
        </div>
      </div><!-- /.container-fluid -->


      <!-- left column -->
      <!-- <div class="col-md-12"> -->
        <!-- general form elements -->
        <!-- <div class="card-header"> -->
          <h3 class="text-left">Update Product</h3>


          <!-- /.card-header -->
          <!-- form start -->
          <form name="form1" method="post" id="form" action="<?php route('ProductController/updateProduct')?>"><br>
           <div class="card-body">
             <div class="row">
              <!--   <div class="row"> -->
               <div class="col-12">
                <label for="Name">Name</label>
                <input type="text" class="form-control"  name="name" id="name" placeholder="Enter Product Name" value="<?php echo $data['data']->name; ?>" ><br>  
                <span class="error"><?php if(!empty($data['nameError'])): echo $data['nameError']; endif; ?></span>  
              </div>
              <div class="col-6">
                <label for="Price">Price</label>
                <input type="number" class="form-control"  name="price" id="price" placeholder="Enter Product Price" value="<?php echo $data['data']->price ?>" ><br>
                <span class="error"><?php if(!empty($data['priceError'])): echo $data['priceError']; endif; ?></span>  
              </div>               
              <div class="col-6">
                <label for="RRP">RRP</label>
                <input type="text" class="form-control"  name="rrp" id="rrp" placeholder="Enter RRP" value="<?php echo $data['data']->rrp; ?>"><br>
                 <span class="error"><?php if(!empty($data['rrpError'])): echo $data['rrpError']; endif; ?></span>  
              </div>
               
              <div class="col-6">
                <label for="SKU">SKU Code</label>
                <input type="text" class="form-control"  name="sku" id="sku" placeholder="Enter Code" value="<?php echo $data['data']->sku; ?>"><br>  
              <span class="error"><?php if(!empty($data['skuError'])): echo $data['skuError']; endif; ?></span>
              </div>
              <div class="col-6">
                <label for="Quantity">Quantity</label>
                <input type="number" class="form-control form-control" id="qty"  name="qty" placeholder="Quantity" value="<?php echo $data['data']->quantity; ?>"><br>
                <span class="error"><?php if(!empty($data['qtyError'])): echo $data['qtyError']; endif; ?></span>
              </div>
              <div class="col-6">
                <label for="image">Image</label>
                <input type="file" class="form-control"  name="image" id="image"><br>  
               <span class="error"><?php if(!empty($data['imageError'])): echo $data['imageError']; endif; ?></span>
              </div>
            
              <!--  <div class="col-3">
                <label for="varient">Size</label>
                <select class="form-control" name="color" >
                  <option>Select Size</option>
                   <option>Short</option>
                    <option>Medium</option>
                     <option>Large</option>
                   </select>
                 </div>
                 <div class="col-3">
                <label for="varient">Color</label>
                <select class="form-control" >
                  <option> Select Color</option>
                   <option>Black</option>
                    <option>White</option>
                     <option>Red</option>
                   </select>
                 </div>
 -->
              <div class="col-md-12 mt-3">
               <label for="color">Description</label><br>
               <textarea id="summernote" name="desc" value="<?php echo $data['data']->description; ?>" >
              </textarea>
              <span class="error"><?php if(!empty($data['descError'])): echo $data['descError']; endif; ?></span>
            </div> 
             <input type="hidden" name="hiddenId" value="<?php echo $data['data']->id; ?>">
            
            <!-- /.col-->
            <!-- ./row -->
            <div class="card-footer">
              <button type="submit" name="submit" id="submit"  class="btn btn-success" >Update</button>
            </div>
          </div>
        </form>
      </div>
    </div>
    <!-- </div> -->
  </section>

<?php include "components/footer.php"; ?>
</div>
<script>


  $(function () {
    // Summernote
    $('#summernote').summernote()
  })

  $('#colorpicker').on('input', function() {
    $('#hexcolor').val(this.value);
  });
  $('#hexcolor').on('input', function() {
    $('#colorpicker').val(this.value);
  });
</script>
</body>
</html>