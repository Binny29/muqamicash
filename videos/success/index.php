<?php


include '../../connect_database.php'; 

if (!empty($_POST)) {

    $title = $_POST['title'];

    $sub= $_POST['sub'];

    $url = $_POST['url'];

    $points = $_POST['points'];

    $time = $_POST['time'];

/**
echo $title; 

echo $image;

echo $sub;

echo $url;

echo $points;

echo $time;

**/

  $sql = "insert into videos_list(title,sub,url,points,time) values ('$title','$sub','$url','$points','$time')";

$result = $connect->query($sql);

if($result == 1){

 // do it

        header("Location: ../../videos.php");

}


        header("Location: ../../videos.php");

}
else{
echo '404 - Not Found <br/>';
        echo 'the Requested URL is not found on this server ';
}

?>