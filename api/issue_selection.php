<?php
// required headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: GET");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

include '../config/config.php'; 

$con=mysqli_connect($host,$user,$pass,$database);

$issues_query = mysqli_query($con, "SELECT id,issue FROM issues");

$issues_fetch = [];
while($row = mysqli_fetch_assoc($issues_query))
{
	$issues_fetch[] = ['id'=>$row['id'], 'issue'=>$row['issue']];
}

echo json_encode($issues_fetch);
?>