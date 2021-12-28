<?php 

$servername="localhost";
$username="root";
$password="";
$database="library";
if(isset($_POST['submit'])){
$conn=mysqli_connect($servername,$username,$password,$database);
    if(!$conn){
    // die("our database is failed to connect");
          }
   else{
               // echo "connection is successeded";
    }
    
    $name=$_POST['name'];
    $rollno=$_POST['rollno'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $cpassword=$_POST['cpassword'];
    
    if(($password==$cpassword)) {
    $sql="UPDATE `signup` SET `name`='$name',`rollno`='$rollno',`email`='$email',`password`='$password',`cpassword`='$cpassword' WHERE email='$email'";
    $query=mysqli_query($conn,$sql);
    if($query){
        // echo '<script> alert("you password has been reset");  location.replace("http://localhost/upload_image/signup.html")</script>';
    }


        }}

//         session_start();


// $rollno = $_SESSION['rollno'];
// $conn=mysqli_connect($servername,$username,$password,$database);
//     if(!$conn){
//     // die("our database is failed to connect");
//           }
//    else{
//                // echo "connection is successeded";
//     }

  
//     $sqltj = "SELECT * FROM `signup` WHERE `rollno` = '{$rollno}'";
//     $resulttj = mysqli_query($conn, $sqltj);

//     if (mysqli_num_rows($resulttj) > 0) {
//       // output data of each row
//       $rowtj = mysqli_fetch_assoc($resulttj);
//     } else {
//       echo "0 results";
// }
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
    <title>Document</title>
</head>
<body>
    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
            <a href="http://localhost/project/Home_page.php" class="navbar-brand">PCTE <span
                    style="color:#93c5fd">Library</span></a>
                    <!-- <a style="font-family:verdana,arial,sans-serif;font-size:14px;text-align:center; text-decoration:underline solid rgb(0,0,204);color:#0000cc" href="http://localhost/project/student%20panel/studentprofile.php">Welcome <?php echo $rowtj["name"];?></a> -->
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
            <a style="color:black;" class="nav-link" href="http://localhost/project/student%20panel/change_pass.php#">Change password</a>
        </li>
        <li class="nav-item">
            <a style="color:black;" class="nav-link " href="http://localhost/project/student%20panel/studentprofile.php">Student Details</a>
        </li>
    </ul>
  
     
    <h2 class="issue-book" style=" margin: 2rem 5rem; background-color: rgb(214, 214, 214);text-align: center;">Change Password </h2>
   
   <!-- card -->
   <div class="container bg-white pb-5">
    <div class="row d-flex justify-content-start align-items-center mt-sm-5">
        <div class="col-lg-5 col-10">
            <div id="circle"></div>
            <div class="pb-5"> <img src="../images/study1.jpeg" alt=""> </div>
        </div>
        <div class="col-lg-4 offset-lg-2 col-md-6 offset-md-3">
            <!-- <div class="pt-4">
                <h6><span class="fa fa-superpowers text-primary px-md-2"></span>COMPANY LOGO</h6>
            </div> -->
            <div class="mt-3 mt-md-5">
                <h3 style="margin-left:1rem;">Enter Details</h3>
                <form class="pt-4" action="change_pass.php" method="POST">
                    <form class="mx-1 mx-md-3">

                        <div class="d-flex flex-row align-items-center mb-4">
                            <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                            <div class="form-outline flex-fill mb-0 form-floating">
                                <input type="text" name="name"class="form-control" id="floatingInput"
                                    placeholder="name@example.com">

                                <label class="form-label" for="form3Example1c">Your Name<span style="color:#ff0000">*</span></label>
                            </div>
                        </div>

                        <div class="d-flex flex-row align-items-center mb-4">
                            <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                            <div class="form-outline flex-fill mb-0 form-floating">
                                <input type="text" name="rollno" class="form-control" id="floatingInput"
                                    placeholder="name@example.com">
                                <label class="form-label" for="form3Example1c">Your Roll No.<span style="color:#ff0000">*</span></label>
                            </div>
                        </div>

                        <div class="d-flex flex-row align-items-center mb-4">
                            <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                            <div class="form-outline flex-fill mb-0 form-floating">
                                <input type="email" name="email"class="form-control" id="floatingInput"
                                    placeholder="name@example.com">
                                <label class="form-label" for="form3Example1c">Email Address<span style="color:#ff0000">*</span></label>
                            </div>
                        </div>
                    </div>
                       

                        <div class="d-flex flex-row align-items-center mb-4">
                            <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                            <div class="form-outline flex-fill mb-0 form-floating">
                                <input type="password" name="password"class="form-control" id="floatingInput"
                                    placeholder="name@example.com">

                                <label class="form-label" for="form3Example4c">Current Password<span style="color:#ff0000">*</span></label>
                            </div>
                        </div>

                        <div class="d-flex flex-row align-items-center mb-4">
                            <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                            <div class="form-outline flex-fill mb-0 form-floating">
                                <input type="password" name="cpassword"class="form-control" id="floatingInput"
                                    placeholder="name@example.com">

                                <label class="form-label" for="form3Example4c">New Password<span style="color:#ff0000">*</span></label>
                            </div>
                        </div>

                        
                   
                     <input style="margin-left:1rem;"   type="submit" name="submit" value="Confirm" class="btn btn-success  btn-block mb-3"> 
                    
                    
                </form>
            </div>
        </div>
    </div>
</div>
















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
                        <h5 class="mb-1 " style="color:  #93c5fd;">opening hours</h5>
                        <table class="table" style="border-color: #93c5fd #93c5fd;">
                            <tbody style="color:  #93c5fd;">
                                <tr style="color:  #93c5fd;">
                                    <td>Mon - Fri:</td>
                                    <td>8am - 9pm</td>
                                </tr>
                                <tr style="color:  #93c5fd;">
                                    <td>Sat - Sun:</td>
                                    <td>8am - 1am</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);color:#93c5fd">
                © 2021 Copyright:
                <a class="" style="color:  #93c5fd;" href="https://mdbootstrap.com/">Designed By Rhythm and Samridh</a>
            </div>
            <!-- Copyright -->
        </footer>

    </div>
</body>
</html>