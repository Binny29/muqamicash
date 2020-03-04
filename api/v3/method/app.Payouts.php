<?php

    /*!
	 * VIDEO REWARDS v2.0
	 *
	 * http://www.droidoxy.com
	 * support@droidoxy.com
	 *
	 * Copyright 2018 DroidOXY ( http://www.droidoxy.com )
	 */

    include '../../../connect_database.php'; 
    

    if($_SERVER['REQUEST_METHOD']=='POST'){
        $username = $_POST['username'];
        
        $sql = "SELECT id FROM users WHERE login = '$username'";
        $result = $connect->query($sql);
        $row = $result->fetch_assoc();
        if($row['id'] == null){
            echo '500 - No user';
        }else{
            $sql = "SELECT id, name, subtitle, message, amount, points, image, status FROM payouts";
            $result = $connect->query($sql);
                                
			//$result = $payouts->getPayouts(0);
			//$payouts_loaded = count($result['payouts']);
			$requests = array("error" => false,
                "error_code" => ERROR_SUCCESS,
                "payouts" => array());
            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                    $status = "Disabled";
                    if($row['status'] == 1){ $status = "Active"; }
                    array_push($requests['payouts'], array("payout_id" => $row['id'],
                        "payout_title" => $row['name'],
                        "payout_subtitle" => $row['subtitle'],
                        "payout_message" => $row['message'],
                        "payout_amount" => $row['amount'],
                        "payout_pointsRequired" => $row['points'],
                        "payout_thumbnail" => $row['image'],
                        "payout_status" => $status)
                    );
                }
                echo json_encode($requests['payouts']);
                                    
            } else {
                echo "0 results";
            }
            
            echo $row["id"];
        }
        
    }else{
        echo '404 - Not Found <br/>';
        echo 'the Requested URL is not found on this server ';
    }