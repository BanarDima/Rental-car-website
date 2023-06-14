<!DOCTYPE html>
<html lang="uk-UA">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Jost" rel="stylesheet">
    <link rel="stylesheet" href="Renault_Logan.css">
    <title>Renault Logan</title>
</head>
<body>

    <?php
    session_start();
    $Name = $_SESSION['user'];
    $Con = mysqli_connect('localhost','root','','ecommerce');
    $rows = mysqli_query($Con ,"SELECT * FROM `tbluser` WHERE (BINARY UserName = '$Name' OR BINARY Email = '$Name') ");
    $stroka = mysqli_fetch_array($rows, MYSQLI_ASSOC);
    $username = $stroka['UserName'];

    ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.1/jquery.min.js"></script>

    <!--<script>
    $(function() {
    $('<a name="top"/>').insertBefore($('body').children().eq(0));
    window.location.hash = 'top';
    });
    </script>-->

    <div class="wrapper">
        <header class="header">
            <img src="image/Beru__3_-removebg-preview 1.png" class="icon">
            <a href="../../Main/Main.php"><img src="image/home-solid-240 1.png" class="home_icon"></a> 
        

            <?php
                if (isset($_SESSION['user'])) {
                    $_SESSION['user']=$username;
            ?>    
                    <div style="position: absolute; width: 300px; left: 930px; top: 37px; text-decoration: none; font-family: 'Jost'; font-style: normal; font-weight: 400; font-size: 24px; line-height: 35px; text-align: right; color: black;"><?= $_SESSION['user'];?></div>
            <?php
                     echo '<div class="signinbutton">
                    <a href="../../user/form/logout.php" class="signout">Вийти</a>
                    </div>';
 
                }
                else {
                    echo '<div class="signupbutton">
                    <a href="../../user/form/registration.php" class="signup">Реєстрація</a>
                    </div>';
                    echo '<div class="signinbutton">
                    <a href="../../user/form/login.php" class="signin">Авторизація</a>
                    </div>';

                }
            ?>


        </header>
    

        <main class="container">

        </main>

        <footer class="footer">
            <a href="https://www.facebook.com/"><img src="../main/image/facebook-logo-50 (1).png" class="footerfacebookicon"></a>
            <a href="https://www.instagram.com/"><img src="../main/image/instagram-logo-50 (1).png" class="footerinstagramicon"></a>
            <a href="https://twitter.com"><img src="../main/image/twitter-logo-50 (1).png" class="footertwittericon"></a>
        </footer>

    </div> 



</body>
</html>