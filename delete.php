<?php
include 'connect.php';

    $id = $_GET['id'];
    $sql = "DELETE FROM crud WHERE id = $id";
    $result = mysqli_query($con, $sql);

    if($result){
        header('location: list.php');
        exit;
    }else{
        echo "Delete failed" . (mysqli_error($con));
}
?>