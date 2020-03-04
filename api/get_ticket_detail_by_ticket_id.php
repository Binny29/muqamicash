<?php
// required headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: GET");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

include '../config/config.php'; 

$con=mysqli_connect($host,$user,$pass,$database);

$ticket_id=$_GET['ticket_id'];

$issues_query = mysqli_query($con, "SELECT * FROM tickets where id='$ticket_id' ");
$issues_fetch ='';
if (mysqli_num_rows($issues_query) > 0) { 
   
	while($row = mysqli_fetch_assoc($issues_query))
	{
		$issues_fetch =$row;
	}
}
if(empty($_GET['ticket_id'])){
	echo json_encode(array('status'=>100, 'message'=>'ticket_id required to get ticket data.'));
	die;
}else{
	if(empty($issues_fetch)){
		echo json_encode(array('status'=>100, 'message'=>'No records found for this ticket id'));
		die;
	}else{
		$results = array('status'=>200);
		$results['data'] =$issues_fetch;
		echo json_encode($results);
		die;
	}
}

?>