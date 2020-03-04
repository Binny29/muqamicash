<?php

    /*!
	 * POCKET v1.8
	 *
	 * http://droidoxy.oxywebs.com
	 * droid@oxywebs.com, yash@oxywebs.com
	 *
	 * Copyright 2016 DroidOXY ( http://droidoxy.oxywebs.com/ )
 */

include_once($_SERVER['DOCUMENT_ROOT']."/muqamicash/core/init.inc.php");
include_once($_SERVER['DOCUMENT_ROOT']."/muqamicash/config/api.inc.php");

if (!empty($_POST)) {

    $clientId = isset($_POST['clientId']) ? $_POST['clientId'] : 0;

    $username = isset($_POST['username']) ? $_POST['username'] : '';
    $fullname = isset($_POST['fullname']) ? $_POST['fullname'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $country = isset($_POST['country']) ? $_POST['country'] : '';
    $phone = isset($_POST['phone']) ? $_POST['phone'] : '';
    
    $clientId = helper::clearInt($clientId);

    $username = helper::clearText($username);
    $username = helper::escapeText($username);

    $fullname = helper::clearText($fullname);
    $fullname = helper::escapeText($fullname);

    $password = helper::clearText($password);
    $password = helper::escapeText($password);

    $email = helper::clearText($email);
    $email = helper::escapeText($email);
    
     $country = helper::clearText($country);
    $country = helper::escapeText($country);
    
     $phone = helper::clearText($phone);
    $phone = helper::escapeText($phone);

    if ($clientId != CLIENT_ID) {

        api::printError(ERROR_UNKNOWN, "Error client Id.");
    }

    $result = array("error" => true);

    $account = new account($dbo);
    $result = $account->signup($username, $fullname, $password, $email, $country, $phone);
    unset($account);

    if ($result['error'] === false) {

        $account = new account($dbo);
        $result = $account->signin($username, $password);
        unset($account);

        if ($result['error'] === false) {

            $auth = new auth($dbo);
            $result = $auth->create($result['accountId'], $clientId);

            if ($result['error'] === false) {

                $account = new account($dbo, $result['accountId']);
                $result['account'] = array();

                array_push($result['account'], $account->get());
            }
        }
    }

    echo json_encode($result);
    exit;
}
