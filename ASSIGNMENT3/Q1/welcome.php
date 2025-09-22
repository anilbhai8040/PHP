<?php
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    </style>
</head>

<body>
    <h1>Welcome Mr./Miss/Mrs <?php echo $_GET['name']; ?></h1>

    <p>Your Query <?php echo $_GET['message']; ?>successfully send on your email <?php echo $_GET['email']; ?>and we
        will contact you on <?php echo $_GET['mobile']; ?></p>

</body>

</html>