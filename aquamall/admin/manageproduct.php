<?php
include ('../includes/connection.php');
if(isset($_POST['submit'])){
    $productname        =$_POST['product_name'];
    $productprice       =$_POST['product_price'];
    $productdescription =$_POST['product_desc'];
    $cat_id         =$_POST['cat_id'];
    $productImage = $_FILES['product_images']['name'];
    $tmp_name = $_FILES['product_images']['tmp_name'];
    $path = "upload/";    
    move_uploaded_file($tmp_name, $path.$productImage);
    $query="insert into product (product_name,product_price,product_desc,cat_id,product_images) values ('$productname','$productprice','$productdescription','$cat_id','$productImage')";
    mysqli_query($conn,$query);
    

    /*print_r($query);
    die;*/
    header("location:manageproduct.php");
    
}
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
                                            <h3 class="text-center title-2">Create Product</h3>
                                        </div>
                                        <hr>
                                        <form action="" method="post" novalidate="novalidate" enctype="multipart/form-data">
                                                <div class="form-group">
                                                <label for="cc-payment" class="control-label mb-1">product name</label>
                                                <input id="cc-pament" name="product_name" type="text" class="form-control" aria-required="true" aria-invalid="false" >
                                            </div>
                                          
                                            <div class="form-group">
                                                <label for="cc-payment" class="control-label mb-1">product price </label>
                                                <input id="cc-pament" name="product_price" type="number" class="form-control" aria-required="true" aria-invalid="false" >
                                            </div>
                                            <div class="form-group">
                                                <label for="cc-payment" class="control-label mb-1">product description</label>
                                                <input id="cc-pament" name="product_desc" type="text" class="form-control" aria-required="true" aria-invalid="false" >
                                            </div>
                                            <div class="col-12 col-md-9">
                                                
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
                                                <label for="cc-payment" class="control-label mb-1">product Image</label>
                                                <input id="cc-pament" name="product_images" type="file" class="form-control" aria-required="true" aria-invalid="false" >
                                            </div>
                                            <div>
                                                <button id="payment-button" type="submit" name="submit" class="btn btn-lg btn-info btn-block">SAVE
                                                   
                                                    
                                                    
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
<div class="container-fluid">
                    <div class="row m-t-30">
                            <div class="col-md-12">
                                <!-- DATA TABLE-->
                                <div class="table-responsive m-b-40">
                                    <table class="table table-borderless table-data3">
                                        <thead>
                                            <tr>
                                                <th>category name</th>
                                                <th>product name</th>
                                                <th>product price</th>
                                                <th>product description</th>
                                                <th>category #</th>
                                                <th>images</th>
                                                <th>edit</th>
                                                <th>delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php
                                            $query = "SELECT * FROM product INNER JOIN category ON category.cat_id = product.cat_id";
                                            $result = mysqli_query($conn,$query);
                                            while ($row = mysqli_fetch_assoc($result))
                                            {
                                                echo "<tr>";
                                                echo "<td>{$row['cat_name']}</td>";
                                                
                                               echo "<td>{$row['product_name']}</td>";
                                                echo "<td>{$row['product_price']}</td>";
                                                echo "<td>{$row['product_desc']}</td>";
                                                
                                                 echo "<td>{$row['cat_id']}</td>";
                                                 echo "<td><img src='upload/{$row['product_images']}'/></td>";
                                                
                                                echo "<td><a href ='editproduct.php?product_id={$row['product_id']}' class ='btn btn-warning'>EDIT</a></td>";

                                                echo "<td><a href ='deleteproduct.php?product_id={$row['product_id']}' class ='btn btn-danger'>DELETE</a></td>";
                                                echo "<tr>";
                                            }
                                            
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- END DATA TABLE-->
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