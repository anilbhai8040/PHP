<!DOCTYPE html>
<html>

<head>
    <title>gross salary</title>
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

    <h2>gross salary</h2>

    <form method="post">
        <label>Basic Salary : </label>
        <input type="number" name="salary" placeholder="Enter Basic Salary in ₹" required><br><br>
        <label>DA : </label>
        <input type="number" name="DA" min="0" step="0.5" placeholder="Enter DA in %" required><br><br>
        <label>TA : </label>
        <input type="number" name="TA" min="0" step="0.5" placeholder="Enter TA in %" required><br><br>
        <label>TAX: </label>
        <input type="number" name="TAX" min="0" step="0.5" placeholder="Enter Tax in %" required><br><br>
        <label>PF : </label>
        <input type="number" name="PF" min="0" step="0.5" placeholder="Enter PF in %" required><br><br>

        <input type="submit" name="submit" value="Add Book">
    </form>

    <?php
      $Basic_Salary;
      $DA;
      $TA;
      $PF;
      $TAX;
      $Net_Salary;
    ?>

    <?php
    if (isset($_POST['submit'])) {
        $Basic_Salary = $_POST['salary'];
        $DA = $_POST['DA'];
        $TA = $_POST['TA'];
        $PF = $_POST['PF'];
        $TAX = $_POST['TAX'];
    }
    ?>

    <?php if (!empty($Basic_Salary)) { ?>
        <table>
            <tr>
                <th>Basic Salary(₹)</th>
                <th><?php echo "DA(".$DA."%)" ?></th>
                <th><?php echo "TA(".$TA."%)" ?></th>
                <th><?php echo "PF(".$PF."%)" ?></th>
                <th><?php echo "TAX(".$TAX."%)" ?></th>
                <th>Net Salary(₹)</th>
            </tr>
            <tr>
                <?php  
                   
                    $DA = $Basic_Salary * $DA / 100;
                    $TA = $Basic_Salary * $TA / 100;
                    $PF = $Basic_Salary * $PF / 100;
                    $TAX = $Basic_Salary * $TAX / 100;
                    $Net_Salary = $Basic_Salary + $DA + $TA - $PF - $TAX;


                ?>
                <td><?php echo $Basic_Salary ?></td>
                <td><?php echo $DA ?></td>
                <td><?php echo $TA ?></td>
                <td><?php echo $PF ?></td>
                <td><?php echo $TAX ?></td>
                <td><?php echo $Net_Salary ?></td>
            </tr>
        </table>
    <?php } ?>

</body>

</html>