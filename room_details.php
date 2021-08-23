<?php 
include 'db.php';

$rid = $_POST['rid'];

$sql = "SELECT * From room WHERE room_no= '$rid'";  

$sql_room = $connection->query($sql);

foreach($sql_room  AS $info){	
	$room = $info;	
}
echo json_encode($room);exit;

?>