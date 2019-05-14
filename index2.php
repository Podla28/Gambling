<?php
	session_start();
?>

<!DOCTYPE html>
<html>
	<head>
			<title>Second Page</title>
				<link href="https://fonts.googleapis.com/css?family=Boogaloo" rel="stylesheet">
				<link rel="stylesheet" type="text/css" href="css/style2.css">
		</head>
<body>



  <h1>ROLL THE DICE</h1>

  <div class="glavni">
  	<div class="igralci">

<?php

	 if($_SESSION['index2']==1){
		 $_SESSION['player1']=$_POST['player1'];
		 $_SESSION['player2']=$_POST['player2'];
		 $_SESSION['player3']=$_POST['player3'];
		 $_SESSION['cube1']=$_POST['cube'];
		 $_SESSION['game1']=$_POST['game'];
	 }

	 $player1=$_SESSION['player1'];
	 $player2=$_SESSION['player2'];
	 $player3=$_SESSION['player3'];
	 $cube=$_SESSION['cube1'];
	 $game=$_SESSION['game1'];
	 $sum1= $_SESSION['sum1'];
	 $sum2= $_SESSION['sum2'];
	 $sum3= $_SESSION['sum3'];


	 $igra = $_SESSION['index2'];
	 $temp = 0;
?>

<div id="rez">

<?php
	 for($i=0; $i<3; $i++){
		 if($i==0){
			 echo "<div id=\"igralec1\"><h2>".$player1."</h2>";
		 }
		 else if($i==1){
			 echo "<div id=\"igralec2\"><h2>".$player2."</h2>";
		 }
		 else if($i==2){
			 echo "<div id=\"igralec3\"><h2>".$player3."</h2>";
		 }

			 if($cube==1){
				 for($k=0; $k<1; $k++){
					 $random = rand(1,6);
					 echo "<img src=\"slike/".$random.".png\"/  hspace='90'>";
					 $temp = $temp+$random;

				 }
			 }
			 	 else if($cube==2){
				 for($k=0; $k<2; $k++){
					 $random = rand(1,6);
					 echo "<img src=\"slike/".$random.".png\"/  hspace='25'>";
					 $temp = $temp+$random;

				 }
			 }

			 else if($cube==3){
				 for($k=0; $k<3; $k++){
					 $random = rand(1,6);
					 echo "<img src=\"slike/".$random.".png\"/  hspace='6'>";
					 $temp = $temp+$random;

				 }
			 }

			 echo "<br><br>Result: ".$temp."</br>";
				echo "SCORE: ";


		 if($i==0){
			 $sum1=$sum1+$temp;
			 echo $sum1;
		 }

		 else if($i==1){
			 $sum2=$sum2+$temp;
			 echo $sum2;
		 }

		 else if($i==2){
			 $sum3=$sum3+$temp;
			 echo $sum3;
		 }
		 echo "</div>";

		 $temp=0;
	 }

	 $_SESSION['sum1']=$sum1;
	 $_SESSION['sum2']=$sum2;
	 $_SESSION['sum3']=$sum3;

	 $_SESSION['index2']=$igra+1;
 ?>
 <?php
	 echo "<h3> the number of the throw : ".$igra." </h3>";
 ?>

 <div class="buton">
	 <?php

	 if($igra<$game){
		 echo "<form action=\"index2.php\"> <input type=\"submit\" value=\"\"></form>";

	 }
	 else{
		 echo "<form action=\"konec.php\"> <input type=\"submit\" value=\"\"></form>";
	 }

	 ?>
 </div>
	 </div>
	 </div>
	 </div>


	</div>
	</div>
  </form>
  </div>


  </body>
  </html>
