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

	header("Location: index.php");
	}

	include_once 'connect_database.php'; 

$connect    = new mysqli($host, $user, $pass,$database) or die("Error : ".mysql_error());

$mob_key ='';
$mob_value ='';
if(!empty($_GET['id'])){
	$Id= $_GET['id'];
	$sql_query = "SELECT mob_key,mob_value FROM mobile_data_api where id ='$Id'";
	$result = mysqli_query($connect, $sql_query);	
	$row = mysqli_fetch_assoc($result);
	//print_r($row);
	$mob_key = $row['mob_key'];
	$mob_value = $row['mob_value'];
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
	<title>Add mobile data | InstantlyCash</title>
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
<h1>Add A Mobile Data<span></span><i class="fa fa-lock"></i></h1>
    <div class="alert"></div>
	<form class="cd-form floating-labels" id="submit_mobile_frm" method="post">
	<input type="hidden" name="action" value="add_mobile_data" >
	<?php if(!empty($_GET['id'])){ ?>
	<input type="hidden" name="id" value="<?php echo $_GET['id']; ?>" >
	<?php } ?>
		<fieldset>
			<legend>Enter Mobile details :</legend>

			<input type="hidden" name="user_id" value="1">
			<div class="icon">
				<label class="cd-label" for="mob_key">Mobile Key</label>
				<input class="message" type="text" name="mob_key" id="mob_key" value="<?php echo $mob_key; ?>" required>
			</div>
			
			<div class="icon">
				<label class="cd-label" for="mob_value">Mobile Value</label>
				<input class="message" type="text" name="mob_value" id="mob_value" value="<?php echo $mob_value; ?>" required>
			</div>

			<div>
		      	<input type="submit" value="Proceed to Add">
		    </div>
		</fieldset>
	</form>
<script src="js/jquery-2.1.1.js"></script>
<script src="js/main.js"></script> <!-- Resource jQuery -->
<script>

		  $(document).ready(function() {
			  
			  function manage_status_class(){
				  $('.alert').removeClass('alert-warning');
				  $('.alert').removeClass('alert-success');
				  $('.alert').removeClass('alert-danger');
				  $('.alert').text('');
			  }
			  $('body').on('submit','#submit_mobile_frm',function(){
				   var formData= $(this).serialize();					
					manage_status_class();
					$.ajax({
						type:"POST",
						url : 'https://api.muqamicash.com/action_function.php',
						data : formData,
						beforeSend:function(){
							$('.alert').addClass('alert-warning').text('Please wait..');
						},	  
						success:function(res){
							manage_status_class();
							if(res==200){
				                $('.alert').addClass('alert-success').text('Mobile has been added');
								$('#submit_mobile_frm')[0].reset();
								  setTimeout(function(){
									  window.location='https://api.muqamicash.com/view_mobile_ids.php';
								  },500);
							}else{
								$('.alert').addClass('alert-warning').text('Opps something went wrong..');
							}
						}	  
					});
					return false;
			  });
		  });


</script>


</body>
</html>