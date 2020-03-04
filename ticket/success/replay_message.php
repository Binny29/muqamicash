<?php


include '../../connect_database.php'; 

if (!empty($_POST)) {


   
    $ticketID = $_POST['ticket_id'];

    $senderID= $_POST['sender_id'];

    $message = $_POST['message'];
  $sql = "insert into tickets_reply(ticket_id,sender_id,message) values ('$ticketID','$senderID','$message')";

$result = $connect->query($sql);
$ID = $_GET['id'];
if($result){

        header("Location: https://api.muqamicash.com/ticket/view_message.php?id=".$ticketID."&status=done");
		die;

}else{
	        header("Location: https://api.muqamicash.com/ticket/view_message.php?id=".$ticketID."&status=fail");
			die;
}




}
else{
  header("Location: https://api.muqamicash.com/ticket/view_message.php?id=".$ticketID."&status=fail");
  die;
}

?>