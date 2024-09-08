<?php
 $con = new mysqli( 'localhost','root', 'root', 'crud_operation_php' );

 if($con){
    echo('connected successfully');
 }else{
    die(mysqli_error($con));
 }


?>