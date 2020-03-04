<?php

    /*!
	 * VIDEO REWARDS v2.0
	 *
	 * http://www.droidoxy.com
	 * support@droidoxy.com
	 *
	 * Copyright 2018 DroidOXY ( http://www.droidoxy.com )
	 */
	
	include_once("../core/init.inc.php");

    if (!admin::isSession()) {

        header("Location: ../index.php");
		
    }else if(!empty($_POST) && !APP_DEMO){
		
		$video_title = $_POST['video_title'];
		$video_sub = $_POST['video_sub'];
		$video_url = $_POST['video_url'];
		$video_amount = $_POST['video_amount'];
		$video_dur = $_POST['video_dur'];
		
		$video_title = helper::clearText($video_title);
		$video_title = helper::escapeText($video_title);
		
		$video_sub = helper::clearText($video_sub);
		$video_sub = helper::escapeText($video_sub);
		
		$sql = "INSERT INTO videos_list (title, sub, image, points, url, time, open_link) VALUES ('$video_title','$video_sub','none','$video_amount','$video_url','$video_dur','none')";
		$stmt = $dbo->prepare($sql);
		
		if($stmt->execute()){
			
			header("Location: ../videos.php");
			
		}else{
			
			header("Location: ../videos.php");
		}
		
	}else{
		
		header("Location: ../videos.php");
		
	}
?>