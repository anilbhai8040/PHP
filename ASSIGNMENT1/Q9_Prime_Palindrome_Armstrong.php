<!DOCTYPE html>
<html>

<head>
    <title>palindrome armstong prime</title>
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

    <h2>palindrome armstong prime</h2>

    <form method="post">
        <label>Number : </label>
        <input type="number" min="1" name="no1" placeholder="Enter Any Number...." required><br><br>

        <input type="submit" name="submit" value="Check">
    </form>


    <?php
    if (isset($_POST['submit'])) {
        $no1 = $_POST['no1'];
        $no = $no1;
        $value = 0;
        while ($no1 > 0) {
            $reminder = $no1 % 10;
            $value = $value * 10 + $reminder;
            $no1 = (int) ($no1 / 10);
        }

        echo $value == $no ? "$no is palindrome number...." : "$no is not palindrome number....";
        echo "<br>";

        $no1 = $no;
        $sum = 0;
        $digits = str_split($no1); // seperate digit as array
        $n = count($digits);
        foreach ($digits as $d) {
            $sum += pow($d, $n);
        }

        echo $sum == $no ? "$no is armstrong number...." : "$no is not armstrong number...";
        echo "<br>";
        $value = 0;

        for ($i = 1; $i <= $no; $i++) {
            if ($no % $i == 0) {
                $value++;
            }
        }

        echo $value == 2 ? "$no is prime number..." : ($no == 1 ? $no . " is not consider in prime and not prime" : $no . "is not prime number...");
    }
    ?>
</body>

</html>