<?php
  $connect = mysqli_connect("localhost", "root", "", "feedback");

     session_start();
$uname=$_POST['name'];
$email=$_POST['Email'];
$pcomp=$_POST['companies'];
$pname=$_POST['phones'];
$refno=$_POST['ref-no'];
$feedback=$_POST['Text1'];
$rating=$_POST['rating'];
if($rating==1){
	$rating=1;
}
else  if($rating==2){
	$rating=2;

}
else if($rating==3){
	$rating=3;
}
else if($rating==4){
	$rating=4;
}
else if($rating==5){
	$rating=5;
} 

echo $uname;
echo $email;
echo $pname;
echo $pcomp;
echo $rating;
echo $refno;
echo $feedback;
    $query4 ="INSERT INTO feedback VALUES ('$uname','$email','$pcomp','$pname','$rating','$refno','$feedback')";
    $result4 = mysqli_query($connect, $query4);
   echo '<script>alert("user signup successfull")</script>';
         //   header("location: userHome.html");

?>