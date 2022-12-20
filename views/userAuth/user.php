<?php
    if(!isset($_COOKIE['user'])){
        header('Location:/VCR/index.php?menu=about');
    }
    $userData = json_decode($_COOKIE['user']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>  </title>
    <link rel="stylesheet" href="../../public/css/user.css">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
</head>
<body>
    <header>
        <div class="brand">
            <button class="menu"></button>
            <a href="" class="brandName"> <ion-icon class="logo" name="laptop"></ion-icon> SSBVCR </a>
        </div>
        <nav>
            <ul>
                <li> <a href="?menu=classes" class =" <?php echo $_GET['menu'] == "classes"?  "active": ''; ?>" > Classes </a> </li>
                <?php  
                $class = $_GET['menu'] == 'department' ? 'active':'';
                echo $userData->user_role == 'HOD' ? '<li><a href="?menu=department" class="'.$class.'"> department </a></li>' :'' ;
                ?>
                <li> <a href="?menu=notification" class =" <?php echo $_GET['menu'] == "notification"?  "active": ''; ?>" > Notification </a> </li>
            </ul>
        </nav>
        <div class="logout">
            <button id="logout" > Logout </button>
        </div>
    </header>
    <main>
        <section>
            <?php

                if (isset($_COOKIE['user'])) {
                  if($userData->user_role == 'NONE' ){
                    echo "<p class='text' > User is not verified </p>";
                  }
                  else{
                    if($_GET['menu']=='classes'){
                        include('./classRoom.php');
                    }
                }
                }
               

            ?>
        </section>
    </main>
    <script src="../../public/js/user.js"></script>
</body>
</html>