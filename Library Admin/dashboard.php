


<?php 

$servername="localhost";
$username="root";
$password="";
$database="library";

$conn=mysqli_connect($servername,$username,$password,$database);
    if(!$conn){
    // die("our database is failed to connect");
          }
   else{
               // echo "connection is successeded";
    }

  
    $sql="SELECT * FROM `details`";
  
    $result=mysqli_query($conn,$sql);
   
      
    
    
               
?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>


<!-- js -->

<!------ Include the above in your HEAD tag ---------->

 <link rel="stylesheet" href="dashboard.css">
    <title>Document</title>
</head>
<body>
    
<div id="wrapper" class="active">  
    <!-- Sidebar -->
            <!-- Sidebar -->
    <div id="sidebar-wrapper">
        <ul id="sidebar_menu" class="sidebar-nav">
           <li class="sidebar-brand"><a id="menu-toggle" href="#">Menu<span id="main_icon" class="glyphicon glyphicon-align-justify"></span></a></li>
        </ul>
        <ul class="sidebar-nav" id="sidebar">
              <li style="font-size:13px"><a href="http://localhost/project/Library%20Admin/books.php#">Student Book Record<span class="sub_icon glyphicon "></span></a></li>
               
                    <li style="font-size:13px"><a href="http://localhost/project/Library%20Admin/books.php#">Add Books<span class="sub_icon "></span></a></li>
                    <!-- <li><a>link2<span class="sub_icon glyphicon glyphicon-link"></span></a></li> -->
               
              <!-- <li><a>Consulta<span class="sub_icon glyphicon glyphicon-link"></span></a></li>
              <li><a>Relatorio<span class="sub_icon glyphicon glyphicon-link"></span></a></li> -->
            </ul>
      </div>
          
      <!-- Page content -->
      <div id="page-content-wrapper">
        <!-- Keep all page content within the page-content inset div! -->
        <div class="page-content inset">
            <div class="row">
              <div class="col-md-12">
              <p class="well lead">Admin Panel</p>
              <div class="container">
                  <marquee behavior="" direction=""><h1>Student Books Record</h1></marquee>
            </div>
             
            </div>
          </div>
        </div>
    </div>
    <!-- --------- -->

    </div>
    </div>
   <!-- table -->

   
<div class="container">
  
  <hr>
  
  <div class="row">
      <div class="panel panel-primary filterable">
          <div class="panel-heading">
              <h3 class="panel-title">Users</h3>
              <div class="pull-right">
                  <button class="btn btn-default btn-xs btn-filter"><span class="glyphicon glyphicon-filter"></span> Filter</button>
              </div>
          </div>
          <table class="table">
              <thead>
                  <tr class="filters">
                    
                      <th><input type="text" class="form-control" placeholder="#" disabled></th>
                     
                      
                      <th><input type="text" class="form-control" placeholder="Username" disabled></th>
                      <th><input type="text" class="form-control" placeholder="Email-Id" disabled></th>
                      <th><input type="text" class="form-control" placeholder="Book Name" disabled></th>
                      <th><input type="text" class="form-control" placeholder="Issue Date" disabled></th>
                      <th><input type="text" class="form-control" placeholder="Return Date" disabled></th>
                      <th><input type="text" class="form-control" placeholder="Fine" disabled></th>
                      <th><input type="text" class="form-control" placeholder="Book-Status" disabled></th>
                      <th><input type="text" class="form-control" placeholder=" Name" disabled></th>
                      <th><input type="text" class="form-control" placeholder="Semester" disabled></th>
                      
                  </tr>
              </thead>
              <tbody>
                <?php 
                 while($rows = mysqli_fetch_array($result)){
                
                ?>
                 <tr>
                    <td><?php echo $rows['id']?></td>
                   
                    <td><?php echo $rows['username']?></td>
                    <td><?php echo $rows['email']?></td>
                    <td><?php echo $rows['bookname']?></td>
                    <td><?php echo $rows['issue']?></td>
                    <td><?php echo $rows['returnb']?></td>
                    <td><?php echo $rows['fine']?></td>
                    <td><?php echo $rows['status']?></td>
                    <td><?php echo $rows['name']?></td>
                    <td><?php echo $rows['semester']?></td>
                  </tr>
                  <!-- <tr>
                    <td>4</td>
                    <td>Neha</td>
                    <td>fatehi</td>
                    <td>Neha</td>
                    <td>neha@gmail.com</td>
                    <td>Book of wall</td>
                    <td>12/12/12</td>
                    <td>12/12/21</td>
                      <td>Rs 10</td>
                    <td>Returned</td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>Neha</td>
                    <td>fatehi</td>
                    <td>Neha</td>
                    <td>neha@gmail.com</td>
                    <td>Book of wall</td>
                    <td>12/12/12</td>
                    <td>12/12/21</td>
                      <td>Rs 10</td>
                    <td>Lost</td>
                  </tr>
                   -->
              <?php 
                 }
              ?>
              </tbody>
          </table>
      </div>
  </div>
</div>

<script src="dashboard1.js"></script>
</body>
</html>