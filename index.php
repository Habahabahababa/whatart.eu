<?php

include 'log/log.php';
?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<title>WhattSearch</title>
<body>


<form action="index.php">
  Search:<br>
  <input type="text" name="query">
  <br>
  <br><br>
  <input type="submit" value="Submit">
</form> 

<?php
$query = $_GET['query'];
if ($query != null){
$sql = "SELECT domain, tld, siteName, description, siteText FROM Site where siteName like '%".$query."%' or domain like '%".$query."%' or description like '%".$query."%';";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
		?><div style="width:95%" border="0" align="center" cellpadding="0" cellspacing="0"`align="left"><?php
		echo "<p1><b>".$row["siteName"]."</b></p1><br/>";
		echo $row["description"]."<br/>";
		echo "<a href=https://".$row["domain"].".".$row["tld"].">".$row["domain"].".".$row["tld"]."</a><br/><br/><br/>";
		echo"</div>";
	}
} else {
//echo "Error: " . $query . "<br>" . $conn->error."<br/>";
	//echo "Oh, my! I... I'm terribly sorry. It seems like something has gone wrong.";
	echo "Unfortunantly I have no results";
}
}
else
{
	echo"Please enter a Search Querry";
}
	?>
	
	
</body>