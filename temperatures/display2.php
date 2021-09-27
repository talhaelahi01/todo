<html>
    <head>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.25/datatables.min.css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 
 <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.25/datatables.min.js"></script>
    

<style>
body{
    user-select: none;
}



</style>

    </head>    
<body>
<table id="myTable" class="preventcopy table table-striped table-bordered" data-unselectable="unselectable content" style="width:100%">
        <thead>
            <tr>
                <th>ID</th>
               
                 <th>Datetime</th>
                 <th>Temp1</th>
                 <th>Temp2</th>
                 <th>Temp3</th>
                 <th>Temp4</th>
                 <th>Temp5</th>
                 <th>Temp6</th>
                 <th>Temp7</th>
                 <th>Temp8</th>
                 <th>Temp9</th>
                 <th>Temp10</th>

                 <th>Temp11</th>
                 <th>Temp12</th>
                 <th>Temp13</th>
                 <th>Temp14</th>
                 <th>Temp15</th>
                 <th>Temp16</th>
                 <th>Temp17</th>
                 <th>Temp18</th>
                 <th>Temp19</th>
                 <th>Temp20</th>

                 <th>Temp21</th>
                 <th>Temp22</th>
                 <th>Temp23</th>
                 <th>Temp24</th>
                 <th>Temp25</th>
                 <th>Temp26</th>
                 <th>Temp27</th>
                 <th>Temp28</th>
                 <th>Temp29</th>
                 <th>Temp30</th>

                 <th>Temp31</th>
                 <th>Temp32</th>
                 <th>Temp33</th>
                 <th>Temp34</th>
                 <th>Temp35</th>
                 <th>Temp36</th>
                 <th>Temp37</th>
                 <th>Temp38</th>
                 <th>Temp39</th>
                 <th>Temp40</th>
                 <th>Temp41</th>

                
            </tr>
        </thead>
        <tbody>

<?php
$mysqli = mysqli_connect("localhost","root","","temperatures");
$query="select * from veet_temp3";
// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}
else{
    $result=mysqli_query($mysqli,$query);
   while($row=mysqli_fetch_assoc($result))
   {
  echo '<tr>';
//  echo '<span data-unselectable="unselectable content"></span>';

  echo  '<td><p class="preventcopy">'.$row['id'].'</p></td>';
  echo  '<td>'.$row['timestamp'].'</td>';
  echo  '<td>'.$row['temp1'].'</td>';
  echo  '<td>'.$row['temp2'].'</td>';
  echo  '<td>'.$row['temp3'].'</td>';
  echo  '<td>'.$row['temp4'].'</td>';
  echo  '<td>'.$row['temp5'].'</td>';
  echo  '<td>'.$row['temp6'].'</td>';
  echo  '<td>'.$row['temp7'].'</td>';
  echo  '<td>'.$row['temp8'].'</td>';
  echo  '<td>'.$row['temp9'].'</td>';
  echo  '<td>'.$row['temp10'].'</td>';

  echo  '<td>'.$row['temp11'].'</td>';
  echo  '<td>'.$row['temp12'].'</td>';
  echo  '<td>'.$row['temp13'].'</td>';
  echo  '<td>'.$row['temp14'].'</td>';
  echo  '<td>'.$row['temp15'].'</td>';
  echo  '<td>'.$row['temp16'].'</td>';
  echo  '<td>'.$row['temp17'].'</td>';
  echo  '<td>'.$row['temp18'].'</td>';
  echo  '<td>'.$row['temp19'].'</td>';
  echo  '<td>'.$row['temp20'].'</td>';

  echo  '<td>'.$row['temp21'].'</td>';
  echo  '<td>'.$row['temp22'].'</td>';
  echo  '<td>'.$row['temp23'].'</td>';
  echo  '<td>'.$row['temp24'].'</td>';
  echo  '<td>'.$row['temp25'].'</td>';
  echo  '<td>'.$row['temp26'].'</td>';
  echo  '<td>'.$row['temp27'].'</td>';
  echo  '<td>'.$row['temp28'].'</td>';
  echo  '<td>'.$row['temp29'].'</td>';
  echo  '<td>'.$row['temp30'].'</td>';

  echo  '<td>'.$row['temp31'].'</td>';
  echo  '<td>'.$row['temp32'].'</td>';
  echo  '<td>'.$row['temp33'].'</td>';
  echo  '<td>'.$row['temp34'].'</td>';
  echo  '<td>'.$row['temp35'].'</td>';
  echo  '<td>'.$row['temp36'].'</td>';
  echo  '<td>'.$row['temp37'].'</td>';
  echo  '<td>'.$row['temp38'].'</td>';
  echo  '<td>'.$row['temp39'].'</td>';
  echo  '<td>'.$row['temp40'].'</td>';
  echo  '<td>'.$row['temp41'].'</td>';
   echo '</tr>';

   }
}
?>


        </tbody>
        <tfoot>
            <tr>
                <th>ID</th>
                <th>Datetime</th>
                 <th>Temp1</th>
                 <th>Temp2</th>
                 <th>Temp3</th>
                 <th>Temp4</th>
                 <th>Temp5</th>
                 <th>Temp6</th>
                 <th>Temp7</th>
                 <th>Temp8</th>
                 <th>Temp9</th>
                 <th>Temp10</th>

                 <th>Temp11</th>
                 <th>Temp12</th>
                 <th>Temp13</th>
                 <th>Temp14</th>
                 <th>Temp15</th>
                 <th>Temp16</th>
                 <th>Temp17</th>
                 <th>Temp18</th>
                 <th>Temp19</th>
                 <th>Temp20</th>

                 <th>Temp21</th>
                 <th>Temp22</th>
                 <th>Temp23</th>
                 <th>Temp24</th>
                 <th>Temp25</th>
                 <th>Temp26</th>
                 <th>Temp27</th>
                 <th>Temp28</th>
                 <th>Temp29</th>
                 <th>Temp30</th>

                 <th>Temp31</th>
                 <th>Temp32</th>
                 <th>Temp33</th>
                 <th>Temp34</th>
                 <th>Temp35</th>
                 <th>Temp36</th>
                 <th>Temp37</th>
                 <th>Temp38</th>
                 <th>Temp39</th>
                 <th>Temp40</th>
                 <th>Temp41</th>

            </tr>
        </tfoot>
    </table>
    <script>

$(document).ready( function () {
    $('#myTable').DataTable();
} );
    </script>
</body>
</html>