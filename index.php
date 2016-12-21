<?php

include 'log/log.php';
?>

<title>WhattSearch</title>

<?php
$query = $_GET['query'];
$sql = "SELECT id, siteName FROM Site where siteName like '%".$query."%' or domain like '%".$query."%' or description like '%".$query."%';";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
        echo "id = ".$row["id"]."<br/>";
		echo "title = ".$row["title"]."<br/><br/>";
	}
} else {
//echo "Error: " . $query . "<br>" . $conn->error."<br/>";
	echo "Oh, my! I... I'm terribly sorry. It seems like something has gone wrong.";
	echo "This is not what you're looking for";
}
?>

Please enter a Search Querry