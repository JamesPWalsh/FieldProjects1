<?php
	if ($result->num_rows > 0) {
		// output data of each row
		while($row = $result->fetch_assoc()) {
			if ($row["leader"] == "yes") {
				echo "Leader: " . $row["name"];
			} else {
				echo "Name: " . $row["name"];
			}
			echo "<br>";
		}
	} else {
		echo "0 results";
	}
?>