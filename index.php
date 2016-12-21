<?php

include 'log/log.php';
?>

<title>WhattSearch</title>

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
$sql = "SELECT domain, tld, siteName description, siteText FROM Site where siteName like '%".$query."%' or domain like '%".$query."%' or description like '%".$query."%';";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
		echo "<b>".$row["title"]."<b/><br/><br/>";
		echo $row["id"]."<br/><br/>";
		echo $row["domain"].".".$row["tld"]."<br/><br/><br/><br/>";
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
	
	
	<?php

?>