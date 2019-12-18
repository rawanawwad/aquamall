<?php
include ('includes/config.php');
	$conn = mysqli_connect("localhost","root","","aquamall");
	if (!$conn ){
		die ("cannot connect");
	}
    ?>