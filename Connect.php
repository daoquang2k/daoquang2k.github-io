<?php
$conn_string="host=ec2-34-197-141-7.compute-1.amazonaws.com port=5432 dbname=d8nfumlb98fmp7 user=tvdelzdmvuurnk password=13550e681eae3fe71cbf618a1b46fb83c28a8c0ffb6c16c7a3e819949f27681d"
$dbconn= pg_connect($conn_string);
if (isset($_POST['username'])) {
	# code...
	$username = $_POST['username'];
}
if (isset($_POST['pass'])) {
	# code...
	$pass = $_POST['pass'];
}
$result =pg_query($dbconn, query: "SELECT * FROM tblAccount");
while ($row=pg_fetch_row($result)) {
	# code...
	if ($row[0]==$username&&$row[1]==$pass) {
	# code...
		echo "Login successful!";
	}
}
?>