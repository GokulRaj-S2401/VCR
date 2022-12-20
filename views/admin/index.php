

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> SSBVCR | ADMIN </title>
    <link rel="stylesheet" href="../../public/css/admin.css">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
</head>
<body>
    <header>
            <div class="brand">
                <button class="menu"> <ion-icon name="menu-outline"></ion-icon> </button>
                <a href="" class="brandName"> <ion-icon class="logo" name="laptop"></ion-icon> SSBVCR </a>
            </div>
            <nav>
                <ul>
                    <li> <a href="?menu=verify" class =" <?php echo $_GET['menu'] == "verify"?  "active": ''; ?>" > Verify </a> </li>
                    <li> <a href="?menu=classes" class =" <?php echo $_GET['menu'] == "classes"?  "active": ''; ?>" > Classes </a> </li>
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

                if($_GET['menu']=='verify'){
                    include('./verify.php');
                }

            ?>
        </section>
    </main>
    <script src="../../public/js/admin.js"></script>
</body>
</html>