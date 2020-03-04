<?php


include '../../connect_database.php'; 

if (!empty($_POST)) {

    $user   = $_POST['user_id'];
    $ticket = $_POST['ticket_number'];

    $issue= $_POST['issue_selection'];

    $subject = $_POST['subject'];

    $message = $_POST['message'];

/**
echo $title; 

echo $image;

echo $sub;

echo $url;

echo $points;

echo $time;

**/

  $sql = "insert into tickets(user_id,ticket_number,issue_selection,subject,message) values ('$user','$ticket','$issue','$subject','$message')";

$result = $connect->query($sql);

if($result == 1){

 // do it

        header("Location: ../../ticket_panel.php");

}


        header("Location: ../../ticket_panel.php");

}
else{
echo '404 - Not Found <br/>';
        echo 'the Requested URL is not found on this server ';
}

?>