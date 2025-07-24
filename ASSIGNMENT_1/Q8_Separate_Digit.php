<!DOCTYPE html>
<html>

<head>
    <title>saparate digit</title>
    <style>
        body {
            font-family: Arial;
            background-color: #f9f9f9;
            padding: 30px;
        }

        form {
            margin: auto;
            width: 35%;
            padding: 20px;
            border: 1px solid black;
            border-collapse: collapse;
            background: white;
            box-shadow: 2px 2px 10px #aaa;

            text-align: center;
        }

        form input,
        select {
            width: 80%;
        }

        h2 {
            text-align: center;
        }
    </style>
</head>

<body>

    <h2>saparate digit</h2>

    <form method="post">
        <label>Number : </label>
        <input type="number" min="10" max="99" name="no1" placeholder="Enter Any Number...." required><br><br>

        <input type="submit" name="submit" value="Check">
    </form>


    <?php
    if (isset($_POST['submit'])) {
        $no1 = $_POST['no1'];
        
        echo (int)($no1 / 10) . " " . ($no1 % 10);
    }
    ?>
</body>

</html>