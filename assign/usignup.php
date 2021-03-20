<?php
$username=$_POST['Uname'];
$email=$_POST['Email'];
$pass=$_POST['Pass1'];
$cpass=$_POST['Pass2'];
if($pass==$cpass){
  $connect = mysqli_connect("localhost", "root", "", "feedback");
    $query4 ="INSERT INTO user VALUES ('$username','$email','$pass')";
    $result4 = mysqli_query($connect, $query4);
   echo '<script>alert("user signup successfull")</script>';
            header("location: userLogin.html");


}
else
{
	   echo '<script>alert("password and confirm password not matching")</script>';

}

?>