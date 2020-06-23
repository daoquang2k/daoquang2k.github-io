<?php 
$connect ="host=ec2-54-88-130-244.compute-1.amazonaws.com port=5432 dbname=ddgjtpndnvhahp user=
zvstahgpwdpbzo password=43429b7da3bcccb8bada4a38976b48a930fe6da61e86a51346db09c272f49d25";
$dbconn=pg_connect($connect);
if (isset($_POST['username'])) {
	# code...
	$username = $_POST['username'];
}
if (isset($_POST['pass'])) {
	# code...
	$pass=$_POST['pass'];
}
$sql = "SELECT * from Account where _user='".$username."'and _pass ='".$pass."'";
$result = pg_query($dbconn,$sql);
$row = pg_num_rows($result);
if ($row==1)
{
	echo "Login success";
	header("location: Home.php");
}
else
{
	echo " Login failed";
}
 ?>
