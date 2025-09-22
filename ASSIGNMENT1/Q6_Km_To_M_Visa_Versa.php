<!DOCTYPE html>
<html>

<head>
    <title>distance convater</title>
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

    <h2>distance convater</h2>

    <form method="post">
        <label>Distance : </label>
        <input type="number" min="0" name="value" placeholder="Enter distance in number...." required><br><br>
        <label>Unit : </label>
        <select name="unit" required>
            <option selected>kilometer</option>
            <option>meter</option>
        </select><br><br>

        <input type="submit" name="submit" value="Check">
    </form>


    <?php
    if (isset($_POST['submit'])) {
        $value = $_POST['value'];
        $unit = $_POST['unit'];
       
        
        if($unit == "kilometer"){
             echo $value."".$unit." =  ".($value*1000)." meter.....";
        }
        else{
             echo $value."".$unit." =  ".($value/1000)." kilometer.....";
        }
    }
    ?>
</body>

</html>