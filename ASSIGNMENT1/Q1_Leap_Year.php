<!DOCTYPE html>
<html>

<head>
    <title>Leap Year</title>
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

    <h2>Leap Year</h2>

    <form method="post">
        <label>Year : </label>
        <input type="number" min="0" name="year" placeholder="Enter any Year" required><br><br>
        <input type="submit" name="submit" value="Check">
    </form>

    <?php
    $year;
    $output;
    ?>

    <?php
    if (isset($_POST['submit'])) {
        $year = $_POST['year'];
        if (($year % 4 == 0 && $year % 100 != 0) || ($year % 400 == 0)) {
            $output = "$year is leap year";
        } else {
            $output = "$year is not leap year";
        }

    }
    ?>
    <?php if (!empty($output)) { ?>
        <table>
            <tr>
                <th><?php echo $year ?></th>
            </tr>
            <tr>
                <td><?php echo $output ?></td>
            </tr>
        </table>
    <?php } ?>

</body>

</html>