<?php
$arr = "";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	foreach ($_POST as $key => $value) {
		$arr .= $key . "=" . $value . "&";
	}

	header("Location:welcome.php?" . $arr);
}
?>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<style>
		* {
			padding: 0;
			margin: 0;
		}

		body {
			height: 100vh;
			display: grid;
			place-items: center;
		}

		td,
		th,
		tr {
			border: 2px solid black;
			border-collapse: collapse;
		}

		.head td {
			padding: 1em;
		}

		img {
			height: 100px;
			width: 100px;
			background-color: black;
		}
	</style>
</head>

<body>
	<form method="POST">
		<table>
			<tr class="head">
				<td>
					<img src="Adarshlogo.png">
				</td>
				<td colspan="2">
					<h2> ADARSH EDUCATIONAL CAMPUS</h2>
					<h3> Managed by Takshshial edu. & Char. Trust </h3>
				</td>
			</tr>
			<tr>
				<th>HOME</th>
				<td colspan="2">Any query contact us ....</td>
			</tr>
			<tr>
				<th>ABOUT US</th>
				<td>You Name : </td>
				<td><input type="text" name="name"></td>
			</tr>
			<tr>
				<th rowspan="4" valign="top">CONTACT US</th>
				<td>Email Address:</td>
				<td><input type="email" name="email"></td>
			</tr>
			<tr>
				<td>Contact No:</td>
				<td><input type="number" name="mobile"></td>
			</tr>
			<tr>
				<td>Message:</td>
				<td>
					<textarea rows="3" name="message">
				</textarea>
				</td>
			</tr>
			<tr>
				<td align="center"><button type="submit">submit </button></td>
				<td></td>
			</tr>
			<tr>
				<td colspan="3" align="center">POWERED BY @ ADARSH CAMPUS</td>
			</tr>

		</table>
	</form>
</body>

</html>