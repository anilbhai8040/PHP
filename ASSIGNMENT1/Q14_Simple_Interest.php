<!DOCTYPE html>
<html>

<head>
    <title>Simple interest</title>
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

    <h2>Simple interest</h2>

    <form method="post">
        <label>Price : </label>
        <input type="number" min="1" name="price" placeholder="Enter Price...." required><br><br>
        <label>Rate : </label>
        <input type="number" min="1" name="rate" placeholder="Enter Rate...." required><br><br>
        <label>Year : </label>
        <input type="number" min="1" name="year" placeholder="Enter Year...." required><br><br>

        <input type="submit" name="submit" value="Check">
    </form>


    <?php
    if (isset($_POST['submit'])) {
        $price = $_POST['price'];
        $rate = $_POST['rate'];
        $year = $_POST['year'];
        $intrest = ($price * $rate * $year) / 100;

        echo "<br> Simple intertest is ".$intrest;
    }
    ?>
</body>

</html>