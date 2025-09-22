<!DOCTYPE html>
<html>

<head>
    <title>greter</title>
    <style>
        body {
            font-family: Arial;
            background-color: #f9f9f9;
            padding: 30px;
        }

        form{
            margin: auto;
            width: 25%;
            padding: 20px;
            border: 1px solid black;
            border-collapse: collapse;
            background: white;
            box-shadow: 2px 2px 10px #aaa;
            
            text-align: center;
        }

        form input{
            width: 80%;
        }

        h2 {
            text-align: center;
        }
    </style>
</head>

<body>

    <h2>greter</h2>

    <form method="post">
        <label>no1 : </label>
        <input type="number" min="0" name="no1" placeholder="Enter First Number" required><br><br>
        <label>no2 : </label>
        <input type="number" min="0" name="no2" placeholder="Enter Second Number" required><br><br>
        <label>no3 : </label>
        <input type="number" min="0" name="no3" placeholder="Enter Third Number" required><br><br>


        <input type="submit" name="submit" value="Check">
    </form>

    <?php
       $no1;
       $no2;
       $no3;
    ?>

    <?php
    if (isset($_POST['submit'])) {
        $no1 = $_POST['no1'];
        $no2 = $_POST['no2'];
        $no3 = $_POST['no3'];
       
        echo ($no1 > $no2 ? ($no1 > $no3 ? $no1." is greter...." : $no3." is greter.....") : ($no2 > $no3 ? $no2." is greter..." : $no3." is greter..."));
    }
    ?>
</body>

</html>