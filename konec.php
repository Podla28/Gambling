<?php

	session_start();
	error_reporting( error_reporting() & ~E_NOTICE );
?>
<!DOCTYPE html>
<html>
	<head>
			<title>Final Results</title>
				<link href="https://fonts.googleapis.com/css?family=Boogaloo" rel="stylesheet">
				<link rel="stylesheet" type="text/css" href="css/style3.css">
		</head>
<body onload="redirTimer()">

		<div class="glavni">

			<div id="prvi">
					<?php

						$vsota1 = $_SESSION['sum1'];
						$vsota2 = $_SESSION['sum2'];
						$vsota3 = $_SESSION['sum3'];

						if($vsota1 >= $vsota2 && $vsota2 >= $vsota3){
									$SUM = array($vsota1, $vsota2, $vsota3);
									$winner1 = $_SESSION['player1'];
									echo "<h3>".$winner1."</h3>";
									echo "<h2>(".$SUM[0].")</h2>";

							}else if($vsota1 >= $vsota3 && $vsota3 >= $vsota2){
										$SUM = array($vsota1, $vsota3, $vsota2);
											$winner1 = $_SESSION['player1'];
											echo "<h3>".$winner1."</h3>";
											echo "<h2>(".$SUM[0].")</h2>";

								}else if($vsota2 >= $vsota1 && $vsota1 >= $vsota3){
											$SUM = array($vsota2, $vsota1, $vsota3);
											$winner2 = $_SESSION['player2'];
											echo "<h3>".$winner2."</h3>";
											echo "<h2>(".$SUM[0].")</h2>";

									}else if($vsota2 >= $vsota3 && $vsota3 >= $vsota1){
												$SUM = array($vsota2, $vsota3, $vsota1);
												$winner2 = $_SESSION['player2'];
												echo "<h3>".$winner2."</h3>";
												echo "<h2>(".$SUM[0].")</h2>";

										}else if($vsota3 >= $vsota2 && $vsota2 >= $vsota1){
												  $SUM = array($vsota3, $vsota2, $vsota1);
														$winner3 = $_SESSION['player3'];
														echo "<h3>".$winner3."</h3>";
														echo "<h2>(".$SUM[0].")</h2>";

												}else if($vsota3 >= $vsota1 && $vsota1 >= $vsota2){
															$SUM = array($vsota3, $vsota1, $vsota2);
																$winner3 = $_SESSION['player3'];
																echo "<h3>".$winner3."</h3>";
																echo "<h2>(".$SUM[0].")</h2>";
										}




					?>
						<img src="slike/first.gif" style="margin-top:15px; margin-left:5px;"><br>
						<img src="slike/fireworks.gif" style="margin-left:10px;"><br>
						<img src="slike/fireworks.gif">
				</div>

					<div id="drugi">
						<?php



							$vsota1 = $_SESSION['sum1'];
							$vsota2 = $_SESSION['sum2'];
							$vsota3 = $_SESSION['sum3'];

							if($vsota1 >= $vsota2 && $vsota2 >= $vsota3){
										$SUM = array($vsota1, $vsota2, $vsota3);
										$winner2 = $_SESSION['player2'];
										echo "<h3>".$winner2."</h3>";
										echo "<h2>(".$SUM[1].")</h2>";

								}else if($vsota1 >= $vsota3 && $vsota3 >= $vsota2){
											$SUM = array($vsota1, $vsota3, $vsota2);
												$winner3 = $_SESSION['player3'];
												echo "<h3>".$winner3."</h3>";
												echo "<h2>(".$SUM[1].")</h2>";

									}else if($vsota2 >= $vsota1 && $vsota1 >= $vsota3){
												$SUM = array($vsota2, $vsota1, $vsota3);
												$winner1 = $_SESSION['player1'];
												echo "<h3>".$winner1."</h3>";
												echo "<h2>(".$SUM[1].")</h2>";

										}else if($vsota2 >= $vsota3 && $vsota3 >= $vsota1){
													$SUM = array($vsota2, $vsota3, $vsota1);
													$winner3 = $_SESSION['player3'];
													echo "<h3>".$winner3."</h3>";
													echo "<h2>(".$SUM[1].")</h2>";

											}else if($vsota3 >= $vsota2 && $vsota2 >= $vsota1){
													  $SUM = array($vsota3, $vsota2, $vsota1);
															$winner2 = $_SESSION['player2'];
															echo "<h3>".$winner2."</h3>";
															echo "<h2>(".$SUM[1].")</h2>";

													}else if($vsota3 >= $vsota1 && $vsota1 >= $vsota2){
																$SUM = array($vsota3, $vsota1, $vsota2);
																	$winner1 = $_SESSION['player1'];
																	echo "<h3>".$winner1."</h3>";
																	echo "<h2>(".$SUM[1].")</h2>";
											}



						?>


						<img src="slike/second.gif" style="margin-top:15px; margin-left:15px;">
					</div>

					<div id="tretji">

						<?php

							$vsota1 = $_SESSION['sum1'];
							$vsota2 = $_SESSION['sum2'];
							$vsota3 = $_SESSION['sum3'];

							if($vsota1 >= $vsota2 && $vsota2 >= $vsota3){
										$SUM = array($vsota1, $vsota2, $vsota3);
										$winner3 = $_SESSION['player3'];
										echo "<h3>".$winner3."</h3>";
										echo "<h2>(".$SUM[2].")</h2>";

								}else if($vsota1 >= $vsota3 && $vsota3 >= $vsota2){
											$SUM = array($vsota1, $vsota3, $vsota2);
												$winner2 = $_SESSION['player2'];
												echo "<h3>".$winner2."</h3>";
												echo "<h2>(".$SUM[2].")</h2>";

									}else if($vsota2 >= $vsota1 && $vsota1 >= $vsota3){
												$SUM = array($vsota2, $vsota1, $vsota3);
												$winner3 = $_SESSION['player3'];
												echo "<h3>".$winner3."</h3>";
												echo "<h2>(".$SUM[2].")</h2>";

										}else if($vsota2 >= $vsota3 && $vsota3 >= $vsota1){
													$SUM = array($vsota2, $vsota3, $vsota1);
													$winner1 = $_SESSION['player1'];
													echo "<h3>".$winner1."</h3>";
													echo "<h2>(".$SUM[2].")</h2>";

											}else if($vsota3 >= $vsota2 && $vsota2 >= $vsota1){
													  $SUM = array($vsota3, $vsota2, $vsota1);
															$winner1 = $_SESSION['player1'];
															echo "<h3>".$winner1."</h3>";
															echo "<h2>(".$SUM[2].")</h2>";

													}else if($vsota3 >= $vsota1 && $vsota1 >= $vsota2){
																$SUM = array($vsota3, $vsota1, $vsota2);
																	$winner2 = $_SESSION['player2'];
																	echo "<h3>".$winner2."</h3>";
																	echo "<h2>(".$SUM[2].")</h2>";
											}




						?>

						<img src="slike/third.gif" style="margin-top:15px; margin-left:5px;">
			</div>
		</div>

			<center><img src="slike/redirect.png" style="margin-top:50px;"></center>
				<script type="text/javascript">
					redirTime="10000";
					redirURL='index.php';
					function redirTimer() {self.setTimeout ("self.location.href=redirURL;",redirTime);}
				</script>
	</body>
</html>
