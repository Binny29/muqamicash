<?php

include '../config/config.php'; 

// echo $host ;
// echo $user  ;
// echo $pass;
// echo $database;

$con=mysqli_connect($host,$user,$pass,$database);

  // Check connection
  if (mysqli_connect_errno())
  {
   echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

  $query = "SELECT  id, title, sub, points, url, time
					FROM videos_list
					ORDER BY id DESC";
  $result = mysqli_query($con,$query);

  $rows = array();
  while($r = mysqli_fetch_array($result)) {
    $rows[] = $r;
  }
		 header( 'Content-Type: application/json; charset=utf-8' );

     echo $val= str_replace('\\/', '/', json_encode($rows,JSON_UNESCAPED_UNICODE));

  mysqli_close($con);
?>