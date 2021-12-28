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

  
$q = $_GET['q'];
               
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
<link rel="stylesheet" href="../all_subject_stylesheet1.css">
<link href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@500&display=swap" rel="stylesheet">

<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css/style.css">
</head>
<body>

<!-- <section class="ftco-section">
		<div class="container">
			
		</div>
		
		<div class="container-fluid px-md-5">
			<div class="row justify-content-between">
				<div class="col-md-8 order-md-last">
					<div class="row">
						<div class="col-md-6 text-center">
						</div>
						<div class="col-md-6 d-md-flex justify-content-end mb-md-0 mb-3">
							<form action="#" class="searchform order-lg-last">
			          <div class="form-group d-flex">
			            <input type="text" class="form-control pl-3" placeholder="Search">
			            <button type="submit" placeholder="" class="form-control search"><span class="fa fa-search"></span></button>
			          </div>
			        </form>
						</div>
					</div>
				</div>
				<div class="col-md-4 d-flex">
					<div class="social-media">
		    		<p class="mb-0 d-flex">
		    			<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"><i class="sr-only">Facebook</i></span></a>
		    			<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"><i class="sr-only">Twitter</i></span></a>
		    			<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"><i class="sr-only">Instagram</i></span></a>
		    			<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-dribbble"><i class="sr-only">Dribbble</i></span></a>
		    		</p>
	        </div>
				</div>
			</div>
		</div>
		<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container-fluid">
	    
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="fa fa-bars"></span> Menu
	      </button>
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav m-auto">
	        	<li class="nav-item active"><a href="#" class="nav-link">Home</a></li>
	        	<li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Page</a>
              <div class="dropdown-menu" aria-labelledby="dropdown04">
              	<a class="dropdown-item" href="#">Page 1</a>
                <a class="dropdown-item" href="#">Page 2</a>
                <a class="dropdown-item" href="#">Page 3</a>
                <a class="dropdown-item" href="#">Page 4</a>
              </div>
            </li>
	        	<li class="nav-item"><a href="#" class="nav-link">Work</a></li>
	        	<li class="nav-item"><a href="#" class="nav-link">Blog</a></li>
	          <li class="nav-item"><a href="#" class="nav-link">Contact</a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
   END nav 

	</section>

	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script> -->
   
  
  <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
            <a href="http://localhost/project/Home_page.php"class="navbar-brand">PCTE <span style="color:#93c5fd">Library</span></a>
            <form class="d-flex" action=''>
                <input class="form-control me-2" id='tejinder' type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" onclick='searchit()' type="button">Search</button>
            </form>
        </div>
    </nav>

    <script>
        function searchit() 
        {
          var tj = document.getElementById('tejinder').value;
          window.location.replace("searchresult.php?q="+tj);
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

<!-- strip -->

<div class="strip" style="position: fixed; z-index:100;padding-bottom:2rem;margin-bottom:15rem;">
    <div style="font-size:24px; color:#18181b;  font-family: 'Baloo 2', cursive;" class="subject-name">
      <b>  BHMCT</b>
    </div>
    <div class="main-drop">
    <form action="bba_books.php" style='display:none' method="GET">
    <div class="dropdown" >
        <a style="background-color:#efe6e6;color:black" class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
         Select Semester
        </a>
     
        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
          <li><a style="background-color:#efe6e6;color:black" class="dropdown-item" href="#">Select</a>
        <?php 
        
        ?>
            <input class="input1"type="number" name="semester" id="" value="1" min="0" max="8"><br>
            <input type="submit" name="submit" value="Submit">
        </li>
          
         
         
        </ul>
      </div>
    </form>
    <div class="dropdown" style='display:none'>
        <!-- <a style="background-color:#efe6e6;color:black" class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
          Select Subject Name
        </a>
      
        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
          <li><a class="dropdown-item" href="#">English</a></li>
          <li><a class="dropdown-item" href="#">Basic Accounting</a></li>
          <li><a class="dropdown-item" href="#">Human Values</a></li>
          <li><a class="dropdown-item" href="#">Mentoring & Professional</a></li>
          <li><a class="dropdown-item" href="#">Sociology</a></li>
          
         
         
        </ul> -->
    </div>
      </div>
</div>
<h1><br><br></h1>

<!-- books information started -->
<?php 
$semester=0;

if (isset($_GET['submit'])){
  $semester=$_GET['semester'];
$sql="SELECT * FROM `pharma` where semester=$semester";
  
$result=mysqli_query($conn,$sql);
while($rows = mysqli_fetch_array($result)){
  

?>

<div class="card mb-1" style="max-width: 1050px; max-height: fit-content;  ">
    <div class="row g-0">
        <!-- <h1>1.</h1> -->
      <div class="col-md-2" >
         
        <img src="<?php echo $rows['images'];?>" class="img-fluid rounded-start" alt="...">
      </div>
      <div class="col-md-8">
     
        <div class="card-body">
          <h5 class="card-title"><?php echo $rows['name'];?></h5>
          <p class="card-text"><small class="">Author : <?php echo $rows['author'];?></small></p>
          <p class="card-text-1"><?php echo $rows['desription'];?></p>
          <p class="card-text"><small class="">Semester: <?php echo $rows['semester'];?></small></p>
          <a href="bpharmabookdetail.php?bookid=<?php echo $rows['id'];?>">Know More</a>
          
        </div>
      </div>
    </div>
  </div>
  <?php  
               }
              }



else if($semester==0){
  
  // $semester=$_GET['semester'];
$sql="SELECT * FROM `pharma` where `name` like '%$q%'";
  
$result=mysqli_query($conn,$sql);
while($rows = mysqli_fetch_array($result)){
  

?>

<div class="card mb-1" style="max-width: 1050px; max-height: fit-content; ">
    <div class="row g-0">
        <!-- <h1>1.</h1> -->
      <div class="col-md-2">
         
        <img src="<?php echo $rows['images'];?>" class="img-fluid rounded-start" alt="...">
      </div>
      <div class="col-md-8">
     
        <div class="card-body">
          <h5 class="card-title"><?php echo $rows['name'];?></h5>
          <p class="card-text"><small class="">Author : <?php echo $rows['author'];?></small></p>
          <p class="card-text-1"><?php echo $rows['description'];?></p>
          <p class="card-text"><small class="">Semester: <?php echo $rows['semester'];?></small></p>
          <a href="bparmabookdetail.php?bookid=<?php echo $rows['id'];?>">Know More</a>
          
        </div>
      </div>
    </div>
  </div>
  <?php  
               }
              }
?>
}
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
    <div class="text-center p-3"  style="background-color: rgba(0, 0, 0, 0.2);color:#93c5fd">
      © 2021 Copyright:
      <a class="" style="color:  #93c5fd;" href="https://mdbootstrap.com/">Designed By Rhythm and Samridh</a>
    </div>
    <!-- Copyright -->
  </footer>
  
</div>
  

</body>
</html>


