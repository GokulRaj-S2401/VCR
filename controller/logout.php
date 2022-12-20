<?php

if(isset($_COOKIE['user'])){
    
    if(isset($_POST['islogout'])){
        setcookie('user', '', time() - 3600, '/');
        echo json_encode(["status"=>200]);
    }

}
else{
    echo json_encode(["status"=>"bad request"]);
}

?>