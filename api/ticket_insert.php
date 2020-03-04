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

$userId = htmlspecialchars(strip_tags($_POST['user_id']));
$userIssueselection = htmlspecialchars(strip_tags($_POST['issue_selection']));
$userSubject = htmlspecialchars(strip_tags($_POST['subject']));
$userMessage = htmlspecialchars(strip_tags($_POST['message']));


if(empty($userId)){echo json_encode(['status'=>400,'message'=>'Please fill user id field.']);exit();}
/* if(empty($userTicketnumber)){echo json_encode(['status'=>400,'message'=>'Please fill ticket number field.']);exit();} */
if(empty($userIssueselection)){echo json_encode(['status'=>400,'message'=>'Please select a issue.']);exit();}
if(empty($userSubject)){echo json_encode(['status'=>400,'message'=>'Please fill subject field.']);exit();}
if(empty($userMessage)){echo json_encode(['status'=>400,'message'=>'Please fill message field.']);exit();}

$ticketInsert = mysqli_query($con, "INSERT INTO tickets (user_id,issue_selection, subject, message) VALUES ('$userId','$userIssueselection', '$userSubject', '$userMessage')");

//ticket_number

$lastInsertId = mysqli_insert_id($con);
$tktNumber= 'TKT-'.$lastInsertId;

/* echo $tktNumber;
echo "UPDATE tickets SET ticket_number = '$tktNumber' WHERE id ='$$lastInsertId' ";
 */
//UPDATE tickets SET ticket_number = '$tktNumber' WHERE id ='$$lastInsertId'
$ticketInsert = mysqli_query($con, "UPDATE tickets SET ticket_number = '$tktNumber' WHERE id ='$lastInsertId' ");

// [user_id, issue_selection, subject, message]

if ($ticketInsert) {
	$response = ['status'=>200, 'message'=>'Record inserted successfully.'];
} else {
	$response = ['status'=>503, 'message'=>'Unable to record insert.'];
}

echo json_encode($response);
?>