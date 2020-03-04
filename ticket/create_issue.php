<?php

    /*!
	 * POCKET v1.1
	 *
	 * http://droid.oxywebs.in
	 * droid@oxywebs.com, yash@oxywebs.com
	 *
	 * Copyright 2016 yashDev (http://yash.oxywebs.in/)
 */

    include_once($_SERVER['DOCUMENT_ROOT']."/muqamicash/core/init.inc.php");

    if (!admin::isSession()) {

        header("Location: ../index.php");
    }

include_once '../connect_database.php'; 

$connect    = new mysqli($host, $user, $pass,$database) or die("Error : ".mysql_error());
$sql = "SELECT tickets.issue_selection,issues.issue FROM tickets INNER JOIN issues ON tickets.issue_selection=issues.id";
$issue='';
if(!empty($_GET['issue_id'])){
	$issue_id = $_GET['issue_id'];
	$getsql= "select issue from issues where id='$issue_id'";
	$result = mysqli_query($connect, $getsql);
	$result = mysqli_fetch_assoc($result);
   $issue=	$result['issue'];
}


?>
<!doctype html>
<html lang="en" class="no-js">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css'>
<link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Roboto:400,700'>
<link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Montserrat'>
<link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Roboto+Mono'>

	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="css/reset.css"> <!-- CSS reset -->
	<link rel="stylesheet" href="css/style.css"> <!-- Resource style -->
	<script src="js/modernizr.js"></script> <!-- Modernizr -->
	<title>Add Ticket | InstantlyCash</title>
<style>

.fa-lock {
  position: absolute;
  color: #5ed9eb;
  right: 2.3em;
  top: 1.2em;
  line-height: 3em;
  border-radius: 100%;
}
h1 {
  color: #5ed9eb;
  margin: 0;
  background: rgba(94,217,235,0.3);
  font-weight: 700;
  line-height: 1;
  padding: 2em 1em;
  font-size: 1em;
  letter-spacing: 0.5em;
  font-family: 'Montserrat';
  text-transform: uppercase;
  box-sizing: border-box;
  text-align: center;
}
h1 span {
  color: #5ed9eb;
  margin: 0 0 0;
  display: block;
  font-size: 6em;
  letter-spacing: -0.06em;
  text-transform: uppercase;
  font-family: 'Roboto Mono';
}
</style>
</head>
<body>
<h1>Add A Issue<span></span><i class="fa fa-lock"></i></h1>
	<form class="cd-form floating-labels" action="success/add_issue.php" method="post">
	   <input type="hidden" name="issue_id" value="<?php echo $_GET['issue_id']; ?>">
		<fieldset>
			<legend>Enter Issue details :</legend>

			<input type="hidden" name="user_id" value="1">
			<div class="icon">
				<label class="cd-label" for="cd-name">Issue Type</label>
				<input class="message" value="<?php echo $issue; ?>" type="text" name="issue" id="cd-name" required>
			</div>
			<div>
		      	<input type="submit" value="Proceed to Add">
		    </div>
		</fieldset>
	</form>
<script src="js/jquery-2.1.1.js"></script>
<script src="js/main.js"></script> <!-- Resource jQuery -->
</body>
</html>