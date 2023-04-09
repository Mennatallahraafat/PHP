<html>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

   <body>
   <div class="container mt-3">
   <form action = "<?php $PHP_sELF?>" method = "POST">
   <h1>User Regestration Form</h1> 
   <br>
   <p>Please fill this form and submit to add user record to the database.</p>

  <div class=col-xs-7>
    <label for="name">Name</label>
    <input type="text" class="form-control" name = "formname" >
    
  </div>
  <div class=col-xs-7>
    <label for="email">E-mail</label>
    <input type="emal" class="form-control" name = "formemail" >
    
  </div>
  
  <div class="col-xs-7"> <br>
            <label >Gender</label>
    
            <div class="radio">
        <label><input type="radio" name="formgender" value = "f" >Female</label>

        <div class="radio">
        <label><input type="radio" name="formgender" value = "m">Male</label>
  </div>
</div>

  <div class="checkbox">
    <h4>
    <label for="checkbox"><input type="checkbox" name = "check" > Receive E-mails from US</label>
 </h4>
  </div>
 <input class="btn btn-primary" type="submit" value="Submit" name = "submit">
  <button type="button" class="btn btn-outline-dark" value="reset" name = "cancel">Cancel</button>
  </div>
</form>
</div>

<?php


		$db_host="localhost";
		$db_user="root";
		$db_pass="";
		$db_name="phplab";
		$con = mysqli_connect($db_host, $db_user, $db_pass);

		mysqli_select_db( $con,$db_name );
		$formName = $formEmail = $formGender =  "";
		$mailstatus = false;
		
	

		echo "$formName $formEmail $formGender $mailstatus"; 
		if(!empty($_POST['submit'])){
			if( isset($_POST["formname"]) &&  isset($_POST["formemail"]) && isset($_POST["formgender"])){
				$formName = $_POST['formname'];
				$formEmail = $_POST['formemail'];
				$formGender = $_POST['formgender'];
				$mailstatus = isset($_POST['check']) == 1 ? 1 : 0;
				$sql = "INSERT INTO user(user_name,user_email,gender,mail_status) VALUES('$formName','$formEmail','$formGender','$mailstatus')";
				$retval = mysqli_query( $con,$sql );
				mysqli_close($con);
				header("Location: Users.php");
			}
			}
 ?>
		<script
			src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
			integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
			crossorigin="anonymous"></script>
	</body>

