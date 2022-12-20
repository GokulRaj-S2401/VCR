<?php

if(isset($_COOKIE['user'])){
    header('Location:./views/userAuth/user.php?menu=classes');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SSB | Virtual Class Room </title>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <link rel="stylesheet" href="./public/css/main.css">
</head>
<body>
    <header>
        <div class="brand">
            <a href="" class="brandName"> <ion-icon class="logo" name="laptop"></ion-icon> SSBVCR </a>
            <button class="menu" > <ion-icon name="menu-outline"></ion-icon> </button>
        </div>
        <nav>
            <ul>
                <li> <a href="/"  class=  > SSB site </a> </li>
                <li> <a href="?menu=announce" class =" <?php echo $_GET['menu'] == "announce"?  "active": ''; ?>" > Announcement </a> </li>
                <li> <a href="?menu=about" class =" <?php echo $_GET['menu'] == "about"?  "active": ''; ?>" > About </a> </li>
                <li> <a href="?menu=faq" class =" <?php echo $_GET['menu'] == "faq"?  "active": ''; ?>" > FAQ </a> </li>
            </ul>
        </nav>
        <div class="btnGrp">
            <button> Let's Talk </button>
        </div>
    </header>
    <section>
       <?php
            if(isset($_GET['menu'])){
                if($_GET['menu'] == 'about' ){
                    include('./views/mainPage/about.php');
                }
                else if($_GET['menu'] == 'faq' ){
                    include('./views/mainPage/faq.php');
                }
                else if($_GET['menu'] == 'announce' ){
                    include('./views/mainPage/announcement.php');
                }
                else if($_GET['menu'] == 'signin' ){
                    include('./views/mainPage/signin.php');
                }
                else if($_GET['menu'] == 'signup' ){
                    include('./views/mainPage/signUp.php');
                } 
                else if($_GET['menu'] == 'asignup' ){
                    include('./views/mainPage/adminSignUp.php');
                }
                else if($_GET['menu'] == 'asignin' ){
                    include('./views/mainPage/adminSignIn.php');
                }
            }
            
       ?>
    </section>
    <div class="overlay"></div>
    <script src="./public/js/main.js"></script>
    <script src="./public/js/auth.js"></script>
</body>
</html>