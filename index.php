<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8"/>
	<link rel="stylesheet" href="css/style.css"/>
</head>
<center>
<body>
	<h1>Regex matcher</h1>
	<br>
	<img src="assets/image.gif">
	<br>
	<h2>I/O</h2>
	<h4>Input: Bonjour txxxxxoxxxxxrxxxxxoxxxxxnxxxxxtxxxxxo, que fais-tu ?</h4>
	<h4>Output: toronto</h4>
	<h2 class="win">
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
				$err = "Match failed";
				$err2 = "Ton entrée n'est pas une regex!";
				echo "<br/>";
				if (isset($match) && $match == "toronto") {
					echo "t0r0nt0_ch4ll{pCr3_R3g3X_1S_s0_N1c3}";
				} else {
					echo $err;
				}
			} else {
				echo $err;
			}
		} else {
			echo $err2;
		}

	?>
	</h2>
	<br>
	<br>
	<form method="POST">
		<input type="text" name="flag" />
		<input type="submit" name="submit" />
	</form>
	<h4 class="valide">
	<?php

		if(!empty(isset($_POST['submit']))) {
			if(isset($_POST['flag']) && $_POST['flag'] == "t0r0nt0_ch4ll{pCr3_R3g3X_1S_s0_N1c3}") {
			    echo "Valide";  

	?>
	</h4>
	<h4 class="invalide">
	<?php   

			} else {
				echo "Invalide";
			}
	    	}

	?>
	</h4>
</body>
</center>
</html>
