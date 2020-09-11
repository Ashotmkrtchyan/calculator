<?php
session_start();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/Maine_Index.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <title>index</title>
</head>
<body>
<form action="/vendor/singin.php" method="post" class="login_form">
    <input type="text" name="Enter_login" placeholder="login">
    <button type="submit" id="log_button">GO</button>
    <a href="/view/registration.php">Registration</a>
    <p class="regist_p">
        <?php
        echo $_SESSION['message'];
        unset($_SESSION['message']);
        ?>
    </p>
</form>

</body>
</html>