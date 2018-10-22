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
$Id =$_POST["Id"];
$roll=$_POST["roll"];
$fname=$_POST["fn"];
$lname=$_POST["ln"];
$cgpa=$_POST["gpa"];
$Major=$_POST["major"];


$data=[
	'Id1'=>$Id,
 'roll1'=>$roll,
 'fname1'=>$fname,
 'lname1'=>$lname,
 'cgpa1'=>$cgpa,
 'major1'=>$Major,
];

$sql="insert into TopStudent(Id,RollNo,FirstName,LastName,GPA,Major) values(:Id1,:roll1,:fname1,:lname1,:cgpa1,:major1);";

$smt=$conn->prepare($sql);
$smt->execute($data);
//$conn.close();
Print("Data has been recorded");
?>
