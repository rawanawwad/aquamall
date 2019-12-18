
<?php
include ('../includes/connection.php');

if(isset($_POST['submit'])){
    $productname        =$_POST['product_name'];
    $productprice       =$_POST['product_price'];
    // $productdescription =$_POST['product_desc'];
    
    // $productImage = $_FILES['product_images']['name'];
    // $tmp_name = $_FILES['product_images']['tmp_name'];
    // $path = "upload/";    

    // move_uploaded_file($tmp_name, $path.$productImage);


    
$query="insert into product (product_name,product_price) values ('$productname','$productprice')";



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
                            
<div class="container-fluid">
                    <div class="row m-t-30">
                            <div class="col-md-12">
                                <!-- DATA TABLE-->
                                <div class="table-responsive m-b-40">
                                    <table class="table table-borderless table-data3">
                                        <thead>
                                            <tr>
                                                
                                                <th>product name</th>
                                                <th>product price</th>
                                                <th>product description</th>
                                                
                                                <th>images</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php
                                            $query = "SELECT * FROM product WHERE cat_id={$_GET['cat_id']}";
                                            $result = mysqli_query($conn,$query);
                                            while ($row = mysqli_fetch_assoc($result))
                                            {
                                                echo "<tr>";
                                                
                                                
                                               echo "<td>{$row['product_name']}</td>";
                                                echo "<td>{$row['product_price']}</td>";
                                                // echo "<td>{$row['product_desc']}</td>";
                                                
                                                 
                                                //  echo "<td><img src='upload/{$row['product_images']}'/></td>";
                                                
                                                
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