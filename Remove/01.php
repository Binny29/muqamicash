<?php

//Import database config file below
//I will manually create connection settings here, you may remove them if you import db connection file
$host = 'localhost';
$user = 'buybsolk_instantlycash';
$pass = 'Irfan@@@987';
$db = 'buybsolk_instantlycash'; //This is the DATABASE NAME
$mysqli = mysqli_connect($host, $user, $pass, $db);


//Real Deleting Work Starts Below
if(isset($_GET['id'])) {
    $id = $_GET['id']; //This will get the id of the user from the link

    $delete_sql_query = "DELETE FROM `users` WHERE `id` = '$id'";
    $run_delete_query = mysqli_query($mysqli, $delete_sql_query);

    if($run_delete_query) {
        echo "User Data successfully deleted";
    } else {
		echo "there was error deleting";
      
    }

} else {
    //In case the link has no id
}

?>