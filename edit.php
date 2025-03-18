<?php
include 'connect.php';

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $sql = "SELECT * FROM crud WHERE id = $id";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($result);

    $name = $row['Fname'];
    $email = $row['email'];
    $mobile = $row['mobile'];
    $password = $row['password'];
}

if(isset($_POST['submit'])) {
    $id = $_POST['id'];
    $name = $_POST['Fname'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];

    $sql = "UPDATE crud SET Fname='$name', email='$email', mobile='$mobile', password='$password' WHERE id=$id";
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
    <title>Edit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h4 class="text-center">User Edit/Update</h4>
    <div class="text-end">
        <button type="button" class="btn btn-primary mb-5">
            <a class="text-light text-decoration-none" href="list.php"> Back</a>
        </button>
    </div>
    <form class="px-5" method="post">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <div class="mb-3 mt-3">
            <label for="name" class="form-label">Name:</label>
            <input value="<?php echo $name; ?>" type="text" name="Fname" class="form-control" id="name" placeholder="Enter name" required>
        </div>
        <div class="mb-3 mt-3">
            <label for="email" class="form-label">Email:</label>
            <input value="<?php echo $email; ?>" type="email" name="email" class="form-control" id="email"
                   placeholder="Enter email">
        </div>
        <div class="mb-3 mt-3">
            <label for="mobile" class="form-label">Mobile:</label>
            <input value="<?php echo $mobile; ?>" type="number" name="mobile" class="form-control" id="mobile"
                   placeholder="Enter Mobile" required>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password:</label>
            <input value="<?php echo $password ?>" name="password" class="form-control" id="password"
                   placeholder="Enter password" required>
        </div>
        <div class="form-check mb-3">
            <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="remember"> Remember me
            </label>
        </div>
        <button type="submit" name="submit" class="btn btn-primary col-12">Update
            <a href="list.php"></a>
        </button>

    </form>

</div>
</body>
</html>