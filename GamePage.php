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
	 <link rel="stylesheet" href="css/gamepagestyle.css" />
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
	<center>
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="GET">
	<button type="submit" name="name"	    id="btnShow" value="Overwatch">Overwatch</button>
	<button type="submit" name="name"		id="btnShow" value="Smash">Smash</button>
	<button type="submit" name="name"		id="btnShow" value="Rocket League">Rocket League</button>
	<button type="submit" name="name"		id="btnShow" value="CSGO">CSGO</button>
	</form>
	</center>
	<div class="container-fluid">
		<div id="container" class="row">
			<div id="col-a1" class="col-lg-2 text-center">
				
			</div>
			<div id="col-b" class="col-lg-2">
				<h1>Players</h1>
				<?php include "php/players.php"; ?>
			</div>
			<div id="col-c" class="col-lg-8">
				<h1><?php echo $search ?></h1>
				<p>  Described as a "hero shooter," (team-based multiplayer first-person shooter), Overwatch assigns players into two teams of six, with each player selecting from a roster of over 30 characters, known as "heroes," each with a unique style of play that is divided into three general roles that fit their purpose. Players on a team work together to secure and defend control points on a map or escort a payload across the map in a limited amount of time. Players gain cosmetic rewards that do not affect gameplay, such as character skins and victory poses, as they play the game. The game was initially launched with only casual play, but a competitive ranked mode, various 'arcade' game modes, and a player-customizable server browser were added after release. Additionally, Blizzard has added new characters, maps, and game modes post-release, all free of charge, with the only additional cost to players being optional loot boxes to earn cosmetic items </p>
				<p>  Developer: <i> Blizzard Entertainment </i></p>
				<p>  Publisher: <i> Blizzard Entertainment </i></p>
			</div>
		</div>
	</div>
	
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	
 </body>
 </html>
 