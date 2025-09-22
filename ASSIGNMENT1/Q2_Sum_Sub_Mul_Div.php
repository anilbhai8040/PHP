<!DOCTYPE html>
<html>

<head>
    <title>Calculation</title>
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

    <h2>Calculation</h2>

    <form method="post">
        <label>Number 1 : </label>
        <input type="number" min="0" name="no1" placeholder="Enter First Number" required><br><br>
        <label>Number 2 : </label>
        <input type="number" min="0" name="no2" placeholder="Enter Second Number" required><br><br>
        <input type="submit" name="submit" value="Check">
    </form>

    <?php
    $no1;
    $no2;
    ?>

    <?php
    if (isset($_POST['submit'])) {
        $no1 = $_POST['no1'];
        $no2 = $_POST['no2'];
    }
    ?>

    <?php if (!empty($no1 && $no2)) { ?>
        <table>
            <tr>
                <th>Addition <?php echo "($no1 + $no2)" ?></th>
                <td><?php echo $no1 + $no2 ?></td>
            </tr>
            <tr>
                <th>Subtraction <?php echo "($no1 - $no2)" ?></th>
                <td><?php echo $no1 - $no2 ?></td>
            </tr>
            <tr>
                <th>Multiplication <?php echo "($no1 * $no2)"; ?></th>
                <td><?php echo $no1 * $no2 ?></td>
            </tr>
            <tr>
                <th>Division <?php echo "($no1 / $no2)"; ?></th>
                <td><?php echo $no1 / $no2 ?></td>
            </tr>
        </table>
    <?php } ?>

</body>

</html>