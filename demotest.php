<?php 
session_start();
$connect = mysqli_connect("localhost", "root", "", "feedback");
?>

<html>
<head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

<meta name="viewport" content="width=device-width, initial-scale=1">
  </head>

<center>
  <h2>User Feedbacks</h2>
</center>
      
      <h3>Feedbacks</h3>
      

        <table class="table table-bordered">
          <tr>
            <th width="15%">User Name</th>
            <th width="30%">Email</th>
            <th width="55%">feedback</th>
  
          </tr>
          <?php
                                          $query = "SELECT * FROM feedback;";
                                            if ($result1 = $connect->query($query)) {
                                            while ($row = $result1->fetch_assoc()) {
          ?>
          
          <tr>
            <td><?php echo $row["u_name"]; ?></td>
            <td><?php echo $row["u_email"]; ?></td>
            <td><?php echo $row["desc_f"]; ?></td>
           
          </tr>
            <?php
          }
        }
          ?>

        </table>
        <br>
        <br>
        <a href="index.html"><button type="button">HOME</button></a>


              
        

            
            </html>
