<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    
<div class="container my-4">

<form method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" name="insert" class="btn btn-primary">Submit</button>
</form>

</div>








<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "user";

$conn = new mysqli ($servername,$username,$password,$database);

if($conn->connect_error){
    die("connection lost" . $conn->connect_error );
}

$email =$_REQUEST['email'];
$password =$_REQUEST['password'];
$insert = "Insert into employee (email,password) VALUES ($email,$password)";

if(mysqli_query($conn,$insert)){
    echo "New record saved";
}
else{
    echo "Error :" . mysqli_error($conn);
}


mysqli_close($conn);




?>




</body>
</html>