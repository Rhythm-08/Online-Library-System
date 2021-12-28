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
    $sql = "SELECT * FROM `course`";
    $result = mysqli_query($conn, $sql);
    $result=mysqli_query($conn,$sql);
    while($rows = mysqli_fetch_array($result)){
//echo $rows['course_id'];
if($rows['course_id']==1){
    // echo "hello samridh";
        }
    }
 

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
              <li style="font-size:13px"><a href="http://localhost/project/Library%20Admin/dashboard.php">Student Book Record<span class="sub_icon glyphicon "></span></a></li>
              
                    <li style="font-size:13px"><a href="http://localhost/project/Library%20Admin/dashboard.php">Add Books<span class="sub_icon "></span></a></li>
                    <!-- <li><a>link2<span class="sub_icon glyphicon glyphicon-link"></span></a></li> -->
               
              <!-- <li><a>Consulta<span class="sub_icon glyphicon glyphicon-link"></span></a></li>
              <li><a>Relatorio<span class="sub_icon glyphicon glyphicon-link"></span></a></li> -->
           
          </div>
              
          <!-- Page content -->
          <div id="page-content-wrapper">
            <!-- Keep all page content within the page-content inset div! -->
            <div class="page-content inset">
                <div class="row">
                  <div class="col-md-12">
                  <p class="well lead">Admin Panel</p>
                  <div class="container">
                      <marquee behavior="" direction=""><h1>Add Books</h1></marquee>
                </div>
                 
                </div>
              </div>
            </div>
        </div>
        <div class="panel-body">
            <form role="form" method="post">
                <div class="form-group">
                <label> Course<span style="color:red;">*</span></label>
                <select class="form-control" name="category" required="required">
                <option value=""> Select Semester</option>
                
                <option value="">BBA</option>
                <option value="">BCA</option>
                <option value="">MBA</option>
                <option value="">BTech</option>
                <option value="">BTTM</option>
                <option value="">BPharma</option>
                <option value="">BHMCT</option>
                </select>

                   
                    <label>Book ID<span style="color:red;">*</span></label>
                    <input class="form-control" type="text" name="bookname" autocomplete="off"  required />
                    </div>

            <div class="form-group">
            <label>Book Name<span style="color:red;">*</span></label>
            <input class="form-control" type="text" name="bookname" autocomplete="off"  required />
            </div>
            <div class="form-group">
                <label>Author Name<span style="color:red;">*</span></label>
                <input class="form-control" type="text" name="bookname" autocomplete="off"  required />
                </div>
                <div class="form-group">
                    <label>Description<span style="color:red;">*</span></label>
                    <input class="form-control" type="text" name="bookname" autocomplete="off"  required />
                </div>
               


            <div class="form-group">
                <label> Semester<span style="color:red;">*</span></label>
                <select class="form-control" name="category" required="required">
                <option value=""> Select Semester</option>
                
                <option value="">1</option>
                <option value="">2</option>
                <option value="">3</option>
                <option value="">4</option>
                <option value="">5</option>
                <option value="">6</option>
                <option value="">7</option>
                <option value="">8</option>
                </select>
                </div>
             
             <div class="form-group">
             <label>No of Copies<span style="color:red;">*</span></label>
             <input class="form-control" type="text" name="copies" autocomplete="off"   required="required" />
             </div>
             <div class="form-group"  >
              
                <label>Upload Image<span style="color:red;">*</span></label>
                <input type="file" name="uploadfile">

         </div>
             
            <button type="submit" name="add" class="btn btn-info">Add </button>
            
                                                </form>
                                        </div>



</body>
<script src="dashboard1.js"></script>
</html>