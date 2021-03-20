<?php  
  $connect = mysqli_connect("localhost", "root", "", "feedback");
  
     session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($connect,$_POST['Uname']);
      $mypassword = mysqli_real_escape_string($connect,$_POST['Pass']); 
      
      $sql = "SELECT user_id FROM user WHERE username = '$myusername' and password = '$mypassword'";
      $result = mysqli_query($connect,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
     // $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         //session_register("myusername");
         $_SESSION['login_user'] = $myusername;
         
         header("location: userHome.html");
      }else {
         $error = "Your Login Name or Password is invalid";
            echo '<script>alert("Your Login Name or Password is invalid")</script>';

      }
   }
/*
    if(time() - $_SESSION['timestamp'] > 60) { //subtract new timestamp from the old one
    echo"<script>alert('1 Minutes over!');</script>";
    unset($_SESSION['username'], $_SESSION['password'], $_SESSION['timestamp']);
    $_SESSION['logged_in'] = false;
    header("Location: " demotest.php); //redirect to index.php
    exit;
} else {
    $_SESSION['timestamp'] = time(); //set new timestamp
}
*/
?>