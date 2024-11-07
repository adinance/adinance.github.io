<?php 
require("../inc/db.php");

$action 				= $_POST['action'];
$page 				= $_POST['page'];
$pagesize 				= $_POST['pagesize'];
$updateRecordsArray 	= $_POST['recordsArray'];

if ($action == "updateRecordsListings"){
	
	//$listingCounter = 1;   // no paginate
	$listingCounter = (($page -1)*$pagesize)+1;
	foreach ($updateRecordsArray as $recordIDValue) {
		$query = "UPDATE main_work SET order_id = " . $listingCounter . " WHERE id = " . $recordIDValue;
		mysql_query($query) or die('Error, insert query failed');
		$listingCounter = $listingCounter + 1;	
	}
	
	echo '<pre>';
	print_r($updateRecordsArray);
	echo '</pre>';
	echo 'If you refresh the page, you will see that records will stay just as you modified.';
}
?>