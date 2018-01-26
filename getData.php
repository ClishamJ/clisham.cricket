<?php

// Much thanks to Lionite for their crash course on MySQLI through PHP (where most of these functions come from)
// https://www.binpress.com/tutorial/using-php-with-mysql-the-right-way/17


// Server-side database connection info, above public_html for security 
require_once("../config.ini.php"); 

// Connects to database through mysqli
function db_connect(){
	static $connection;
	if(!isset($connection)) {
		//$config = parse_ini_file('../config.ini');
		//print_r("dumping: ");
		//var_dump($config);
		//print_r("<br />");
		$connection = mysqli_connect('localhost',DB_USER,DB_PASSWORD,DB_NAME);
	}
	if($connection === false){
		return mysqli_connect_error();
	}
	return $connection;
}

// Performs a query through mysqli
function db_query($query){
	$connection = db_connect();
	$result = mysqli_query($connection,$query);
	
	if($result === false){
		$error = db_error();
	}
	return $result;
}

// Returns the current MySQL error
function db_error() {
	$connection = db_connect();
	return mysqli_error($connection);
}

// Ease of use function for select queries, grabs the data and formats into array for processing
function db_select($query){
	$rows = array();
	$result = db_query($query);
	if(result === false){
		return db_error();
	}
	while($row = mysqli_fetch_assoc($result)){
		$rows[] = $row;
	}
	return $rows;
}

// Sanitizes data and quotes it in preparation for queries
function db_quote($value){
	$connection = db_connect();
	return "'" . mysqli_real_escape_string($connection,$value) . "'";
}

// Left over test function from initial setup
function testDB(){
	print_r("Testing DB");
	print_r("<br />");
	$connection = db_connect();
	if (mysqli_connect_errno()) {
    	printf("Connect failed: %s\n", mysqli_connect_error());
    	exit();
	}
	$query = "SELECT * FROM employees WHERE emp_no = '499452'";
	if ($result = mysqli_query($connection, $query)) {
		print_r("successful query <br />");
    		/* fetch associative array */
    		while ($row = mysqli_fetch_assoc($result)) {
        		print_r($row);
    		}
    		/* free result set */
    		mysqli_free_result($result);
	}
	print_r("<br />");
	print_r("Done Testing DB");
}
?>
