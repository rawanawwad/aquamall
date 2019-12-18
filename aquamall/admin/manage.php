<?php
include ('../includes/connection.php');

if(isset($_POST['submit'])){
	$email    =$_POST['adminemail'];
    $Password =$_POST['adminpassword'];
	$fullname =$_POST['adminfullname'];
	
$query="insert into admin (admin_email,admin_password,fullname) values ('$email','$Password','$fullname')";
    
    mysqli_query($conn,$query);
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
                                            <h3 class="text-center title-2">Create Admin</h3>
                                        </div>
                                        <hr>
                                        <form action="" method="post" novalidate="novalidate">
                                            <div class="form-group">
                                                <label for="cc-payment" class="control-label mb-1">Admin Email</label>
                                                <input id="cc-pament" name="adminemail" type="text" class="form-control" aria-required="true" aria-invalid="false" >
                                            </div>
                                            <div class="form-group">
                                                <label for="cc-payment" class="control-label mb-1">Admin Password</label>
                                                <input id="cc-pament" name="adminpassword" type="Password" class="form-control" aria-required="true" aria-invalid="false" >
                                            </div>
                                            <div class="form-group">
                                                <label for="cc-payment" class="control-label mb-1">Admin Full Name</label>
                                                <input id="cc-pament" name="adminfullname" type="text" class="form-control" aria-required="true" aria-invalid="false" >
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
                                                <th>id</th>
                                                <th>email</th>
                                                <th>name</th>
                                                <th>edit</th>
                                                <th>delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        	<?php
                                        	$query = "SELECT * FROM admin";
                                        	$result = mysqli_query($conn,$query);
                                        	while ($row = mysqli_fetch_assoc($result))
                                        	{
                                        		echo "<tr>";
                                        		echo "<td>{$row['admin_id']}</td>";
                                        		echo "<td>{$row['admin_email']}</td>";
                                        		echo "<td>{$row['fullname']}</td>";
                                        		echo "<td><a href ='edit_admin.php?admin_id={$row['admin_id']}' class ='btn btn-warning'>EDIT</a></td>";

                                        		echo "<td><a href ='delete_admin.php?admin_id={$row['admin_id']}' class ='btn btn-danger'>DELETE</a></td>";
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