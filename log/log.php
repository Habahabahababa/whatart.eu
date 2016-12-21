<?php
include '../aut.php';

// Check connection
if (!$conn) {
    die("Oh, my! I... I'm terribly sorry. It seems like something has gone wrong.");
}
date_default_timezone_set('CET');

$ip = getIp();
$url = getUrl();
$d1 = date('Y-m-d H:i:s');
$d2 = date('Y-m-d H:i:s');

$date = date('Y-m-d H:i:s');

    $query = "INSERT INTO Action (ip, url, date) 
	VALUES ('$ip', '$url', '$date')";
	if ($conn->multi_query($query) === TRUE) {
    //echo "New records created successfully";
} else {
    //echo "Error: " . $query . "<br>" . $conn->error."<br/>";
	echo "Oh, my! I... I'm terribly sorry. It seems like something has gone wrong.";
}




//$conn->close();

function getIp(){
	return $_SERVER['REMOTE_ADDR'];
}
function getUrl(){
	return $_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];
}
?>