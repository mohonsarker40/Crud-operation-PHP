<?php
 $con = new mysqli( 'localhost','root', 'root', 'crud_operation_php' );

 if(!$con){
    die(mysqli_error($con));
 }
?>