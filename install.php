<!DOCTYPE html>
<html>
<head>
<title>Install XSS Lab</title>
<link rel="stylesheet" type="text/css" href="../Files/style.css">
</head>
<body>
</body>
</html>
<?php
$mysqlHostName = "localhost";
$mysqlUserName = "root";
$mysqlPassword = "";
$mysqlDatabaseName = "xss";
try
{
	$connect = new PDO("mysql:host=$mysqlHostName","$mysqlUserName","$mysqlPassword");

	if ($connect){
		$connect->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		
		$sql = "CREATE DATABASE IF NOT EXISTS xss";
		$stmt = $connect->prepare($sql);
		$create_db = $stmt->execute();
		
			if ($create_db){
					//use created db
					$sql = "USE $mysqlDatabaseName";
					$stmt = $connect->prepare($sql);
					$use_db = $stmt->execute();
						if ($use_db){
							//create table
							$sql = "CREATE TABLE IF NOT EXISTS comments (
									id int(255) NOT NULL AUTO_INCREMENT PRIMARY KEY,
									input longtext COLLATE utf8_persian_ci NOT NULL
									) ENGINE=InnoDB DEFAULT CHARSET=utf8";
							$stmt = $connect->prepare($sql);
							$create_table = $stmt->execute();
								if ($create_table){
								}
						}
			}		
	} 
	

}
catch(PDOException $e)
{
	echo "Erro: ".$e->getMessage();
}
$connect = null;

//Code By B14CK SPID3R
//Ashiyane Digital Security Team
//Yaho0 ID : B14CK.SPID3R@yahoo.com
//Go0D LuCK bro ...
?>
