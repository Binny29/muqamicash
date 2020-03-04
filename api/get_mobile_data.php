<?php
// required headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: GET");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

include '../config/config.php'; 

$con=mysqli_connect($host,$user,$pass,$database);

$issues_query = mysqli_query($con, "SELECT mob_key,mob_value FROM mobile_data_api where 1=1 order by id DESC ");

$issues_fetch = array();
if (mysqli_num_rows($issues_query) > 0) { 
    $issues_fetch['status']='200';
	while($row = mysqli_fetch_assoc($issues_query))
	{
		$issues_fetch['data'][] = ['mob_key'=>$row['mob_key'], 'mob_value'=>$row['mob_value']];
	}
}else{
	 $issues_fetch['status']='100';
	 $issues_fetch['message']='No records found..';
}

echo json_encode($issues_fetch);
?>