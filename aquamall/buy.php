<?php
include('admin/includes/public_header.php');
?>
<div class="breadcumb_area bg-img" style ="background-image: url(img/bg-img/breadcumb.jpg); height: 30pc;">
  <div class="container h-100"> 
    <div class="row h-100 align-items-center">
      <div class="col-12">
        <div class='page-title text-center'>
          <?php
          if (isset($_POST['order'])){
            $date = date('Y.m.d');
            $order_query= "INSERT INTO orders(order_date,customer_id) VALUES ('$date' ,{$_SESSION['customer_id']})";
            if (mysqli_query($conn,$order_query))
            {
              $last_id = mysqli_insert_id($conn);
              echo "<span> your order ID is : ".$last_id."</span>";
            }
          }
          ?>
        </div>
      </div>
    </div></div>
  </div>
<!-- //include('admin/includes/public_header.php');
                    // echo "Thank you For Shopping";
                  	// if(isset($_SESSION['order_id'])) {

                   //  //foreach ($_SESSION['order_id'] as  $ord_id) {
                   //      $query = "select * from  order";
                   //      $result = mysqli_query($conn,$query);
                   //      while($row = mysqli_fetch_assoc($result)){
                   //      	echo "Your Order ID is";
                   //      	 //echo "<p>$ {$row['order_id']}</p>";

                   //          echo "{$row['order_id']}";
                   //      }} -->
<!-- //if(isset($_GET['order_id'])){

$queryq="insert into orders (customer_id) values ('$customer_id')";
 mysqli_query($conn,$queryq);
	$query = "SELECT * FROM orders INNER JOIN customers ON orders.customer_id = customers.customer_id";
	
	$result = mysqli_query($conn,$query);
    while ($row = mysqli_fetch_assoc($result))
    {
    	echo "{$row['customer_id']}";
    }
// 	$customer_id=$_GET['customer_id'];
	

// $query="insert into orders (customer_id) values ('$customer_id')";

//     mysqli_query($conn,$query);
//     $query2 = "select order_id from  orders where order_id = {$_GET['order_id']}";

//     echo "{$row['order_id']}";
// echo "Thank you For Shopping Your Order ID is ";
// }




// $query = "select * from  orders where order_id = {$_GET['order_id']}";
// $result = mysqli_query($conn,$query);
// $row = mysqli_fetch_assoc($result);
// echo "{$row['order_id']}";
// echo "Thank you For Shopping Your Order ID is ";
 //if(isset($_SESSION['customer_id'])) {
 	// $query = "select * from  orders ";
                   // foreach ($_SESSION['order_id'] as  $ord_id) {
                        // $query = "select * from  orders where order_id = $ord_id";
                        // $result = mysqli_query($conn,$query);
                        // while($row = mysqli_fetch_assoc($result)){
                            
                            
                        //     echo "{$row['order_id']}";
                        //      }}

 -->