 <?php
// legercy method  of connecting to a database
 // Declare a new class for the pg_connect() connect parameters
class connectionParams {}
$param = new connectionParams;

$param->host = "localhost";
$param->port = 5432;
$param->dbname = "postgres";
$param->user = "postgres";
$param->password = "00000000";
// echo pg_connect();

$hostString = "";
foreach ($param as $key => $value) {

// concatenate the connect params with each iteration
$hostString = $hostString . $key . "=" .$value . " ";
}

// echo "\$hostString: ". $hostString. "";

// use the pg_connect() to create a connection
$conn = pg_connect($hostString);

// echo the connection response
// echo "\$conn: ". $conn. "";