<?php


include '../connect_database.php'; 

    if($_SERVER['REQUEST_METHOD']=='GET' && isset($_GET['username'])){

       $username = $_GET['username'];
       
       $user= "SELECT refer FROM users WHERE (login ='".$username."')";

	$bond_result = $connect->query($user);
	$user = $bond_result->fetch_assoc();
	
	$ref = $user['refer'];

	$bond= "SELECT count(*) as t_ref FROM referers WHERE (referer ='".$ref."')";

	$bond_result = $connect->query($bond);
	$se = $bond_result->fetch_assoc();
	
	echo $se['t_ref'];
	
 }else{
        echo '404 - Not Found <br/>';
        echo 'the Requested URL is not found on this server ';
    }
?>