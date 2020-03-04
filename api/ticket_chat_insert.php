<?php
// set required headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

include '../config/config.php';

$con=mysqli_connect($host,$user,$pass,$database);

$data = json_decode(file_get_contents("php://input"));
$ticket_id = htmlspecialchars(strip_tags($_POST['ticket_id']));
$sender_id = htmlspecialchars(strip_tags($_POST['user_id']));
$message = htmlspecialchars(strip_tags($_POST['message']));


if(empty($sender_id)){echo json_encode(['status'=>400,'message'=>'Please fill user id field.']);exit();}

if(empty($ticket_id)){echo json_encode(['status'=>400,'message'=>'Please add ticket id.']);exit();}

if(empty($message)){echo json_encode(['status'=>400,'message'=>'Please fill message field.']);exit();}

$ticketChatInsert = mysqli_query($con, "INSERT INTO tickets_reply (ticket_id,message, sender_id) VALUES ('$ticket_id','$message', '$sender_id')");

//ticket_number

$lastInsertId = mysqli_insert_id($con);

// [user_id, issue_selection, subject, message]

if ($ticketChatInsert) {
	$response = ['status'=>200, 'message'=>'Record inserted successfully.'];
} else {
	$response = ['status'=>100, 'message'=>'Unable to record insert.'];
}

echo json_encode($response);
?>