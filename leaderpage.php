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
					<li><a href="#">About</a></li>
					<li><a href="index.html">Home</a></li>
				</ul>
			</div><!--End of nav-bar-->
		</header>
		
		<div class="col-container">
			<div class="col-left">
				<h2>Player Invites</h2>
				<p>Choose Team: Invite Link</p>
				<button class="invitebtn">Generate Invite Link</button>
				<input type="text" name="invitecode" value="" readonly>
			</div>
			<div class="col-middle">
				<h2>Edit Info</h2>
				<p>Choose Game/Player: Edit Info</p>
			</div>
			<div class="col-right">
				<h2>Add/Delete Pages</h2>
				<p>Delete Player/Game</p>
				<select>
					<option value="overwatch">Overwatch</option>
					<option value="rocketleague">Rocket League</option>
					<option value="csgo">CS:GO</option>
					<option value="smashbro">Smash Bros.</option>
					<option value="player">Player</option>
				</select>
				<br>
				<p>Add Game</p>
				
			</div>
		</div>
		
		<footer>Footer - eSports Links and Info</footer>
	</div>
</body>

</html>