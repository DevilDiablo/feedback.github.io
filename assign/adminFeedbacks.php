<?php 
session_start();
$connect = mysqli_connect("localhost", "root", "", "feedback");
?>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Indian Premier League</title>
<meta charset="uft=8"/>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Champion Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
    function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<!--/header files are added here-->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="main1.css" rel="stylesheet" type="text/css" media="all" />

<style>
body {
  font-family: "Lato", sans-serif;
  transition: background-color .5s;
}

table {
  width:100%;
  color: white;
  border-color: white;
}
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
  color:white;
  border-color: white;

}
th, td {
  padding: 15px;
  text-align: left;
  color: white;
  border-color: white;

}



#main {
  transition: margin-left .5s;
  padding: 16px;
}

.backkground
{
   background-image: url(images/customblue.jpg);
 
   
    padding-right: 150px;
    padding-bottom: 1000px;
      background-position: center top;

}

.main1{
  
  width:100%;
  display:inline-block;
 margin: 2%;
 align-content: center;

}

.conregistration {
    padding-top: 8px;
    padding-left: 100px;
    padding-right: 150px;
    padding-bottom: 1000px;
    height: 550px;
    background-image: url(images/customblue.jpg);
    background-position: center top;
    background-repeat: repeat-y;
    width: 100%;
    height: 700px;
    color: white;
    background-attachment: scroll;
}
.card{
   

     left:250px;
     width: 20%;
     display: inline-block;
     box-shadow: 2px 2px 20px black;
     border-radius: 5px; 
     margin: 2%;
    }
.card:hover{
	left:250px;
     width: 20%;
     display: inline-block;
     box-shadow: 3px 3px 25px black;
     border-radius: 7px; 
     margin: 2%;
     

}

.image img{
  width: 100%;
  border-top-right-radius: 5px;
  border-top-left-radius: 5px;
  

 
 }

.title{
 
  text-align: center;
  padding: 10px;
  
 }


 button{
  margin-top: 5px;
  margin-bottom: 10px;
  background-color: white;
  border: 1px solid black;
  border-radius: 5px;
  padding:10px;

}
button:hover{
  background-color: green;
  color: white;
  transition: .5s;
  cursor: pointer;
}



* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 2.5s;
  animation-name: fade;
  animation-duration: 2.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}

</style>

</head>
<body>


<div class="backkground">

 <h1 align="center" style="color: white" class="navbar-brand">Feedbacks</h1>

<div class="main1">

 
  <?php
                                           $query = "SELECT * FROM feedback;";
                                            if ($result1 = $connect->query($query)) {
                                            while ($row = $result1->fetch_assoc()) {
                                          

                                           $uname=$row['u_name'];
                                          $email=$row['u_email'];
                                          $pcomp=$row['p_company'];
                                          $pname=$row['p_name'];
                                         // $refno=$row['ref-no'];
                                          $feedback=$row['desc_f'];
                                          $rating=$row['rating'];
                                           
                                            ?>

<div class="card" style="background-color: lightblue">

<div class="image">
</div>
<div class="title">

<h4 style="color: white">Name:<?php
echo $uname;
echo "\n";
?>
 </h1></h4>


 <p style="color: white">Product Company: <?php
echo $pcomp;
echo "\n";
?>
</p>
 <p style="color: white">Product name: <?php
echo $pname;
echo "\n";
?>
</p>
 <p style="color: white">Description: <?php
echo $feedback;
echo "\n";
?>
</p>

<p>
  <?php
      if($rating==1)
      {


  ?>
   <span class="fa fa-star checked" style="color: orange;"></span>
    <?php

  }?>


   <?php
      if($rating==2)
      {


  ?>
   <span class="fa fa-star checked" style="color: orange;"></span>
    <span class="fa fa-star checked" style="color: orange;"></span>

    <?php

  }?>



 <?php
      if($rating==3)
      {


  ?>
   <span class="fa fa-star checked" style="color: orange;"></span>
    <span class="fa fa-star checked" style="color: orange;"></span> <span class="fa fa-star checked" style="color: orange;"></span>
    <?php

  }?>



 <?php
      if($rating==4)
      {


  ?>
   <span class="fa fa-star checked" style="color: orange;"></span>

    <span class="fa fa-star checked" style="color: orange;"></span> <span class="fa fa-star checked" style="color: orange;"></span> <span class="fa fa-star checked" style="color: orange;"></span>
    <?php

  }?>


 <?php
      if($rating==5)
      {


  ?>
   <span class="fa fa-star checked" style="color: orange;"></span>
   

   <span class="fa fa-star checked" style="color: orange;"></span>
   
   
   <span class="fa fa-star checked" style="color: orange;"></span>
   
   
   <span class="fa fa-star checked" style="color: orange;"></span>
   
   
   <span class="fa fa-star checked" style="color: orange;"></span>
   
   
    <?php

  }?>


</p>



 <font color="green">
        
      </font>

</div>
<div class="des">
 <p>
 
 	
 </p>
 <center>
<a href="#"><button></button></a>
</center>
</div>
</div>
  <?php
          }
        }
          ?>
<!--cards -->




</div>


</div>


</body>
</html> 
