<?php

// include("isAdmin.php");
include('../model/databaseConnection.php');
header("Content-Type: application/json; charset=UTF-8");

if(isset($_POST['verify'])){
    $data = json_decode($_POST['data'],true);
    $user_id = $data['data']['user_id'];
    $user_role = $data['data']['user_role'];
    $user_department = $data['data']['user_department'];

    $qry = "UPDATE users SET user_department='$user_department',user_role='$user_role' WHERE user_id='$user_id'";
    if($connection->query($qry)){
       echo json_encode(["status"=>200]);
    }
    else{
        echo json_encode(["status"=>100]);
    }

}
else{
    echo json_encode(["status"=>300]);
}


?>