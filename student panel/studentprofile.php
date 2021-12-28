<?php 
session_start();
$rollno = $_SESSION['rollno'];
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
    $sqltj = "SELECT * FROM `profile` WHERE `rollno` = '{$rollno}'";
    $resulttj = mysqli_query($conn, $sqltj);

    if (mysqli_num_rows($resulttj) > 0) {
      // output data of each row
      $rowtj = mysqli_fetch_assoc($resulttj);
    } else {
      echo "0 results";
}

  
    $sqltj = "SELECT * FROM `signup` WHERE `rollno` = '{$rollno}'";
    $resulttij = mysqli_query($conn, $sqltj);

    if (mysqli_num_rows($resulttj) > 0) {
      // output data of each row
      $rowtij = mysqli_fetch_assoc($resulttij);
    } else {
      echo "0 results";
}

?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
        <link rel="stylesheet" href="../all_subject_stylesheet1.css">
        <link rel="stylesheet" href="student.css">
        <title>Document</title>
    </head>
    <body>
        <nav class="navbar navbar-light bg-light">
            <div class="container-fluid">
                <a href="http://localhost/project/Home_page.php" class="navbar-brand">PCTE <span
                        style="color:#93c5fd">Library</span></a>
                        <a style="font-family:verdana,arial,sans-serif;font-size:14px;text-align:center; text-decoration:underline solid rgb(0,0,204);color:#0000cc" href="http://localhost/project/student%20panel/studentprofile.php">Welcome <?php echo $rowtij["name"];?></a>
                <form class="d-flex">
                    <input class="form-control me-2" id='search' type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" onclick='searchit()' type="button">Search</button>
                </form>
    
            </div>
        </nav>
        <ul class="nav justify-content-center navbar navbar1 con1" style="background-color:#60a5fa">
    
            <li class="nav-item">
                <a style="color:black;" class="nav-link active" aria-current="page" href="http://localhost/project/Home_page.php">Home</a>
            </li>
            <li class="nav-item">
                <a style="color:black;" class="nav-link" href="http://localhost/project/student%20panel/student_detail.php"> Issue books</a>
            </li>
            <li class="nav-item">
                <a style="color:black;" class="nav-link" href="change_pass.php">Change password</a>
            </li>
            <li class="nav-item">
                <a style="color:black;" class="nav-link " href="http://localhost/project/student%20panel/studentprofile.php">Student Details</a>
            </li>
        </ul>

        <!-- start -->

        <div class="con">
        <div class="img">
            <img style="height:180px; width:200px;margin-top:3rem;margin-left:4rem;border:2px solid black;margin-right:1rem"src="../images/book3.jpg" alt="">
        </div>
        <div  style="margin-top:5rem;margin-left:1rem;" class="info"><b>WELCOME</b></div>
        <h4 style="margin-top:8rem;margin-left:-5rem;text-transform:capitalize"><?php echo $rowtj["name"];?>(<?php echo $rowtj["rollno"]?> ) </h4>
        <?php
        if($rowtj['status']==1){
            ?>
        <h7 style="margin-top:167px;margin-left:-188px;text-transform:capitalize">Status :- <span class="badge bg-success" >Active</span></h7>
        <?php
        }
        ?>
        <?php 
         if($rowtj['status']!=1){
            ?>
            <h7 style="margin-top:167px;margin-left:-188px;text-transform:capitalize">Status :- <span class="badge bg-danger" >Disabled</span></h7>
            <?php
        }
        ?>
       
    </div>
    <hr class="text-muted">
      <h7 class="text-muted">COLLEGE : PCTE GROUP OF INSTITUTES </h7>
      <hr>
       <h7 class="text-muted" style="text-transform:capitalize">COURSE : <?php echo $rowtj["course"];?></h7>
       <hr>
       <h7 class="text-muted"  style="text-transform:capitalize">BATCH : <?php echo $rowtj["batch"];?></h7>
       <hr>
       <h7 class="text-muted">E-MAIL ADDRESS : <?php echo $rowtj["email"];?></h7>
       <hr>
       <h7 class="text-muted"  style="text-transform:capitalize">SEMESTER : <?php echo $rowtj["semester"];?></h7>
       <hr>
      
       



     <!-- footer -->

<div class="container my-5" style="max-width:100%">

    <footer style="background-color:#4b5563;">
      <div class="container p-4">
        <div class="row">
          <div class="col-lg-6 col-md-12 mb-4">
            <h5 class="mb-3 " style="color:#93c5fd">footer content</h5>
            <p style="color:#93c5fd">
              Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iste atque ea quis
              molestias. Fugiat pariatur maxime quis culpa corporis vitae repudiandae aliquam
              voluptatem veniam, est atque cumque eum delectus sint!
            </p>
          </div>
          <div class="col-lg-3 col-md-6 mb-4">
            <h5 class="mb-3 " style="color:#93c5fd">links</h5>
            <ul class="list-unstyled mb-0">
              <li class="mb-1">
                <a href="#!" style="color: #93c5fd;">Home</a>
              </li>
              <li class="mb-1">
                <a href="#!" style="color: #93c5fd;">Courses</a>
              </li>
              <li class="mb-1">
                <a href="#!" style="color:  #93c5fd;">Sign up</a>
              </li>
              <li>
                <a href="#!" style="color:  #93c5fd;">Sign In</a>
              </li>
            </ul>
          </div>
          <div class="col-lg-3 col-md-6 mb-4">
            <h5 class="mb-1 "style="color:  #93c5fd;">opening hours</h5>
            <table class="table" style="border-color: #93c5fd #93c5fd;">
              <tbody style="color:  #93c5fd;">
              <tr style="color:  #93c5fd;">
                  <td>Mon - Fri:</td>
                  <td>11am - 4pm</td>
                </tr>
                <tr style="color:  #93c5fd;">
                  <td>Sat - Sun:</td>
                  <td>Off</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <div class="text-center p-3"  style="background-color: rgba(0, 0, 0, 0.2);color:#93c5fd">
        © 2021 Copyright:
        <a class="" style="color:  #93c5fd;" href="https://mdbootstrap.com/">Designed By Rhythm and Samridh</a>
      </div>
      <!-- Copyright -->
    </footer>
    
  </div>

      </body>
      </html>