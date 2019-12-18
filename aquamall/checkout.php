<?php

include('admin/includes/public_header.php');

if(!isset($_SESSION['customer_id'])){
    echo "<script> window.top.location='loginorregister.php';</script>";
    exit;

}
$query3="SELECT * FROM customers WHERE customer_id={$_SESSION['customer_id']}";
$result= mysqli_query($conn,$query3);
$row= mysqli_fetch_assoc($result);
// if (isset($_POST['name'])){

// }

// if (isset($_POST['checkout'])){
//     //header("location:loginorregister.php");
//     if (isset($_SESSION['customer_id'])){
//         header("location:checkout.php");
//     }
//     else{
//         header("location:loginorregister.php");
//     }

// }
?>

    <!-- ##### Breadcumb Area Start ##### -->
    <div class="breadcumb_area bg-img" style="background-image: url(img/bg-img/breadcumb.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="page-title text-center">
                        <h2>Checkout</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Breadcumb Area End ##### -->

    <!-- ##### Checkout Area Start ##### -->
    <div class="checkout_area section-padding-80">
        <div class="container">
            <div class="row">

                <div class="col-12 col-md-6">
                    <div class="checkout_details_area mt-50 clearfix">

                        <div class="cart-page-heading mb-30">
                            <h5>Billing Address</h5>
                        </div>

                        <form action="#" method="post">
                            <div class="row">
                                <?php

                                // if(isset($_POST['placeholder'])){
                                // $name = $_POST['name'];
                                // $email = $_POST['email'];
                                // $mobile = $_POST['mobile'];
                                // $country = $_POST['country'];
                                // $city = $_POST['city'];
                                // $building= $_POST['building'];
                                // $location = $_POST['location'];
                                // $street = $_POST['street'];
                                // $query2 = "insert into customers( name ,email ,mobile,country,city,building,location,street) value ('$name' , '$email' ,'$mobile','$country','$city','$building','$location','$street')";
                                // mysqli_query($conn,$query2);
                            // }
                                ?>
                                <div class="col-12 mb-3">
                                    <label for="first_name"> Name <span>*</span></label>
                                    <input name="name" type="text" class="form-control" id="first_name" value="<?php echo $row['name'] ?>" required>
                                </div>
                                <div class="col-12 mb-3">
                                    <label for="last_name">Email <span>*</span></label>
                                    <input name="email" type="email" class="form-control" id="last_name" value="<?php echo $row['email'] ?>" required>
                                </div>
                                <!-- <div class="col-12 mb-3">
                                    <label for="company">password</label>
                                    <input name="password" type="password" class="form-control" id="company" value="">
                                </div> -->
                                <!-- <div class="col-12 mb-3">
                                    <label for="country">Country <span>*</span></label>
                                    <select class="w-100" id="country">
                                        <option value="usa">United States</option>
                                        <option value="uk">United Kingdom</option>
                                        <option value="ger">Germany</option>
                                        <option value="fra">France</option>
                                        <option value="ind">India</option>
                                        <option value="aus">Australia</option>
                                        <option value="bra">Brazil</option>
                                        <option value="cana">Canada</option>
                                    </select>
                                </div> -->
                                <div class="col-12 mb-3">
                                    <label for="street_address">mobile<span>*</span></label>
                                    <input name="mobile" type="number" class="form-control mb-3" id="street_address" value="<?php echo $row['mobile'] ?>">
                                    
                                </div>
                                <div class="col-12 mb-3">
                                    <label for="postcode">country <span>*</span></label>
                                    <input name="country" type="text" class="form-control" id="postcode" value="<?php echo $row['country'] ?>">
                                </div>
                                <div class="col-12 mb-3">
                                    <label for="city">City <span>*</span></label>
                                    <input name="city" type="text" class="form-control" id="city" value="<?php echo $row['city'] ?>">
                                </div>
                                <div class="col-12 mb-3">
                                    <label for="state">Building <span>*</span></label>
                                    <input name="building" type="text" class="form-control" id="state" value="<?php echo $row['building'] ?>">
                                </div>
                                <div class="col-12 mb-3">
                                    <label for="phone_number">location <span>*</span></label>
                                    <input name="location" type="text" class="form-control" id="phone_number" min="0" value="<?php echo $row['location'] ?>">
                                </div>
                                <div class="col-12 mb-4">
                                    <label for="email_address">street <span>*</span></label>
                                    <input name="street" type="text" class="form-control" id="email_address" value="<?php echo $row['street'] ?>">
                                </div>

                                <div class="col-12">
                                    <div class="custom-control custom-checkbox d-block mb-2">
                                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                                        <label class="custom-control-label" for="customCheck1">Terms and conitions</label>
                                    </div>
                                    <div class="custom-control custom-checkbox d-block mb-2">
                                        <input type="checkbox" class="custom-control-input" id="customCheck2">
                                        <label class="custom-control-label" for="customCheck2">Create an accout</label>
                                    </div>
                                    <div class="custom-control custom-checkbox d-block">
                                        <input type="checkbox" class="custom-control-input" id="customCheck3">
                                        <label class="custom-control-label" for="customCheck3">Subscribe to our newsletter</label>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-5 ml-lg-auto">
                    <div class="order-details-confirmation">

                        <div class="cart-page-heading">
                            <h5>Your Order</h5>
                            <p>The Details</p>
                        </div>

                        <ul class="order-details-form mb-4">
                            <li><span>Product</span> <span>Total
                               
                            </span></li>
                            <li><span>
                                <?php
                                if(isset($_SESSION['product_id'])) {
                    foreach ($_SESSION['product_id'] as  $pro_id) {
                        $query = "select * from  product where product_id = $pro_id";
                        $result = mysqli_query($conn,$query);
                        while($row = mysqli_fetch_assoc($result)){
                            echo "<p class = 'price'>{$row['product_desc']}</p>";
                            //echo "<p>$ {$row['product_price']}</p>";
}}}
                            





                             //    $query = "select * from  product" ;
                             //    //$product_name = $_GET['product_name'];
                             // if (isset($product_name)){

                             // echo $product_name;
                             // }
                                ?>
                            
                        </span>
                             
                                
                             <span>
                                <?php
                                 if(isset($_SESSION['product_id'])) {
                    foreach ($_SESSION['product_id'] as  $pro_id) {
                        $query = "select * from  product where product_id = $pro_id";
                        $result = mysqli_query($conn,$query);
                        while($row = mysqli_fetch_assoc($result)){
                            //echo "{$row['product_name']}";
                            echo "<p class = 'price'>{$row['product_price']}</p>";
}}}
?>
                            
                             </span>
                         </li>
                            <li>
                                <span>Total</span> 
                                <?php
                                if(isset($price)){
                                    echo $price; }
                                else {
                                 echo 0;
                                     }
                                ?>
                                
                            </li>
                            <li><span>Shipping</span> <span>Free</span></li>
                            <!-- <li>
                                <span>Total</span> <span>$59.90</span>
                            </li> -->
                        </ul>

                        <div id="accordion" role="tablist" class="mb-4">
                            
                            <div class="card">
                                <div class="card-header" role="tab" id="headingTwo">
                                    <h6 class="mb-0">
                                        <a class="collapsed" data-toggle="collapse" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"><i class="fa fa-circle-o mr-3"></i>cash on delievery</a>
                                    </h6>
                                </div>
                                
                            </div>
                            
                            
                        </div>
                        <form action="buy.php" method="post">
                        <button name="order" class="btn essence-btn">Place Order</button>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- ##### Checkout Area End ##### -->

    <!-- ##### Footer Area Start ##### -->
    <footer class="footer_area clearfix">
        <div class="container">
            <div class="row">
                <!-- Single Widget Area -->
                <div class="col-12 col-md-6">
                    <div class="single_widget_area d-flex mb-30">
                        <!-- Logo -->
                        <div class="footer-logo mr-50">
                            <a href="#"><img src="img/core-img/logo2.png" alt=""></a>
                        </div>
                        <!-- Footer Menu -->
                        <div class="footer_menu">
                            <ul>
                                <li><a href="shop.html">Shop</a></li>
                                <li><a href="blog.html">Blog</a></li>
                                <li><a href="contact.html">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Single Widget Area -->
                <div class="col-12 col-md-6">
                    <div class="single_widget_area mb-30">
                        <ul class="footer_widget_menu">
                            <li><a href="#">Order Status</a></li>
                            <li><a href="#">Payment Options</a></li>
                            <li><a href="#">Shipping and Delivery</a></li>
                            <li><a href="#">Guides</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Terms of Use</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row align-items-end">
                <!-- Single Widget Area -->
                <div class="col-12 col-md-6">
                    <div class="single_widget_area">
                        <div class="footer_heading mb-30">
                            <h6>Subscribe</h6>
                        </div>
                        <div class="subscribtion_form">
                            <form action="#" method="post">
                                <input type="email" name="mail" class="mail" placeholder="Your email here">
                                <button type="submit" class="submit"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- Single Widget Area -->
                <div class="col-12 col-md-6">
                    <div class="single_widget_area">
                        <div class="footer_social_area">
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Pinterest"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Youtube"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            </div>

<div class="row mt-5">
                <div class="col-md-12 text-center">
                    <p>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
                </div>
            </div>
            
        </div>


    </footer>
    <!-- ##### Footer Area End ##### -->

    <!-- jQuery (Necessary for All JavaScript Plugins) -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Plugins js -->
    <script src="js/plugins.js"></script>
    <!-- Classy Nav js -->
    <script src="js/classy-nav.min.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>

</body>

</html>