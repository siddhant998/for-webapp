<?php
		// PHP Data Objects(PDO) Sample Code:
try {
    $conn = new PDO("sqlsrv:server = tcp:pandey998.database.windows.net,1433; Database = UniversityDB1", "serveradmin", "admin@123");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
    print("Error connecting to SQL Server.");
    die(print_r($e));
}
$roll=$_POST["roll"];

$sql="Select * from TopStudent where RollNo=$roll";
$rows=$conn->query($sql);

foreach ($rows as  $r)
{
	print( $r['FirstName'] . "\t");
	print( $r['GPA'] . "\t");
	print( $r['Major'] . "\n"); 
}

?>
