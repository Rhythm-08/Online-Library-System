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
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>

    <link rel="stylesheet" href="Home_page.css">
    <style>
        .carousel-item {
            height: 30rem;

        }

        .con {
            display: flex;
            justify-content: space-between;
            position: sticky;
            top: 0;
            z-index: 100;
            background-color: #60a5fa;
            /* rgb(188, 188, 231);*/
        }

        .bg-light {
            --bs-bg-opacity: 0;
        }



        @media only screen and (max-width: 680px) {
            .nav-item {
                font-size: 60%;
                text-align: center;
            }

            .h1 {
                font-size: 70%;
            }

            .nav-link {
                color: #393a3b;
            }
        }

        @media only screen and (max-width:470px) {
            .card1 {
                flex-direction: column;
                align-items: center;
                margin-top: -10rem;
                ;
            }
        }

        .card1 {
            display: flex;
    

            justify-content: space-evenly;
            margin-top: 3rem;
            ;
        }

        .card:hover {
            transform: scale(1.05);
            box-shadow: 0 10px 20px rgba(0, 0, 0, .12), 0 4px 8px rgba(0, 0, 0, .06);
        }
    </style>
</head>

<body>
    <!-- NAVIGATION BAR ------------------------------------------ -->
    <div class="con">


        <nav class="navbar navbar-light bg-light">
            <div class="container-fluid sticky">
                <span class="navbar-brand mb-0 h1"><span style="color:white">PCTE</span> Library</span>
                <div style="margin:0rem 23rem;text-transform:capitalize text-align:center;"><a href="http://localhost/project/student%20panel/studentprofile.php" style="color:white ;text-align:center">Welcome <?php echo $rowtj["name"];?></a></div></div>
           
        </nav>
        <ul class="nav justify-content-end sticky">
            <li class="nav-item">
                <a class="nav-link active styl" style="color:black" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link styl" style="color:black" href="Signup folder/stud_signup.php">Sign up</a>
            </li>
            <li class="nav-item">
                <a class="nav-link styl" style="color:black" href="http://localhost/project/Signup%20folder/stud_signin1.php">Login</a>
            </li>
            <li class="nav-item">
                <!-- <a class="nav-link styl " style="color:black" href="#">Guest</a> -->
            </li>
        </ul>
    </div>
    <!-- slider ---------------------------------------------- -->
    <div class="slider">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="images/book1.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="images/book2.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="images/book3.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    <!-- card  ----------------------------------------  -->
   <a style="text-decoration: none;font-size: 14px;color:black;"href="http://localhost/project/BBA%20Folder/bba_books.php"><div class="card1">
        <div class="card" style="width: 18rem;height:29rem;">
            <img style="height:280px;" src="images/BBA.webp" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-text"><b>The Bachelor of Business Administration (BBA)</b> <br>is a bachelor's degree in
                    business
                    administration. In the United States, the degree is conferred after four years of full-time study in
                    one or more areas of business concentrations.</p>
            </div>
        </div>
    </a> 
        <a style="text-decoration: none;font-size: 14px;color:black;"href="http://localhost/project/Mba%20F/mba_books1.php">
        <div class="card" style="width:18rem;height:29rem;">
            <img style="height:280px;" src="images/book4.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-text"><b>MBA stands for Master of Business Administration.</b> <br>The value of the MBA,
                    however, is not limited strictly to the business world. An MBA can also be useful for those pursuing
                    a managerial career in the public sector, government, private industry, and other areas.</p>
            </div>
        </div>
    </a>
        <a style="text-decoration: none;font-size: 14px;color:black;"href="http://localhost/project/BCA/bca_books.php">
        <div class="card" style="width: 18rem;height:29rem;">
            <img style="height:280px;" src="images/book5.png" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-text"><b>BCA</b><br> full form Bachelor of Computer Application, is a 3-year UG course
                    that imparts
                    knowledge on the basics of computer application and software development.</p>
            </div>
        </div>
    </div>
</a>
    <a style="text-decoration: none;font-size: 14px;color:black;"href="http://localhost/project/B.Pharma%20Folder/pharma_books_page.php"> <div class="card1">
         <div class="card" style="width: 18rem;height:29rem; " >
            <img style="height:280px;" src="images/book10.jfif" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-text"><b>B Pharmacy or Bachelor of Pharmacy</b> <br> is a 4 years Undergraduate degree program that
                    deals with the intricacies of the pharmaceutical industry, starting from manufacturing medicines and
                    drugs to dispensing them across various medical stores, distributors and stockists.</p>
            </div>
        </div>
    </a>
        <div class="card" style="width: 18rem;height:29rem;" >
            <a style="text-decoration: none;font-size: 14px;color:black;"href="http://localhost/project/BHMCT%20folder/bhmct_books.php">
            <img style="height:280px;" src="images/book6.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-text"><b>BHMCT or Bachelor of Hotel Management and Catering Technology</b> <br> is a
                    4-year
                    professional undergraduate course, offered by many universities in India. The course is specially
                    designed for students willing to pursue a career in the hospitality industry.</p>
                </div>
            </div></a>
        <a style="text-decoration: none;font-size: 14px;color:black;"href="http://localhost/project/Engineering%20folder/engineer_books.php">
        <div class="card" style="width: 18rem;height:29rem;">
            <img style="height:280px;" src="images/book7.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-text"><b>Bachelor of Technology (BTech)</b><br> is a professional undergraduate
                    engineering degree
                    programme awarded to candidates after they complete four years of study in the field. Engineering is
                    one of the most popular courses in India and there are many institutes that offer the course to
                    aspiring students.</p>
                </div>
            </div>
        </div>
    </a>

    <div class="card1">
        <div class="card" style="width: 18rem;height:29rem;">
            <a style="text-decoration: none;font-size: 14px;color:black;"href="http://localhost/project/Bio-Tech/biotech_books_page.php">
            <img style="height:280px;" src="images/book9.jfif" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-text"><b>Biotechnology</b> <br>is technology that utilizes biological systems, living
                    organisms or
                    parts of this to develop or create different products. ... developed rapidly because of the new
                    possibility to make changes in the organisms' genetic material (DNA). Today, biotechnology covers
                    many different disciplines</p>
            </div>
        </div>
    </a>
        <div class="card" style="width: 18rem;height:29rem;">
            <a style="text-decoration: none;font-size: 14px;color:black;"href="http://localhost/project/BTTM/BTTM_books_page.php"> 
            <img style="height:280px;" src="images/book8.png" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-text"><b>Bachelor of Tourism and Travel Management</b><br>, also known as B.T.T.M. is an
                    undergraduate degree programme which is a sought after course for students willing to make a career
                    </p>
            </div>
        </div>
    </a>
        <!-- <div class="card" style="width: 18rem;">
            <img src="images/study1.jpeg" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-text"><b>Bachelor of Technology (BTech)</b><br> is a professional undergraduate
                    engineering degree
                    programme awarded to candidates after they complete four years of study in the field. Engineering is
                    one of the most popular courses in India and there are many institutes that offer the course to
                    aspiring students.</p>
            </div>
        </div> -->
    </div>
    <!-- footer -->
    <div class="container my-5" style="max-width:100%">

        <footer style="background-color:#4b5563;">
            <div class="container p-4">
                <div class="row">
                    <div class="col-lg-6 col-md-12 mb-4">
                        <h5 class="mb-3 " style="color:#93c5fd">footer content</h5>
                        <p style="color:#93c5fd">
                        PCTE Group of Institutes is a group of five colleges in two campuses in Ludhiana, Punjab in India. In 1999, the Punjab Management Education Trust established the Punjab College of Technical Education to provide management and IT education in the region.
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
