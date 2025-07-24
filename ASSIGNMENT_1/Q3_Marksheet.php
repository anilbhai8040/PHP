<!DOCTYPE html>
<html>

<head>
    <title>Marksheet</title>
    <style>
        body {
            font-family: Arial;
            background-color: #f9f9f9;
            padding: 30px;
        }

        form,
        table {
            margin: auto;
            width: 50%;
            padding: 20px;
            border: 1px solid black;
            border-collapse: collapse;
            background: white;
            box-shadow: 2px 2px 10px #aaa;
        }

        form input{
            width: 90%;
        }

        table {
            margin-top: 30px;
        }

        th,
        td {
            padding: 8px;
            border: 1px solid #000;
            text-align: center;
        }

        h2 {
            text-align: center;
        }
    </style>
</head>

<body>

    <h2>marksheet</h2>

    <form method="post">
        <label>sub1 : </label>
        <input type="number" min="0" max="35" name="sub1" placeholder="Enter mark out of 35" required><br><br>
        <label>sub2 : </label>
        <input type="number" min="0" max="35" name="sub2" placeholder="Enter mark out of 35" required><br><br>
        <label>sub3 : </label>
        <input type="number" min="0" max="35" name="sub3" placeholder="Enter mark out of 35" required><br><br>
        <label>sub4 : </label>
        <input type="number" min="0" max="35" name="sub4" placeholder="Enter mark out of 35" required><br><br>
        <label>sub5 : </label>
        <input type="number" min="0" max="35" name="sub5" placeholder="Enter mark out of 35 " required><br><br>


        <input type="submit" name="submit" value="Submit">
    </form>

    <?php
       $sub1;
       $sub2;
       $sub3;
       $sub4;
       $sub5;
       $total;
       $grade;
       $percentage;
       $result = "FAIL";
    ?>

    <?php
    if (isset($_POST['submit'])) {
        $sub1 = $_POST['sub1'];
        $sub2 = $_POST['sub2'];
        $sub3 = $_POST['sub3'];
        $sub4 = $_POST['sub4'];
        $sub5 = $_POST['sub5'];
         
        if($sub1>12 && $sub2>12 && $sub3>12 && $sub4>12 && $sub5>12){
             $result = "PASS";
        }
        $total = $sub1 + $sub2 + $sub3 + $sub4 + $sub5;

        if($result == "PASS"){
            $percentage = ($total * 100) / (35*5);
            if($percentage > 90){
                $grade = "A+";
            }
            else if($percentage > 80){
                $grade = "A";
            }
            elseif($percentage > 70){
                $grade = "B+";
            }
            else if($percentage > 60){
                $grade = "B";
            }
            else if($percentage > 50){
                $grade = "C";
            }
            else if($percentage > 40){
                $grade = "D";
            }
            else{
                $grade = "E";
            }
        }
    }
    ?>
    <?php if (!empty($sub1)) { ?>
        <table>
            <tr>
                <th>SUBJECT</th>
                <th>MARKS</th>
            </tr>
            <tr>
                <th>Sub1</th>
                <td style="color: <?php echo $sub1 > 12 ? "" : "red" ?>";><?php echo $sub1 ?></td>
            </tr>
            <tr>
                <th>Sub2</th>
                <td style="color: <?php echo $sub2 > 12 ? "" : "red" ?>";><?php echo $sub2 ?></td>
            </tr>
            <tr>
                <th>Sub3</th>
                <td style="color: <?php echo $sub3 > 12 ? "" : "red" ?>";><?php echo $sub3 ?></td>
            </tr>
            <tr>
                <th>Sub4</th>
                <td style="color: <?php echo $sub4 > 12 ? "" : "red" ?>";><?php echo $sub4 ?></td>
            </tr>
            <tr>
                <th>Sub5</th>
                <td style="color: <?php echo $sub5 > 12 ? "" : "red" ?>";><?php echo $sub5 ?></td>
            </tr>
            <tr>
                <th>Total</th>
                <td><?php echo $total ?></td>
            </tr>
            <tr>
                <th>Percentage</th>
                <td><?php echo $result=="PASS" ? round($percentage,2) : "" ?></td>
            </tr>
            <tr>
                <th>Grade</th>
                <td><?php echo $result=="PASS" ? $grade : "" ?></td>
            </tr>
            <tr>
                <th>Result</th>
                <td style="color: <?php echo $result=="PASS" ? "" : "red" ?>";><?php echo $result ?></td>
            </tr>
            
        </table>
    <?php } ?>

</body>

</html>