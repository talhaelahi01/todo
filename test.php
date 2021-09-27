<!-- <!DOCTYPE html>
<html>

<body>
	<center>
		<h1>DISPLAY DATA PRESENT IN CSV</h1>
		<h3>Dummy data</h3> -->

<?php
/////////////database connection////////////
$mysqli = mysqli_connect("localhost", "root", "", "temperatures");

$datetime = date("Y-m-d h:i:sa");

///////////xxxxxxxxxxxxxxxxxxxxxx///////////

// echo "<html><body><center><table>\n\n";



//$a =array("","");
if (file_exists("E:\data\a.csv")) {
	// Open a file
	$file = fopen("E:\data\a.csv", "r");

	$string1 = " ";
	$string2 = " ";
	// Fetching data from csv file row by row
	while (($data = fgetcsv($file)) !== false) {

		// HTML tag for placing in row format
		//echo  ($data);


		echo "<tr>";
		$ii = 0;


		foreach ($data as $i) {
			//console.log("Message here");
			//array_push($a,$k,$i);
			$ii++;



			if ($ii == 1) {
				$string1 = $i;
				//$ii++;
			}

			if ($ii == 2) {
				$string2  = $i;
				///$ii++;
			}



			//echo $ii."\n";






		}
		$ii = 0;

		// ////////////////////////php code/////////////////////
		$query = "insert into veet_temp values('','.$string1.','$string2')";

		if ($mysqli->connect_errno) {
			echo "Failed to connect to MySQL: " . $mysqli->connect_error;
			exit();
		} else {
			//echo '<script>alert("connected")</script>';
			if (mysqli_query($mysqli, $query)) {
			//	echo "New record created successfully";
			} else {
				echo "Error: " . $mysqli . "<br>" . mysqli_error($mysqli);
			}
		}
		/////////////////////////xxxxxxxxxxxxxxxxxxx//////////////////
		// echo "<td>" . ("col1 ".$string1 )

		// . "</td>";
		// echo "<td>" . ("col2 ".$string2 )

		// . "</td>";


		// echo "</tr> \n";
	}



	// Closing the file
	fclose($file);


	// foreach($a as $key=>$value)
	// {

	// 	echo $key ."  ".$value;

	// }


	// echo "\n</table></center>";

	// echo "</body></html>";

	echo "values save successfully";
} else {
	echo "file doesnot exist";
}

?>
<!-- </center>
</body>

</html> -->