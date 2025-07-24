<!DOCTYPE html>
<html>

<head>
    <title>Perfect Square</title>
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

        form input{
            width: 80%;
        }

        h2 {
            text-align: center;
        }
    </style>
</head>

<body>

    <h2>Perfect Square</h2>

    <form method="post">
        <label>Number : </label>
        <input type="number" min="0" name="no" placeholder="Enter Any Number...." required><br><br>

        <input type="submit" name="submit" value="Check">
    </form>


    <?php
    if (isset($_POST['submit'])) {
        $no = $_POST['no'];
       
        for($i=1; $i<$no; $i++){
            if(($i * $i) == $no){
                echo $no." is perfect square nubmer.....";
                break;
            }
        }
        if($i==$no){
             echo $no." is not perfect square nubmer.....";
        }
    }
    ?>
</body>

</html>