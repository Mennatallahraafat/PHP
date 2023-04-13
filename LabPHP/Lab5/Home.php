
<?php

// $db_host="localhost";
// $db_user="root";
// $db_pass="";
// $db_name="login";
// $con = mysqli_connect($db_host, $db_user, $db_pass);

// mysqli_select_db( $con,$db_name );
 session_start();
 if(isset($_SESSION['USER_ID']) && isset($_SESSION['USER_NAME'])){

 
// unset($_SESSION['USER_ID']);
// unset($_SESSION['USER_NAME']);
// header('location: logg.php');
// die();

?>
<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>

<body>
    <header>
       <h1 style="text-align:center"><?php echo 'Hi,'.$_SESSION['USER_NAME'].' Welcome to Our Site'?></h1>
    </header>
    <div>
        <img src="homepage.jpg" alt="HomePage" style=" display: block;
  margin-left: auto;
  margin-right: auto;
  width: 60% "/>
    </div>
    
</body>
<footer>
    <br>
    <div>
<a href="Logout.php"><button type="button" class="btn btn-danger"style="Display:block;
   Margin: auto; width:350px" ><h4> Sign OUT of Your Account </h4></button></a>
</div>
</footer>


<?php
 }else{
    header('location:Login.php');
    exit();
 }
		// $db_host="localhost";
		// $db_user="root";
		// $db_pass="";
		// $db_name="login";
		// $con = mysqli_connect($db_host, $db_user, $db_pass);

		// mysqli_select_db( $con,$db_name );
		// // $_SESSION = [];
        // // session_unset();
        // // session_destroy();
        // // header("Location: Login.php");
        ?>
</html>