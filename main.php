<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
</head>
<center>
<body>
	<h1>Regex matcher</h1>
	<br>
	<img src="https://i.skyrock.net/6596/84286596/pics/3121971371_1_3_2ffuRhko.gif"/>
	<br>
	<h2>I/O</h3>
	<h4>Input: Bonjour txxxxxoxxxxxrxxxxxoxxxxxnxxxxxtxxxxxo, que fais-tu ?</h4>
	<h4>Output: toronto</h4>
	<?php

	$solution = "/.(t).*(o).*(r).*(o).*(n).*(t).*(o)/";

	if (isset($_GET["regex"]) && preg_match("/^\/.+\/[a-z]*$/i", $_GET["regex"]) == TRUE) {

		$output = "Bonjour txxxxxoxxxxxrxxxxxoxxxxxnxxxxxtxxxxxo, que fais-tu ?";
		preg_match($_GET["regex"], $output, $matches, PREG_OFFSET_CAPTURE);
		if (sizeof($matches) > 0) {
			foreach ($matches as $data) {
				foreach ($data as $value) {
					$array[] = $value[0];
				}
			}
			$match = trim(implode("", $array));
			echo "<br>";
			if (isset($match) && $match == "toronto") {
				echo "<h2 style='color:#20FF33'>t0r0nt0_ch4ll{pCr3_R3g3X_1S_s0_N1c3}</h2>";
			} else {
				echo "<h2 style='color:red'>Match failed</h2>";
			}
		} else {
			echo "<h2 style='color:red'>Match failed</h2>";
		}
	} else {
		echo "<h2 style='color:red'>Ton entrée n'est pas une regex!</h2>";
	}

	?>
	<br>
	<br>
	<form method="POST">
		<input type="text" name="flag" />
		<input type="submit" name="submit" />
	</form>
	<?php

	if(!empty(isset($_POST['submit']))) {
        if(isset($_POST['flag']) && $_POST['flag'] == "t0r0nt0_ch4ll{pCr3_R3g3X_1S_s0_N1c3}"){
            echo "<h4 style='color:#20FF33'>Valide</h2>";     
        } else {
        	echo "<h4 style='color:red'>Invalide</h2>";
        }
    }

	?>
</body>
</center>
<style>
	body {
		background-color:black;
		color:#007739;
		font-family: Arial
	}
</style>
</html>
