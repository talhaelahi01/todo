<?php

$as=$_POST['a'];
$ass="23";

$mysqli = mysqli_connect("localhost","root","","temperatures");

$datetime=date("Y-m-d h:i:sa");
// $q="select now()";
// $r=mysqli_query($mysqli,$q);
// while($row1=mysqli_fetch_assoc($r))
// {
//   $datetime=$row1['date_time'];
// }

$query="insert into veet_temp values('','.$as.','$datetime')";
// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}
else{
    //echo '<script>alert("connected")</script>';
    if (mysqli_query($mysqli, $query)) {
      echo "New record created successfully";
    } else {
      echo "Error: " . $mysqli . "<br>" . mysqli_error($mysqli);
    }
 // $result = mysqli_query($mysqli,"insert into veet_temp values('','23 *C')");
}



?>