<?php
include ('../includes/connection.php');

if(isset($_POST['submit'])){
	$categoryName   =$_POST['categoryname'];
    $CategoryImage = $_FILES['categoryimage']['name'];
    $tmp_name = $_FILES['categoryimage']['tmp_name'];
    $path = "upload/";    

    move_uploaded_file($tmp_name, $path.$CategoryImage);


    
$query="insert into category (cat_name,cat_img) values ('$categoryName','$CategoryImage')";
    
    mysqli_query($conn,$query);
    header("location:manageCategory.php");

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
                                            <h3 class="text-center title-2">Create Category</h3>
                                        </div>
                                        <hr>
                                        <form action="" method="post" novalidate="novalidate" enctype="multipart/form-data">
                                            <div class="form-group">
                                                <label for="cc-payment" class="control-label mb-1">Category Name</label>
                                                <input id="cc-pament" name="categoryname" type="text" class="form-control" aria-required="true" aria-invalid="false" >
                                            </div>
                                             <div class="form-group">
                                                <label for="cc-payment" class="control-label mb-1">Category Image</label>
                                                <input id="cc-pament" name="categoryimage" type="file" class="form-control" aria-required="true" aria-invalid="false" >
                                            </div>
                                           </div>
                                            <div>
                                                <button id="payment-button" type="submit" name="submit" class="btn btn-lg btn-info btn-block">ADD CATEGORY
                                                   
                                                    
                                                    
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
                                                <th>id</th>
                                                <th>categoryName</th>
                                                <th>CategoryImage</th>

                                                <th>edit</th>
                                                <th>delete</th>
                                                 <th>view product</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        	<?php
                                        	$query = "SELECT * FROM category";
                                        	$result = mysqli_query($conn,$query);
                                        	while ($row = mysqli_fetch_assoc($result))
                                        	{
                                        		echo "<tr>";
                                        		echo "<td>{$row['cat_id']}</td>";
                                        		echo "<td>{$row['cat_name']}</td>";
                                                echo "<td><img src='upload/{$row['cat_img']}'/></td>";
                                        		
                                        		echo "<td><a href ='edit_category.php?cat_id={$row['cat_id']}' class ='btn btn-warning'>EDIT</a></td>";

                                        		echo "<td><a href ='delete_category.php?cat_id={$row['cat_id']}' class ='btn btn-danger'>DELETE</a></td>";
                                                echo "<td><a href ='viewproduct.php?cat_id={$row['cat_id']}' class ='btn btn-primary'>VIEW</a></td>";
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
                


 <?php
include ('../includes/admin-footer.php');
?>