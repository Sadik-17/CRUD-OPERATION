<?php
include 'connect.php';
// $conn = new mysqli('localhost','root','','crudoperation');

// if(!$conn){
//      die(mysqli_error($conn));
// }

if(isset($_POST["submit"])){
    $name=$_POST['Name'];
    $email=$_POST['Email'];
    $mobile= $_POST['Mobile'];
    $password=$_POST['Password'];

    $sql= "INSERT INTO student (name, email, mobile, password) VALUES('$name','$email',$mobile,'$password')";
    
    $result = mysqli_query($conn,$sql) or die("Query Unsuccessful");
    
   /*  $result= mysqli_query($conn,$sql); */
   
    if($result){
        echo "Data inserted Successfully";
    }else{
        die(mysqli_error($conn));
    }
    echo $name;
    echo $email;
    echo $mobile;
    echo $password;
}
?>

<!doctype html>
<html>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.rtl.min.css" >

    <title> Crud Operation </title>
  </head>
  <body>
    <div class="container my-5">
    <form method="POST">
  <div class="form-group">
    <label>Name</label>
    <input type="text" class="form-control" placeholder="Enter your Name" name="Name" autocomplete="off">
</div>
<div class="form-group">
    <label>Email</label>
    <input type="email" class="form-control" placeholder="Enter your Email" name="Email"autocomplete="off">
</div>
<div class="form-group">
    <label>Mobile</label>
    <input type="text" class="form-control" placeholder="Enter your Mobile Number" name="Mobile"autocomplete="off">
</div>
<div class="form-group">
    <label>Password</label>
    <input type="password" class="form-control" placeholder="Enter your Password" name="Password"autocomplete="off">
</div>
    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form> 

    </div>

  </body>
</html>

