
hello there 1
<?php

print "hello there 2\n";

$server = 10.1.0.4;
$username = "appl";
$password = "appl";

$db = mysqli_connect($server, $username, $password);

if (!$db)
{
	die("Couldn't connect to MySQL\n");
}

mysqli_select_db("appl", $db);

$res = mysqli_query("select * from x", $db);

if (mysqli_num_rows($res) > 0)
{
	while ($row = mysqli_fetch_assoc($res))
	{
		print "value = $row["x"]\n";
	}
}

log_error("test to error log\n";

mysqli_close($db);

?>
