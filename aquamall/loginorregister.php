<?php
include ('admin/includes/public_header.php');
 
                                            if(isset($_POST['regist'])){
                                            
                                            $name = $_POST['name'];
                                            $email = $_POST['email'];
                                            $password = $_POST['password'];
                                            $mobile = $_POST['mobile'];
                                            $country = $_POST['country'];
                                            $city=$_POST['city'];
                                            $building=$_POST['building'];
                                            $street=$_POST['street'];
                                            $location=$_POST['location'];
                                            $reg_query = "INSERT INTO customers (name, email, password, mobile ,country,city,building,street,location) VALUES('$name', '$email', '$password', '$mobile','$country','$city','$building','$street','$location')";
                                            mysqli_query($conn,$reg_query); 
                                            $_SESSION['customer_id'] = $reg['customer_id'];
                                            echo "<script>window.top.location='checkout.php'</script>"; 
                                        }



                                              //                                         $q = "select * from customer ";
    //                                         $result =mysqli_query($conn,$q);
    //                                         while($row = mysqli_fetch_assoc($result)){
            
    //                                 if($email != $row['email']){
    //             $reg_query = "INSERT INTO customer(name, email, password, mobile) VALUES('$name', '$email', '$password', '$number')";
    //             $reg_result = mysqli_query($conn, $reg_query);
    //             while($reg_row = mysqli_fetch_assoc($reg_result)){
                    
    //                 $_SESSION['customer_id'] = $reg_row['customer_id'];
                    
    //                 echo '<script>window.top.location="index.php"</script>';
    //             }
    //         }
    //         else
    //             $error = "This email is already registered!";
    //     }
    // }
                                            
                                            //$query = "insert into address (country , city , location , street ,building) values ('$country','$city','$location','$street','$building')";
                                            
                                            // echo "$query";
                                            // die;
                                            //$query2 ="insert into customer (name , email , mobile) values ('$name','$email','$mobile')";
                                            
                                          // $row = mysqli_fetch_assoc($result);
                                           //print_r($row);
                                            //mysqli_query($conn,$query2);
                                // }
                                if (isset($_POST['login'])){
                                    $email    =$_POST['email'];
                                    $password =$_POST['password'];
                                    //echo '<script>window.top.location="checkout.php"</script>'; 
                                    //header("location:  checkout.php");
                                     if(!empty($email) && !empty($password)){
    $query = "select * from customers where email = '$email' AND password='$password'";
    // echo "$query";
    // die;

    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);
    if($row['customer_id']){
        $_SESSION ['customer_id']= $row ['customer_id'];
        echo '<script>window.top.location="checkout.php"</script>'; 
        //header ("location:checkout.php");
        }
        else{
           $error=  "please register to continue";

        }
    }
  
                                }
                                //include('admin/includes/public_header.php');
                                    ?>



<!-- // if(isset($_GET['checkout'])){
    
//     //($_POST['addtocart']))
//     // $productname        =$_POST['product_name'];
//    if( $email=$_POST['email'] && $password=$_POST['password']){

// header("location:checkout.php");
// }
// else {
// header("location:login.php");
// }
// }

//if ($country = $_GET['country'] && $city = $_GET['city'] && )
// if ($email=$_GET['email'] && $password=$_GET['password']){
//     header("location:index.php");

// }
// else{
//     header("location:login.php");
// }
if(isset($_POST['login'])){
    $email = $_POST['email'];
    $password= $_POST['password'];
    //header("location:checkout.php");
    if(!empty($email) && !empty($password)){
    $query = "select * from customer where email = '$email' AND password='$password'";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);
    if($row['customer_id']){
        $_SESSION ['customer_id']= $row ['customer_id'];
        header ("location:checkout.php");
        }
        else{
           $error=  "please register to continue";

        }
    }
  }


// if(isset($_POST['checkout'])){
//     $email    =$_POST['email'];
//     $password =$_POST['password'];
//     //$fullname =$_POST['adminfullname'];
    
// $query="insert into address (email,password) values ('$email','$password')";
    
//     mysqli_query($conn,$query);
// }
?> -->

    <!-- ##### Breadcumb Area Start ##### -->
    <div class="breadcumb_area bg-img" style="background-image: url(img/bg-img/breadcumb.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="page-title text-center">
                        <h2>LOGIN OR REGISTER</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Breadcumb Area End ##### -->

    <!-- ##### Checkout Area Start ##### -->
    <form method="post">
    <div class="checkout_area section-padding-80">
        <div class="container">
            <div class="row">

                <div class="col-12 col-md-6">
                    <div class="checkout_details_area mt-50 clearfix">

                        <div class="cart-page-heading mb-30">
                            <h5>REGISTER</h5>
                        </div>

                        <form action="#" method="post">
                            
                            <div class="row">
                                
                                <!-- <div class="col-md-6 mb-3">
                                    <label for="last_name">Last Name <span>*</span></label>
                                    <input type="text" class="form-control" id="last_name" value="" required>
                                </div> -->
                                <!-- <div class="col-12 mb-3">
                                    <label for="company">Email</label>
                                    <input type="email" class="form-control" id="company" value="">
                                </div> -->
                                <!-- <div class="col-12 mb-3">
                                    <label  for="country">Country  <span>*</span></label>
                                    <input name="country" type="text" class="form-control mb-3" id="street_address" value=""> -->
                                    <!-- <select class="w-100" id="country" name="country">  
                                    
                        
                                        <option value="usa">United States</option>
                                        <option value="uk">United Kingdom</option>
                                        <option value="ger">Germany</option>
                                        <option value="fra">France</option>
                                        <option value="ind">India</option>
                                        <option value="aus">Australia</option>
                                        <option value="bra">Brazil</option>
                                        <option value="cana">Canada</option>
                                    </select> -->
                                <!-- </div> -->
                                <!-- <div class="col-12 mb-3">
                                    <label for="street_address">City <span>*</span></label>
                                    <input name="city" type="text" class="form-control mb-3" id="street_address" value="">
                                    
                                </div>
                                <div class="col-12 mb-3">
                                    <label for="postcode">Location <span>*</span></label>
                                    <input name="location" type="text" class="form-control" id="postcode" value="">
                                </div>
                                <div class="col-12 mb-3">
                                    <label for="city">Street <span>*</span></label>
                                    <input name="street" type="text" class="form-control" id="city" value="">
                                </div>
                                <div class="col-12 mb-3">
                                    <label for="state">Building <span>*</span></label>
                                    <input name="building" type="text" class="form-control" id="state" value="">
                                </div> -->
                                <div class="col-12 mb-3">
                                    <label for="first_name">Name <span>*</span></label>
                                    <input name="name" type="text" class="form-control" id="first_name" value="" required>
                                </div>
                                
                                <div class="col-12 mb-4">
                                    <?php
                            //  if(isset($error)) {
                            //     echo "<div class ='alert alert-danger'>$error</div>";
                            // }

                            ?> 
                                    <label for="email_address">Email <span>*</span></label>
                                    <input name="email" type="email" class="form-control" id="email_address" value="">
                                </div>
                                <div class="col-12 mb-4">
                                    <label for="email_address">Password <span>*</span></label>
                                    <input name="password" type="password" class="form-control" id="email_address" value="">
                                </div>
                                    <div class="col-12 mb-3">
                                    <label for="phone_number">Mobile <span>*</span></label>
                                    <input name="mobile" type="number" class="form-control" id="phone_number" min="0" value="">
                                </div>
                                <div class="col-12 mb-3">
                                    <label for="phone_number">Country <span>*</span></label>
                                    <input name="country" type="text" class="form-control" id="phone_number" min="0" value="">
                                </div>
                                <div class="col-12 mb-3">
                                    <label for="phone_number">City <span>*</span></label>
                                    <input name="city" type="text" class="form-control" id="phone_number" min="0" value="">
                                </div>
                                <div class="col-12 mb-3">
                                    <label for="phone_number">Building <span>*</span></label>
                                    <input name="building" type="text" class="form-control" id="phone_number" min="0" value="">
                                </div>
                                <div class="col-12 mb-3">
                                    <label for="phone_number">Location <span>*</span></label>
                                    <input name="location" type="text" class="form-control" id="phone_number" min="0" value="">
                                </div>
                                <div class="col-12 mb-3">
                                    <label for="phone_number">Street <span>*</span></label>
                                    <input name="street" type="text" class="form-control" id="phone_number" min="0" value="">
                                </div>

                                <button type="submit" name="regist" class="au-btn au-btn--block btn-lg btn-primary">Regist
                                   
                                </button>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-5 ml-lg-auto">
                    <div class="order-details-confirmation">

                        <div class="cart-page-heading">
                            <h5>LOG IN</h5>
                         
                        </div>
                        <form action="#" method="post">
                             <?php
                             if(isset($error)) {
                                echo "<div class ='alert alert-danger'>$error</div>";
                            }
                            ?>
                               <div class="col-12 mb-4">
                                    <label for="email_address">Email Address <span>*</span></label>
                                    <input type="email" name="email" class="form-control" id="email_address" value="">
                                </div>



                               <div class="col-12 mb-4">
                                    <label for="password">Password <span>*</span></label>
                                    <input type="password" name="password" class="form-control" id="password" value="">
                                   

                                </div>

                                <button type="submit" name="login" class="au-btn au-btn--block btn-lg btn-primary">Log In</button>
                        </form>
                  </div>
                   
                     
                </div>

            </div>

        </div>

    </div>
</form>

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
                                <input type="email" name="email" class="mail" placeholder="Your email here">
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