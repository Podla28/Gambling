<?php
	session_start();
	$_SESSION['index2'] = 1;
	$_SESSION['sum1'] = 0;
	$_SESSION['sum2'] = 0;
	$_SESSION['sum3'] = 0;
?>
<!DOCTYPE html>
<html>
<head>
<title>First page</title>
<link href="https://fonts.googleapis.com/css?family=Boogaloo" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>



<h1>ROLL THE DICE</h1>

<div class="glavni">
	<div class="igralci">
		<form action="index2.php" name="FORMA" method="POST">

	<div class="player">

				Player1 <br>
   			<input type="text" name="player1" size="8" maxlength="10" pattern="[A-Ža-ž]{1,}" required><br>

	</div>

	<div class="player">

				Player2 <br>
   			<input type="text" name="player2" size="8" maxlength="10" pattern="[A-Ža-ž]{1,}" required><br>

	</div>

	<div class="player">

				Player3 <br>
   			<input type="text" name="player3" size="8" maxlength="10" pattern="[A-Ža-ž]{1,}" required><br>

	</div>

	<div class="met">
		 Number of Dices<br>
		 <select name="cube">
  		<option value="1">1</option>
  		<option value="2">2</option>
  		<option value="3">3</option>
		</select>
		<br>

		Number of throws<br>
		<select name="game">
		 	<option value="1">1</option>
			<option value="2">2</option>
			<option value="3">3</option>
	 </select>
	</div>
		<div class="play">
			<input type="submit" value="" >
		</div>


</form>
	</div>
</div>
</body>
</html>
