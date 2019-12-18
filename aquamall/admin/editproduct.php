<?php
include ('../includes/connection.php');

if(isset($_POST['submit'])){
	
    $productname =$_POST['product_name'];
	$productprice =$_POST['product_price'];
    $productdescription =$_POST['product_desc'];
    $cat_id         =$_POST['cat_id'];
   // $categoryName=$_POST['cat_name'];
    $productImage = $_FILES['product_images']['name'];
    $tmp_name = $_FILES['product_images']['tmp_name'];
    $path = "upload/";    

    move_uploaded_file($tmp_name, $path.$productImage);

    if($_FILES['product_images']['error']==0)
    {
	
$query="UPDATE product SET product_name='$productname',product_price='$productprice',product_desc='$productdescription' ,cat_id = '$cat_id', product_images ='$productImage' WHERE product_id={$_GET['product_id']}";
}
else{
    $query="UPDATE product SET product_name='$productname',product_price='$productprice',product_desc='$productdescription' ,cat_id = '$cat_id' WHERE product_id={$_GET['product_id']}";
}

    
    mysqli_query($conn,$query);
    header("location:manageproduct.php");
}
$query = "select * from product where product_id = {$_GET['product_id']}";
$result = mysqli_query($conn,$query);
$row = mysqli_fetch_assoc($result);
//  echo $query;
// die;

include ('../includes/admin-header.php');
?>
    <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">Credit Card</div>
                                    <div class="card-body">
                                        <div class="card-title">
                                            <h3 class="text-center title-2">Update product</h3>
                                        </div>
                                        <hr>
                                        <form action="" method="post" novalidate="novalidate" enctype="multipart/form-data">
                                            
                                            <div class="form-group">
                                                <label for="cc-payment" class="control-label mb-1">product name</label>
                                                <input id="cc-pament" name="product_name" type="text" class="form-control" aria-required="true" aria-invalid="false" value ="<?php echo $row['product_name'] ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="cc-payment" class="control-label mb-1">product price</label>
                                                <input id="cc-pament" name="product_price" type="number" class="form-control" aria-required="true" aria-invalid="false" value ="<?php echo $row['product_price'] ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="cc-payment" class="control-label mb-1">product description</label>
                                                <input id="cc-pament" name="product_desc" type="text" class="form-control" aria-required="true" aria-invalid="false" value ="<?php echo $row['product_desc'] ?>">
                                            </div>
                                            <div class="form-group">
                                                
                                                <label for="cc-payment" class="control-label mb-1">choose category</label>
                                                    <select id="select" class="form-control" name="cat_id" required>
                                                    <?php
                                                    $query = "select * from category";
                                                    $result = mysqli_query($conn,$query);
                                                    while ($row = mysqli_fetch_assoc($result)){
                                                        echo "<option value = '{$row['cat_id']}'> {$row ['cat_name']} </option>";
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="cc-payment" class="control-label mb-1">Category Image</label>
                                                <input id="cc-pament" name="product_images" type="file" class="form-control" aria-required="true" aria-invalid="false" value ="<?php echo $row['product_images'] ?>">
                                            </div>
                                         
                                            <div>
                                                <button id="payment-button" type="submit" name="submit" class="btn btn-lg btn-info btn-block">UPDATE
                                                   
                                                    
                                                    
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
<div class="container-fluid">
                    <div class="row m-t-30">
                            <div class="col-md-12">
                                
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
</div>
    </div>


 <?php
include ('../includes/admin-footer.php');
?>