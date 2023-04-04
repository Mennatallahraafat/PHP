<?php

// $nameErr = $emailErr = $genderErr = $agreeErr = "";
// $name = $email = $gender = $class = $courses =$agree =$group= "";  

// if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
//     if (empty($_POST["name"])) {
//       $nameErr = "Name is required";
//     } else {
//       $name = test_input($_POST["name"]);
//     }

// if (empty($_POST["email"])) {
//     $emailErr = "Email is required";
//   } else {
//     $email = test_input($_POST["email"]);
//   }
    
//   if (empty($_POST["class_details"])) {
//     $class = "";
//   } else {
//     $class = test_input($_POST["class_details"]);
//   }

//   if (empty($_POST["courses"])) {
//     $courses = "";
//   } else {
//     $courses = test_input($_POST["courses"]);
//   }
//   if (empty($_POST["group"])) {
//     $group = "";
//   } else {
//     $group = test_input($_POST["group"]);
//   }
//   if (empty($_POST["gender"])) {
//     $genderErr = "Gender is required";
//   } else {
//     $gender = test_input($_POST["gender"]);
//   }
//   if (empty($_POST["agree"])) {
//     $agreeErr = "You Must Agree to Terms";
//   } else {
//     $agree = test_input($_POST["agree"]);
//   }

// }
// function test_input($data) {
//     $data = trim($data);
//     $data = stripslashes($data);
//     $data = htmlspecialchars($data);
//     return $data;
//   }
?>

<html>
   <body>
   <h1>Application Name: AAST_BIS class registration</h1>
   <p style = "color: red;"> * Required field</p>
      <form action = "<?php $_PHP_SELF ?>" method = "GET">
      <table class = "form">
      <tr>
            <td>Name: </td>
     <td> <input type = "text" name = "name" size="30px"  /><span style="color: red;">*</span> </td>
    </tr>

    <tr>
        <td>Email:</td>
           <td><input type = "email" name = "email" size="30px" /><span style="color: red;">*</span></td>
          </tr>

          <tr>
        <td>Group #</td>
           <td><input type = "text" name = "group" size="30px"/></td>
          </tr>
          <tr>
            <td>Class details: </td>
           <td><textarea name="class_details" cols="30" rows="5" ></textarea></td>
          </tr>

            <tr>
                <td>Gender: </td>
            
                <td><input type="radio" id="f" name="gender" value="Female">
                <label for="female">Female</label>
                <input type="radio" id="m" name="gender" value="Male">
                 <label for="male">Male</label required ><span style="color: red;">* </span></td>
            </tr>

            <tr>
                <td>Select Courses: </td>
                <td> 
                    <select name= 'courses[]' multiple>
                    <option value="PHP">PHP</option>
                    <option value="JavaScript">JavaScript</option>
                    <option value="MySQL">MySQL</option>
                    <option value="HTML">HTML</option>
                    <option value="WordPress">WordPress</option>
                    <option value="Joomla">Joomla</option>
</select>
                </td>
            </tr>

            <tr>
                <td>Agree </td>
                <td><input type="checkbox" name="agree" ><span style="color: red;">* </span></td>
            </tr>
          <tr>
            <td><input type = "submit" /></td>
           </tr>


          </table>
          
      </form>
      
   </body>
</html>
<?php

// echo "<h2>Your given values are as:</h2>";
// echo "Name: ".$name ."<br/>";
// echo "E-mail: ".$email ."<br/>";
// echo "Group #: ".$group ."<br/>";
// echo "Gender: ".$gender ."<br/>";
// echo "Your courses are: ".$courses ."<br/>";

   if(!empty($_GET["name"]) && !empty($_GET["email"])&&
    !empty($_GET["gender"])&& !empty($_GET["agree"])){
    echo " <h1>Your given values are as:</h1> ";
      echo "Name:  ". $_GET['name']. "<br />";
      echo "Email:  ". $_GET['email']. "<br/>" ;
      echo "Group #:  ". $_GET['group']. "<br />";
      echo "Class details: ". $_GET['class_details']. "<br />";
      echo "Gender: ". $_GET['gender']. "<br />";  
      echo "Your courses are: ";
      $courses = $_GET["courses"];
      foreach($courses as $key => $value){
        echo $value." " ;
      }
    }
   
//    else {
//     echo " <h1>Your given values are as:</h1> ";
//     echo "Name:  ". "<br />";
//     echo "Email:  ".  "<br/>" ;
//     echo "Group #:  ". "<br />";
//     echo "Class details: ". "<br />";
//     echo "Gender: ".  "<br />";  
//     echo "Your courses are: ";
//     // $courses = $_GET["courses"];
//     // foreach($courses as $key => $value){
//     //   echo $value." " ;
//     // }
//   }
// }  
              
           
// if (isset($_GET['submit'])){

    // $name = $email = $group = $gender = $courses = $class= $agree=  "";

    // if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //   $name = ($_POST["name"]);
    //   $email = ($_POST["email"]);
    //   $website = ($_POST["website"]);
    //   $comment = ($_POST["comment"]);
    //   $gender = ($_POST["gender"]);
    //   $agree = ($_POST["agree"]);
    // }
    // if(!empty($_GET["$name"]) && !empty($_GET["$email"])&&
    // !empty($_GET["$gender"])&& !empty($_GET["$agree"])){
    // echo " <h1>Your given values are as:</h1> ";
    //   echo "Name:  ". $name. "<br />";
    //   echo "Email:  ". $email. "<br/>" ;
    //   echo "Group #:  ". $group. "<br />";
    //   echo "Class details: ". $class. "<br />";
    //   echo "Gender: ". $gender. "<br />";  
    //   echo "Your courses are: ";
    // //   $courses = $_GET["courses"];
    // //   foreach($courses as $key => $value){
    // //     echo $value." " ;
    // //   }
    // }

?>
