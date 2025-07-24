<!DOCTYPE html>
<html>

<head>
    <title>reverce number and string</title>
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

    <h2>reverce number and string</h2>

    <form method="post">
        <label>Number : </label>
        <input type="number" min="1" name="no" placeholder="Enter Any Number...." required><br><br>
        <label>String : </label>
        <input type="text" name="name" placeholder="Enter Any String...." required><br><br>

        <input type="submit" name="submit" value="Check">
    </form>


    <?php
    if (isset($_POST['submit'])) {
        $no = $_POST['no'];
        $name = $_POST['name'];
        
        $rev_no = strrev((String)$no);

        echo "Reverse no = " . $rev_no;
        echo "<br>";

        $rev_str = strrev($name);

        echo "<br> reverse string is $rev_str";


    }
    ?>
</body>

</html>