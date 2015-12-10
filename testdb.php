<?php

$server = "10.1.0.4";
$username = "appl";
$password = "appl";

$db = mysqli_connect($server, $username, $password);

if (!$db)
{
	die("Couldn't connect to MySQL\n");
}
print "connected to mariadb<br>\n";

mysqli_select_db($db, "appl");

$res = mysqli_query($db, "select * from x");

print "DB returns<br>\n";
if (mysqli_num_rows($res) > 0)
{
	while ($row = mysqli_fetch_assoc($res))
	{
		print "value = $row[x]<br>\n";
	}
}

error_log("test to error log\n");

mysqli_close($db);

?>
