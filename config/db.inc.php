<?php

    /*!
	 * POCKET v1.8
	 *
	 * http://droidoxy.oxywebs.com
	 * droid@oxywebs.com, yash@oxywebs.com
	 *
	 * Copyright 2017 DroidOXY ( http://droidoxy.oxywebs.com/ )
 */

include_once($_SERVER['DOCUMENT_ROOT']."/muqamicash/config/config.php");

$C = array();
$B = array();

$B['APP_DEMO'] = false;                                     

$B['APP_PATH'] = "app";
$B['APP_VERSION'] = "2.4";
$B['APP_NAME'] = $APP_NAME;
$B['APP_TITLE'] = $APP_TITLE;
$B['APP_VENDOR'] = "MuqamiCash ";
$B['APP_YEAR'] = "2020";
$B['APP_AUTHOR'] = "MuqamiCash";
$B['APP_HOST'] = $APP_HOST;                       //edit to your domain example: yourdomain.com
$B['APP_URL'] = $Server_URL;                 //edit to your domain url
$B['GOOGLE_PLAY_LINK'] = $Google_Play_Link;

$B['CLIENT_ID'] = 1;                                        //Android App Client ID (only for android application)

$C['COMPANY_URL'] = $Company_URL;

// SMTP Settings | For password recovery

$B['SMTP_AUTH'] = true;                                    //SMTP auth (Enable SMTP authentication)
$B['SMTP_SECURE'] = 'tls';                                  //SMTP secure (Enable TLS encryption, `ssl` also accepted)
$B['SMTP_PORT'] = 587;                                     //SMTP port (TCP port to connect to)
$B['SMTP_EMAIL'] = 'muqamicash.com';                     //SMTP email
$B['SMTP_USERNAME'] = 'info@muqamicash.com';                  //SMTP username
$B['SMTP_PASSWORD'] = 'Barcelona987';                     //SMTP password

//Please edit database data

// $C['DB_HOST'] = "localhost";                              //localhost or your db host
// $C['DB_USER'] = "thepwsdz_apimuqamicash";                              //your db user
// $C['DB_PASS'] = "[G9R19HjmIqc";                         //your db password
// $C['DB_NAME'] = "thepwsdz_apimuqamicash";                             //your db name

$C['DB_HOST'] = "localhost";                              //localhost or your db host
$C['DB_USER'] = "root";                              //your db user
$C['DB_PASS'] = "";                         //your db password
$C['DB_NAME'] = "thepwsdz_apimuqamicash";


// Please Do Not Edit Below
$C['ERROR_SUCCESS'] = 0;

$C['ERROR_UNKNOWN'] = 100;
$C['ERROR_ACCESS_TOKEN'] = 101;

$C['ERROR_LOGIN_TAKEN'] = 300;
$C['ERROR_EMAIL_TAKEN'] = 301;
$C['ERROR_IP_TAKEN'] = 302;

$C['ERROR_ACCOUNT_ID'] = 400;

$C['GCM_NOTIFY_CONFIG'] = 0;
$C['GCM_NOTIFY_SYSTEM'] = 1;
$C['GCM_NOTIFY_CUSTOM'] = 2;
$C['GCM_NOTIFY_LIKE'] = 3;
$C['GCM_NOTIFY_ANSWER'] = 4;
$C['GCM_NOTIFY_QUESTION'] = 5;
$C['GCM_NOTIFY_COMMENT'] = 6;
$C['GCM_NOTIFY_FOLLOWER'] = 7;

$C['ACCOUNT_STATE_ENABLED'] = 0;
$C['ACCOUNT_STATE_DISABLED'] = 1;
$C['ACCOUNT_STATE_BLOCKED'] = 2;
$C['ACCOUNT_STATE_DEACTIVATED'] = 3;

