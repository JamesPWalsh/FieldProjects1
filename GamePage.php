<!DOCTYPE html>
<html>
<?php
	if(isset($_GET['name']))
	{
		$search = htmlspecialchars($_GET["name"]);
		
		include "php/database.php";
		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		// Check connection
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		}

		$sql = "SELECT * FROM players WHERE game_name = '".$search."'";
		$result = $conn->query($sql);
	}
	?>
 <head>
	 <title>Game Page</title>
	 <meta name="viewport" content="width=device-width, initial-
	 scale=1">
	 <link rel="stylesheet" href="css/bootstrap.min.css" />
	 <link rel="stylesheet" href="php/gamepagestyle.php" />
	 
 </head>
 
 <body>
	<nav class="navbar navbar-expand-md navbar-dark bg-dark justify-content-center">
	
		<div class="container">
			<a  class="navbar-brand"><h2>Game Page</h2></a>

			<button class="navbar-toggler" data-toggle="collapse" data-target="#collapse_target">
				<span class="navbar-toggler-icon"></span>
			</button>
			
			<div class="collapse navbar-collapse" id="collapse_target">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
						<a class="nav-link" href="#">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Pages</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Features</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Portfolio</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Blog</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Contact</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	
    <?php
	
	$gameSet = $conn->query("SELECT games.game_name AS gameName FROM games");
	
	//echo $result->num_rows;
	
	
	while ($row = $gameSet->fetch_assoc()) {
		
		$game = $row['gameName'];
		
		
		echo '<div class="container-fluid">';
		echo '<div id="container" class="row">';
		echo '<div id="col-a1" class="col-lg-2 text-center" img src="images/'.$game.'.jpg" alt="">';
		echo '<img src="images/'.$game.'.jpg" alt="">';
		echo '</div>';
		echo '<div id="col-b" class="col-lg-2">';
		echo '<h1>Players</h1>';
		
		$playerSet = $conn->query("SELECT players.name AS playerName FROM players WHERE players.game_name = '$game'");
		
		while ($playerRow = $playerSet->fetch_assoc()) {
			echo $playerRow['playerName'].'<br/>';
		}
			
		echo '</div>';
		echo '<div id="col-c" class="col-lg-8">';
		echo '<h1>'.$game.'</h1>';
		
		$infoSet = $conn->query("SELECT games.game_info AS gameInfo, games.developer AS developer, games.publisher AS publisher FROM games WHERE games.game_name = '$game'");
		
		while ($infoRow = $infoSet->fetch_assoc()) {
			echo '<p>'.$infoRow['gameInfo'].'</p>';
			echo '<p>Developer: '.$infoRow['developer'].'</p>';
			echo '<p>Publisher: '.$infoRow['publisher'].'</p>';
		}
		
		echo '</div>';
		echo '</div>';
		echo '</div>';
	}
	?>
	
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	
 </body>
 </html>
 