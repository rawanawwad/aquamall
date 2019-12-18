<?php
//session_start();
include('admin/includes/public_header.php');

if(isset($_POST['addtocart'])){
    $_SESSION['product_id'][]= $_GET['product_id'];

}

// if(isset($_POST['addtocart'])){
//     $productname        =$_POST['product_name'];
//     $productprice       =$_POST['product_price'];
//     $query="insert into product (product_name,product_price) values ('$productname','$productprice')";



//     mysqli_query($conn,$query);
    
// }

?>


    <!-- ##### Single Product Details Area Start ##### -->
    <section class="single_product_details_area d-flex align-items-center">
        <?php
                $query = "select * from product where product_id = {$_GET['product_id']}";
                $result =mysqli_query($conn,$query);
                while($row = mysqli_fetch_assoc($result)){
        
        echo "<div class='single_product_thumb clearfix'>
           <div>
            <img src='admin/upload/{$row['product_images']}' alt=''>
           </div>         
        </div> ";
        }
?>
        <!-- Single Product Description -->
        <?php
                $query = "select * from product where product_id = {$_GET['product_id']}";
                $result =mysqli_query($conn,$query);
                while($row = mysqli_fetch_assoc($result)){
      echo"  <div class='single_product_desc clearfix'>
            <span>WELCOME</span>
            <a href='cart.html'>
                <h2>{$row['product_name']}</h2>
            </a>

            <p>{$row['product_price']}</p>
            <p>{$row['product_desc']}</p>

            <!-- Form -->
            <form class='cart-form clearfix' method='post'>
                <!-- Select Box -->
                
                <!-- Cart & Favourite Box -->
                <div class='cart-fav-box d-flex align-items-center'>
                    <!-- Cart -->
                    <button type='submit' name='addtocart' value='5' class='btn essence-btn'>Add to cart</button>
                    <!-- Favourite -->
                    
                    <div class='product-favourite ml-4'>
                        <a href='#' class='favme fa fa-heart'></a>
                    </div>
                </div>
            </form>
        </div>
    </section> 
    "; 
}
    ?>
    <!-- ##### Single Product Details Area End ##### -->

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