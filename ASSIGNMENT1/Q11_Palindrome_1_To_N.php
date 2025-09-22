<!DOCTYPE html>
<html>

<head>
    <title>palindrome between 1 to n</title>
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

    <h2>palindrome between 1 to n</h2>

    <form method="post">
        <label>Number : </label>
        <input type="number" min="1" name="no" placeholder="Enter Any Number...." required><br><br>

        <input type="submit" name="submit" value="Check">
    </form>


    <?php
    if (isset($_POST['submit'])) {
        $no = $_POST['no'];
        $total = 0;
        for ($i = 1; $i < $no; $i++) {
            $value = 0;
            $j = $i;
            while ($j > 0) {
                $reminder = $j % 10;
                $value = $value * 10 + $reminder;
                $j = (int) ($j / 10);
            }

            if ($value == $i) {
                echo "$i<br>";
                $total++;
            }
        }

        echo "<br> total $total palindrome number between 1 to $no";

    }
    ?>
</body>

</html>