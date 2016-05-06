<html>
<head>
</head>
<body>
<?php
$hostname = "students";
$username = "z1759559";
$password = "19920912";
$db = "z1759559";

$conn = mysqli_connect($hostname,$username,$password,$db);
if (!$conn) {
die("could not connect to the database:" .mysqli_connect_error());
}
?>
</body>
</html>

