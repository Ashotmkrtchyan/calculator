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
    <link rel="stylesheet" href="../css/Maine_Index.css">
    <title>Registration</title>
</head>
<body>
<form action="../vendor/singup.php" method="post" class="regist_form login_form">
    <input type="text" name="Enter_login" placeholder="Enter login">
    <input type="text" name="Confirm_login" placeholder="Confirm login">
    <button type="submit" id="log_button">Send</button>
    <a href="../index.php">Back to the main page</a>
    <p class="regist_p">
        <?php
           echo $_SESSION['message'];
           unset($_SESSION['message']);
        ?>
    </p>
</form>

</body>
</html>