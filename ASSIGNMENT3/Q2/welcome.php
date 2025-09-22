<?php


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            padding-top: 50px;
        }

        h1 {
            font-size: 24px;
            margin-bottom: 20px;
        }

    </style>
</head>

<body>
    <h1 align="center">Welcome Mr/Miss. <?php echo $_GET['name']; ?> You are sucessfully registerd...!!</h1>
    <button><a href="login.php" class="login-button">Login</a></button>
</body>

</html>