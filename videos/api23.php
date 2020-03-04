<?php

include '../config/config.php'; 

// echo $host ;
// echo $user  ;
// echo $pass;
// echo $database;


mysql_connect($host, $user, $pass) or die('Could not connect');

$yash = "yashDev";

mysql_select_db($database);

    $query= "SELECT  id, title, sub, points, url, time
					FROM videos_list
					ORDER BY id DESC";

$resouter = mysql_query($query);
    $set = array();
     
    $total_records = mysql_numrows($resouter);
    if($total_records >= 1){
     
      while ($link = mysql_fetch_array($resouter, MYSQL_ASSOC)){
	   
        $set[] = $link;

        // $set['entertainment'][] = $link;
      }
    }
	
 		 header( 'Content-Type: application/json; charset=utf-8' );

     echo $val= str_replace('\\/', '/', json_encode($set,JSON_UNESCAPED_UNICODE));
?>