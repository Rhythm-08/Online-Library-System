<?php 

session_start();

if(isset($_POST['submit'])){
    $conn=mysqli_connect("localhost","root","","library");
    
    if(!$conn){
        die("failed to connect".mysqli_connect_error);
    }
    else{
        // echo "successfull";
    }

    $name=$_POST['name'];
    $rollno=$_POST['rollno'];
    $password=$_POST['password'];
    $sql="SELECT * FROM signup where rollno='$rollno' and password='$password' limit 1";

    $result=mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)==1){
        $_SESSION['rollno'] = $rollno;
        echo '<script>alert("you have succesfully login"); location.replace("http://localhost/project/Home_page.php");</script>';
        
    }
    else{
        echo '<script>alert("Login Failed..! plz check your password or email"); location.replace(document.referrer);</script>';
    }
    
    }
    ?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>
    <link rel="stylesheet" href="stud_signin.css">
</head>
<body>
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
                    <h3 style="margin-left:1rem;">Log in to your account</h3>
                    <!-- <form class="mx-1 mx-md-3"> -->
                        <form class="pt-4 " action="stud_signin1.php" method="POST">

                            <div class="d-flex flex-row align-items-center mb-4">
                                <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                                <div class="form-outline flex-fill mb-0 form-floating">
                                    <input type="text" class="form-control" name="name" id="floatingInput"
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
                        </div>
                           

                            <div class="d-flex flex-row align-items-center mb-4">
                                <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                                <div class="form-outline flex-fill mb-0 form-floating">
                                    <input type="password" name="password" class="form-control" id="floatingInput"
                                        placeholder="name@example.com">

                                    <label class="form-label" for="form3Example4c">Password<span style="color:#ff0000">*</span></label>
                                </div>
                            </div>
                        <div class="d-flex jusity-content-end pb-4">
                            <div style="margin-left:1rem; font-size:1rem;" class="ml-auto"> <a href="forget_pass.html" class="text-danger text-decoration-none">Forgot password?</a> </div>
                        </div>
                         <input style="margin-left:1rem;"   type="submit" name="submit" value="Login" class="btn btn-success  btn-block mb-3"> 
                        
                        <div class="register mt-5">
                            <p>Don't have an account? <a href="stud_signup.php">Create an account</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
