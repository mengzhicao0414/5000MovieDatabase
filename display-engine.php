<?php
function display_query($Query, $Result_Type) {
	#$con=mysqli_connect("localhost","root","jed833","movies");
	$con = mysqli_connect("localhost","root","","CS542");
	
	//display the query
//	echo "<div class='panel panel-default'><div class='panel-body'>" . $Query . "</div></div>";

	
	//query the database
	$result = mysqli_query($con, $Query) or die("can not search".mysqli_error());

	echo "<table class='table'>";
	
	switch(table_type($Result_Type)) {
		case "Actor":
			#echo "<tr><th>First Name</th> <th>Last Name</th> <th>Birth Date</th> <th>Death Date</th></tr>";
			echo "<tr><th>Name</th> <th>Character</th> </tr>";
			while($row = mysqli_fetch_array($result)) {
				#display_row(array("first_name", "last_name", "birth_date", "death_date"), $row);
				display_row(array("name", "character"), $row);
			}
			break;
		case "Crew":
			#echo "<tr><th>First Name</th> <th>Last Name</th> <th>Birth Date</th> <th>Death Date</th></tr>";
			echo "<tr><th>Name</th> <th>Job</th> </tr>";
			while($row = mysqli_fetch_array($result)) {
				#display_row(array("first_name", "last_name", "birth_date", "death_date"), $row);
				display_row(array("name", "job"), $row);
			}
			break;
		case "Movie":
			#echo "<tr><th>Title</th> <th>Release Date</th> <th>Rating</th> <th>Length</th> <th>Tagline</th> <th>Summary</th> <th>Budget</th></tr>";
			echo "<tr> <th>Title</th> <th>Budget</th> <th>Release Date</th> <th>Original Language</th> <th>Run Time</th> </tr>";
			while($row = mysqli_fetch_array($result)) {
				#display_row(array("title", "release_date", "rating", "length", "tagline", "summary", "budget"), $row);
				display_row(array("title","budget", "release_date", "original_language", "runtime"), $row);
				#echo"<br/>$row[1]&nbsp;&nbsp;$row[0]&nbsp;&nbsp;$row[2]&nbsp;&nbsp;$row[3]&nbsp;&nbsp;$row[4]&nbsp;&nbsp;$row[5]";
			}
                        break;
                case "Reception":
                        echo "<tr><th>Title </th> <th>Popularity</th> <th>Revenue</th> <th>Vote Average</th> <th>Vote Count</th></tr>";
                        while( $row = mysqli_fetch_array( $result ) ) {
                                display_row( array( "title", "popularity","revenue", "vote_average", "vote_count" ), $row );
                        }
                        break;

		default:
			break;
	}
	echo "</table>";

	mysqli_close($con);
}
function display_row($fields, $row) {
	echo "<tr>";
	foreach ($fields as $field) {
		echo "<td>" . $row[$field] . "</td>";
  	}
  	echo "</tr>";
}


?>