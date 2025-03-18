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
    <h4 class="text-center">User List(CRUD)</h4>
    <div class="text-end">
        <button type="button" class="btn btn-primary mb-5">
            <a class="text-light text-decoration-none" href="create.php">Add New</a>
        </button>
    </div>
    <table class="table table-bordered">
        <thead>
        <tr class="text-center">
            <th scope="col">SL</th>
            <th scope="col">Full Name</th>
            <th scope="col">Email</th>
            <th scope="col">Mobile</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>

    <?php

        $sql = "SELECT * FROM crud ORDER BY id DESC";
        $result = mysqli_query($con, $sql);
        if ($result) {
            while ($row = mysqli_fetch_assoc($result)) {
                $id = $row['id'];
                $name = $row['Fname'];
                $email = $row['email'];
                $mobile = $row['mobile'];
                echo '
                        <tr>
                          <th scope="row">' . $id . '</th>
                          <td>' . $name . '</td>
                          <td>' . $email . '</td>
                          <td>' . $mobile . '</td>
                          <td class="text-center">
                                <a href="edit.php?id=' . $id . '" class="btn btn-sm btn-warning">Edit</a>
                                <a href="delete.php?id=' . $id . '" class="btn btn-sm btn-danger" onclick="return confirm(\'Delete Confirm\')">Delete</a>
                          </td>
                         
                        </tr>
                        ';
            }
        }
        ?>

        </tbody>
    </table>
</div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</html>