<?php

?>
<html>
	<head>
		<title>Project Alpha</title>
		<link rel="stylesheet" href="style/dropdown.css">
		<script src="./vendor/react.development.js"></script>
	</head>
	<body>
		<div id="top">
			<form action="" method="get">
				<select name="business">
					<option value="Artis">Artis</option>
					<option value="Ilevia">Ilevia</option>
				</select>
				<select name="line">
					<option value="L1">Ligne 1</option>
					<option value="L2">Ligne 2</option>
				</select>
				<div>
					<p>Arrivé gare</p>
					<input type="checkbox" name="direction"/>
				</div>
				<select name="time">
					<option value="GG">Gg</option>
					<option value="gn">ijb</option>
				</select>
				<input type="submit" value="appliquer"/>
			</form>
		</div>
		<div>
			<?php
				echo $_GET["test"];
			?>
		</div>
	</body>
</html>