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


$id=$_GET['bookid'];

$sql="SELECT * FROM `bhmct` WHERE `id` = '{$id}'";
  
$result=mysqli_query($conn,$sql);
$rows = mysqli_fetch_array($result);
// $rows['status']=-1;

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

  

    $sqltj = "SELECT * FROM `signup` WHERE `rollno` = '{$rollno}'";
    $resulttj = mysqli_query($conn, $sqltj);

    if (mysqli_num_rows($resulttj) > 0) {
      // output data of each row
      $rowtj = mysqli_fetch_assoc($resulttj);
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
    <title>Document</title>
    <link rel="stylesheet" href="../BBA Folder/bba_bookdetails.css">
</head>

<body>
    <!-- NAVBAR -->

    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
            <a href="http://localhost/project/Home_page.php" class="navbar-brand">PCTE <span
                    style="color:#93c5fd">Library</span></a>
                    <a style="font-family:verdana,arial,sans-serif;font-size:14px;text-align:center; text-decoration:underline solid rgb(0,0,204);color:#0000cc" href="http://localhost/project/student%20panel/studentprofile.php">Welcome <?php echo $rowtj["name"];?></a>
          
            <form class="d-flex">
                <input class="form-control me-2" id='search' type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" onclick='searchit()' type="button">Search</button>
            </form>
        </div>
    </nav>

    <script>
        function searchit() {
            var tj = document.getElementById('search').value;
            window.location.replace("searchresult.php?q=" + tj);
        }
    </script>

    
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
    <a style="color:black;" class="nav-link" href="http://localhost/project/student%20panel/studentprofile.php">Student Details</a>
</li>
</ul>

    <!-- details -->

    <!-- Single product details -->
    <div class="small-container single-product">
        <div class="row">
            <div class="col-2">
                <img src="<?php echo $rows['images'];?>" .width="100%".height="500px" alt="" id="productImg">
                <div class="small-img-row">
                    <!-- <div class="small-img-col">
                        <img src="../images/study1.jpeg" alt="" width="100%" class="small-img">
                        </div>
                        <div class="small-img-col">
                        <img src="" alt="" width="100%" class="small-img">
                        </div>
                        <div class="small-img-col">
                        <img src="" alt="" width="100%" class="small-img">
                        </div>
                        <div class="small-img-col">
                        <img src="" alt="" width="100%" class="small-img">
                    </div> -->
                </div>
            </div>
            <div class="col-2">
                
                <h1><?php echo $rows['name'];?></h1>
                <p>Course : BHMCT</p>
                <?php
        if($rows['status']==1){
            ?>
        <h6>Status :- <span class="badge bg-success">Available</span></h6>
        <?php
        }
        ?>
        <?php 
         if($rows['status']!=1){
            ?>
            <h6>Status :- <span class="badge bg-danger">Not Available</span></h6>
            <?php
        }
        ?>

                <!-- <select name="" id="">
            <option value="">Select Size</option>
            <option value="">XXl</option>
            <option value="">Xl</option>
            <option value="">Small</option>
        </select> -->
                <!-- <input type="number" value="1">
<a href="" class="btn">Add To cart</a> -->
                <h3>DESCRIPTION <i class="fa fa-indent"></i></h3>
                <br>
                <p><?php echo $rows['description'];?></p>
            </div>
        </div>
    </div>
    </div>

    <!-- title -->

    <!-- ----- product -->



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
            <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);color:#93c5fd">
                © 2021 Copyright:
                <a class="" style="color:  #93c5fd;" href="https://mdbootstrap.com/">Designed By Rhythm and Samridh</a>
            </div>
            <!-- Copyright -->
        </footer>

    </div>


</body>

</html>