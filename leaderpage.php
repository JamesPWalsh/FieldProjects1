<!DOCTYPE html>
<html>
<!-- James Walsh 01/16/2020 -->
<!--Last Updated: 01/16/2020-->
<head>
<link rel="stylesheet" href="css/leaderstyle.css">
<title>IHCC ESports - Leader Page</title>
</head>

<body>
	<div class="col-2">
		<header>
			<div id = "nav-bar">
				<img class = "team-logo" src="#" alt = "team-logo"/>
				<ul id="nav-bar-links">
					<li><a href="#">Blog</a></li>
					<li><a href="#">Events</a></li>
					<li><a href="team-page.html">Teams</a></li>
					<li><a href="aboutpage">About</a></li>
					<li><a href="index.html">Home</a></li>
				</ul>
			</div><!--End of nav-bar-->
		</header>
		
		<div class="col-container">
			<div class="col-left"  style="border-right: 2px solid black;">
				<h2>Edit Games</h2>
				<select>
					<option value="overwatch">Overwatch</option>
					<option value="rocketleague">Rocket League</option>
					<option value="csgo">CS:GO</option>
					<option value="smashbro">Smash Bros.</option>
				</select>
				<button class="editgamebtn">Edit Page</button>
			</div>
			<div class="col-middle" style="border-right: 2px solid black;">
				<h2>Delete Pages</h2>
				<p>Delete Player/Game</p>
				<select>
					<option value="overwatch">Overwatch</option>
					<option value="rocketleague">Rocket League</option>
					<option value="csgo">CS:GO</option>
					<option value="smashbro">Smash Bros.</option>
					<option value="player">Player</option>
				</select>
				<button class="deletebtn">Delete Page</button>
				<br>
			</div>			
			
			<div class="col-right">
				<h2>Player Invites</h2>
				<p>Choose Team: Invite Link</p>
				<button class="invitebtn">Generate Invite Link</button>
				<input style="width: 80px;" type="text" name="invitecode" value="" readonly>
			</div>
		</div>
		
		<div class="col-container">
			<div class="col-left"  style="border-right: 2px solid black;  border-top: 2px solid black;">
				<h2>Edit Players</h2>
				<select>
					<option value="player">Player</option>
				</select>
				<button class="editplayerbtn">Edit Page</button>
			</div>

			<div class="col-middle"  style="border-right: 2px solid black; border-top: 2px solid black;">
				<h2>Add Pages</h2>
				<p>Add Game</p>
				<input type="text" name="newgamename" value="">
				<button class="addgamebtn">Add New Game</button>
			</div>

			<div class="col-right">
			</div>			
		</div>
		
		<footer>Footer - eSports Links and Info</footer>
	</div>
</body>

</html>