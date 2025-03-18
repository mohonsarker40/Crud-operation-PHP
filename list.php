<?php
include 'connect.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud Operation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
<div class="container mt-5">
    <div class="text-end">
        <button type="button" class="btn btn-primary mb-5">
            <a class="text-light text-decoration-none" href="create.php">Add New</a>
        </button>
    </div>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">SL</th>
            <th scope="col">Full Name</th>
            <th scope="col">Email</th>
            <th scope="col">Mobile</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>

    <?php

        $sql = "Select * from crud";
        $result = mysqli_query($con, $sql);
        if ($result) {
            while ($row = mysqli_fetch_assoc($result)) {
                $id = $row['id'];
                $name = $row['Fname'];
                $email = $row['email'];
                $mobile = $row['mobile'];
//                $password = $row['password'];
                echo '
                        <tr>
                          <th scope="row">' . $id . '</th>
                          <td>' . $name . '</td>
                          <td>' . $email . '</td>
                          <td>' . $mobile . '</td>
                          <td><a href="edit.php?id=' . $id . '" class="btn btn-sm btn-warning">Edit</a></td>
                          <td><a href="delete.php?id=' . $id . '" class="btn btn-sm btn-danger">Delete</a></td>
                        </tr>
                        ';
            }
        }
        ?>

        </tbody>
    </table>
</div>
</body>
</html>