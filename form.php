<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="form.php" method="POST" enctype="multipart/form-data">
        <input type="number" name="id" id="" placeholder="id"><br>
        <input type="number" name="course_id" id="" placeholder="course id"><br>
        <input type="text" name="name" id="" placeholder="name"><br>
        <input type="text" name="description" placeholder="description"><br>
        <input type="number" name="pdf" id="" placeholder="pdf"><br>
        <input type="file" name="uploadfile" id="" placeholder=""><br>
        <input type="number" name="semester" id="" placeholder="semester"><br>
        <input type="text" name="author" id="" placeholder="author">
        <input type="submit" class="btn" value="Submit" name="upload">

    </form>
</body>
</html>
<?php
error_reporting(0);
?>
<?php
  $msg = "";
 
  // If upload button is clicked ...
  if (isset($_POST['upload'])) {

    $filename = $_FILES["uploadfile"]["name"];
    $tempname = $_FILES["uploadfile"]["tmp_name"];
    // $id=$_POST['id'];
    $name=$_POST['id'];  
    $age=$_POST['course_id'];
    $gender=$_POST['name'];
    $workexp=$_POST['description'];
    $timings=$_POST['pdf'];
    $achievements=$_POST['semester'];
    $qualification=$_POST['author'];

    $folder = "project/BBA Folder/BBA images/Sem1".$filename;
        move_uploaded_file($tempname,$folder);

              
    $db = mysqli_connect("localhost", "root", "", "library");
 
    // Get all the submitted data from the form
    $sql = "INSERT INTO `bttm` (`id`, `course_id`, `name`, `description`, `pdf`, `images`, `semester`, `author`) VALUES ('', '$age', ' $gender', ' $workexp', '$timings', '$filename', ' $achievements', '$qualification')";

    // Execute query
    $result=mysqli_query($db, $sql);

  }
?>