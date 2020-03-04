<?php
include '../../connect_database.php'; 
$connect    = new mysqli($host, $user, $pass,$database) or die("Error : ".mysql_error());

if (!empty($_POST)) {

$issue = !empty($_POST['issue'])? $_POST['issue'] : '';
$issue_id = !empty($_REQUEST['issue_id']) ? $_REQUEST['issue_id'] : '';
if($issue){
	if($issue_id){
		$sql = "UPDATE issues set issue='$issue' WHERE id='$issue_id' ";
		$result = $connect->query($sql);
	}else{
		$sql = "insert into issues (issue) values ('$issue')";
		$result = $connect->query($sql);
	}	
   header("Location:../../view_issues.php?status=done");
	 die;
}else{
	 header("Location:../../view_issues.php?status=fail");
	 die;
}
}else{
		 header("Location:../../view_issues.php?status=fail");
	 die;
}

?>