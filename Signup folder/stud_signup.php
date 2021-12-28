<?php 

session_start();

$conn=mysqli_connect("localhost","root","","library");

if(!$conn){
    die("failed to connect".mysqli_connect_error);
}
else{
    // echo "successfull";
}
// $username=$email=$password=$confirmpassword="";
// $username_error=$email_error=$password_error=$confirmpassword_error="";

// if($_SERVER["REQUEST_METHOD"]=="POST")
if (isset($_POST['submit']))
{
    

$showAlert=false;
$name=$_POST['name'];
$rollno=$_POST['rollno'];
$email=$_POST['email'];
$password=$_POST['password'];
$cpassword=$_POST['cpassword'];

 if($password==$cpassword) {
    $sql="INSERT INTO `signup`(`name`, `rollno`, `email`, `password`, `cpassword`) VALUES ('{$name}','{$rollno}','{$email}','{$password}','{$cpassword}')";
    $result=mysqli_query($conn,$sql);
   if($result){
     $_SESSION['email'] = $email;
    echo '<script>window.alert("successfully signup"); 
    location.replace("stud_signin1.php");</script>';

   }
    
}
else{
    echo '<script>window.alert("password not match"); location.replace(document.referrer);</script>';
   

}
}



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <section class="vh-90" style="background-color: #eee;">
        <div class="container h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-lg-12 col-xl-11">
              <div class="card text-black" style="border-radius: 25px;">
                <div class="card-body p-md-5">
                  <div class="row justify-content-center">
                    <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">
      
                      <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Student's Sign up</p>
      
                      <form action="stud_signup.php" method="POST" name="myform" class="mx-1 mx-md-3">
      
                        <div class="d-flex flex-row align-items-center mb-4">
                          <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                          <div class="form-outline flex-fill mb-0 form-floating">
                            <input type="text" class="form-control" id="floatingInput" name="name" placeholder="name@example.com">

                            <label class="form-label" for="form3Example1c">Your Name<span style="color:#ff0000">*</span></label>
                          </div>
                        </div>

                        <div class="d-flex flex-row align-items-center mb-4">
                          <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                          <div class="form-outline flex-fill mb-0 form-floating">
                            <input type="text" class="form-control" name="rollno" id="floatingInput" placeholder="name@example.com">
                            <label class="form-label" for="form3Example1c">Your Roll No.<span style="color:#ff0000">*</span></label>
                          </div>
                        </div>
      
                        <div class="d-flex flex-row align-items-center mb-4">
                          <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                          <div class="form-outline flex-fill mb-0 form-floating">
                            <input type="email" class="form-control" name="email"id="floatingInput" placeholder="name@example.com">
                            <label class="form-label" for="floatinginput">Your Email<span style="color:#ff0000">*</span></label>
                          </div>
                        </div>
      
                        <div class="d-flex flex-row align-items-center mb-4">
                          <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                          <div class="form-outline flex-fill mb-0 form-floating">
                            <input type="password" class="form-control" name="password"id="floatingInput" placeholder="name@example.com">

                            <label class="form-label" for="form3Example4c">Password<span style="color:#ff0000">*</span></label>
                          </div>
                        </div>
      
                        <div class="d-flex flex-row align-items-center mb-4">
                          <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                          <div class="form-outline flex-fill mb-0  form-floating">
                            <input type="password" class="form-control" name="cpassword" id="floatingInput" placeholder="name@example.com">

                            <label class="form-label" for="form3Example4cd">Repeat your password<span style="color:#ff0000">*</span></label>
                          </div>
                        </div>
      
                        <div class="form-check d-flex justify-content-center mb-5">
                          <input
                            class="form-check-input me-2"
                            type="checkbox"
                            value=""
                            id="form2Example3c"
                          />
                          <label  class="form-check-label" for="form2Example3">
                            I agree all statements in <a href="#!">Terms of service</a>
                          </label>
                        </div>
                         <div class="already-student d-flex justify-content-center mb-5">
                           <label class="already-student-label" for="sign-in">
                            Already a student <a href="stud_signin1.php">Sign-In Here!</a>
                           </label>

                         </div>



      
                        <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                          <button type="submit" name="submit" class="btn btn-primary btn-lg">Register</button>
                        </div>
      
                      </form>
      
                    </div>
                    <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">
      
                      <img src="../images/study1.jpeg" class="img-fluid" alt="Sample image">
      
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
</body>
</html>