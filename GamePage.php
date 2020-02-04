<!DOCTYPE html>
<html>
<?php
	//to summarise: if page has been reloaded, get the variable and search, else set default to first game.
	if(isset($_GET['name']))
	{
		$search = htmlspecialchars($_GET["name"]);
		include "php/database.php";//get login data for sql.
		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		// Check connection
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		}

		$sql = "SELECT * FROM players WHERE game_name = '".$search."'";
		$result = $conn->query($sql);
	} else {
		include "php/database.php";
		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		// Check connection
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		}
		$sql = "SELECT game_name FROM games";
		$result = $conn->query($sql);
		$row = $result->fetch_assoc();
		$search = $row["game_name"];

		$sql = "SELECT * FROM players WHERE game_name = '".$search."'";
		$result = $conn->query($sql);
	}
	?>
 <head>
	 <title>Game Page</title>
	 <meta name="viewport" content="width=device-width, initial-
	 scale=1">
	 <link rel="stylesheet" href="css/navbar.css" />
	 <link rel="stylesheet" href="css/gamepagestyle.css" />
 </head>
 
 <body>
	<header>
			<div id = "nav-bar"><!--Begining of nav-bar-->
				<img class = "team-logo" src="#" alt = "team-logo"/>
				<ul id="nav-bar-links">
					<li><a href="#">Blog</a></li>
					<li><a href="#">Events</a></li>
					<li><a class="active" href="team-page.html">Teams</a></li>
					<li><a href="#">About</a></li>
					<li><a href="index.html">Home</a></li>
				</ul>
			</div><!--End of nav-bar-->
		</header>
 
	<center>
	<!--This form reloads the page, as well as stores the choosen game in the url.-->
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="GET">
	<?php include "php/buttons.php" ?><!--This php is a loop that will make buttons for every game stored.-->
	</form>
	</center>
	
	<div class="container-fluid">
		<img src="images/<?php echo $search?>.jpg" alt="">
		<div id="container" class="row">
			<div id="column" class="col">
				
			</div>
			<div id="col-b" class="col-lg-2">
				<h1>Players</h1>
				<?php include "php/players.php"; ?><!--This php will display all the players of the choosen game, displaying leaders and players alike.-->
			</div>
			<div id="col-c" class="col-lg-8">
				<?php include "php/gameData.php"; ?><!--This php will print out everything about the game.-->
			</div>
		</div>
	</div>
 </body>
 </html>
 