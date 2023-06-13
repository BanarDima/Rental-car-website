<!DOCTYPE html>
<html lang="uk-UA">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Jost" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <title>Реєстрація</title>
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-6 mt-5 m-auto bg-white shadow font-monospace border border-info">
            <p class="text-warning text-center fs-3 fw-bold my-3">User Register</p>
            <form method="POST" action="insert.php">
                <div class="mb-3">
                    <label for="name">Ім'я користувача:</label>
                    <input type="text" name="name" id="name" placeholder="Введіть ім'я користувача" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="email">Електронна пошта:</label>
                    <input type="email" name="email" placeholder="Введіть свою електронну пошту" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="number">Телефонний номер:</label>
                    <input type="text" name="number" placeholder="Введіть свій номер телефону" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="password">Пароль:</label>
                    <input type="password" name="password" placeholder="Введіть пароль" class="form-control">
                </div>
                <div class="mb-3">
                    <button type="submit" name="submit" class="w-100 bg-warning fs-4 text-white">Register</button>
                </div>
                <div class="mb-3">
                    <button class="w-100 bg-danger fs-4 text-warning"><a href="login.php" class="text-decoration-none text-white">Already have an account</a></button>
                </div>
            </form>
        </div>
    </div>
</div>

    
<?php



?>


</body>
</html>