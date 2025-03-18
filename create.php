<?php
include 'connect.php';

if(isset($_POST['submit'])){
    $name = $_POST['Fname'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];

    $sql = "INSERT INTO crud (Fname, email, mobile, password) values('$name', '$email', '$mobile', '$password')";

    $result = mysqli_query($con, $sql);
    if($result){
        header('location: list.php');
        exit;
    }else{
        echo "Error" . (mysqli_error($con));
    }

}

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h4 class="text-center">User Create</h4>
    <div class="text-end">
        <button type="button" class="btn btn-primary mb-5">
            <a class="text-light text-decoration-none" href="list.php">User List</a>
        </button>
    </div>
    <form class="px-5" method="post">
   <div class="mb-3 mt-3">
    <label for="name" class="form-label">Name:</label>
    <input type="text" name="Fname" class="form-control" id="name" placeholder="Enter name" required>
  </div>
  <div class="mb-3 mt-3">
    <label for="email" class="form-label">Email:</label>
    <input type="email" name="email" class="form-control" id="email" placeholder="Enter email" required>
  </div>
  <div class="mb-3 mt-3">
    <label for="mobile" class="form-label">Mobile:</label>
    <input type="number" name="mobile" class="form-control" id="mobile" placeholder="Enter Mobile" required>
  </div>
  <div class="mb-3">
    <label for="password" class="form-label">Password:</label>
    <input type="password" name="password" class="form-control" id="password" placeholder="Enter password" required>
  </div>
  <div class="form-check mb-3">
    <label class="form-check-label">
      <input class="form-check-input" type="checkbox" name="remember"> Remember me
    </label>
  </div>
  <button type="submit" name="submit" class="btn btn-primary col-12">Submit
      <a href="list.php"></a>
  </button>

</form>

</div>
</body>
</html>