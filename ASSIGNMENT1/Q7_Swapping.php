<!DOCTYPE html>
<html>

<head>
    <title>no swap</title>
    <style>
        body {
            font-family: Arial;
            background-color: #f9f9f9;
            padding: 30px;
        }

        form{
            margin: auto;
            width: 35%;
            padding: 20px;
            border: 1px solid black;
            border-collapse: collapse;
            background: white;
            box-shadow: 2px 2px 10px #aaa;
            
            text-align: center;
        }

        form input,select{
            width: 80%;
        }

        h2 {
            text-align: center;
        }
    </style>
</head>

<body>

    <h2>no swap</h2>

    <form method="post">
        <label>Number 1 : </label>
        <input type="number" min="0" name="no1" placeholder="Enter First Number...." required><br><br>
        <label>Number 2 : </label>
        <input type="number" min="0" name="no2" placeholder="Enter Second Number...." required><br><br>

        <input type="submit" name="submit" value="Check">
    </form>


    <?php
    if (isset($_POST['submit'])) {
        $no1 = $_POST['no1'];
        $no2 = $_POST['no2'];
       
        $no1 = $no1 + $no2;
        $no2 = $no1 - $no2;
        $no1 = $no1 - $no2;

        echo "no1 = ".$no1;
        echo "<br>no2 = ".$no2;
    }
    ?>
</body>

</html>