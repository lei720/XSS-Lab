<?php
if (isset($_GET['viewsource'])){
		highlight_file(__FILE__);
		exit(1);
}
?>
<!DOCTYPE html>
<html>
<head>
<title>~~ XSS LAB ~~</title>
<link rel="stylesheet" type="text/css" href="../../Includes/Style/style.css">
</head>
<body>
<center>
<h1>Developing By B14CK SPID3R</h1>
<h2>.: Cross Site Scripting Lab :.</h2>
<h3>Stored XSS [ Method : POST ] : LEVEL 1</h3>
<script src="../../Includes/Script/script.js"></script>
<form action="" method="post"> 
<a href="../index.html"><img src="../../Includes/Image/previous.png" width="150px" height="150px" title="HOME"></a>
<textarea name="text" ></textarea>
<a href="../2/index.php"><img src="../../Includes/Image/next.png" width="150" height="150px" title="Next Step"></a><br>
<input type="submit" name="send" value="send" >
<input type="submit" name="delete" value="Clean Table">
<input type="button" name="viewsource" value="View Source" onclick="javascript:popUp('index.php?viewsource')"><br>
<input type="button" name="home" value="Back To Home" onclick="window.location.href='../index.html'">
<input type="button" name="checklist" value="Checklist" onclick="window.open('../../Checklist/index.php')"><br><br>
<?php

error_reporting(0);

//include db config
include_once("../../Includes/Config/config.php");
	if (isset($_POST['delete'])){
		$query = "DELETE FROM comments";
		$check = mysql_query($query);
		$id = "ALTER TABLE `comments` auto_increment = 1";
		$zero = mysql_query($id);
			if($check){
				echo "<script>alert('Data Was Deleted!')</script>";
			}
	}
//get input & Filtering!
$string = base64_encode($_POST['text']);
	if (isset($_POST['send'])){
	$query = mysql_query("INSERT INTO comments VALUES(null,'".$string."')");
		if ($query){
			echo "<h4>Insert Into Database !</h4><br>";
		}
	}
//show result
$db_result = mysql_query("SELECT * FROM  comments");
	while ($result = mysql_fetch_array($db_result)){
?>
    <table align="center">
    <tr>
    <th>Your Comment:</th>
    	<td id="td_id"><?php echo $result['id']."~~~>"; ?></td>
	 	<td id="td_input"><?php echo base64_decode($result['input']); ?></td>
	</tr>
    </table>
<?php
	}

?>
</form>
</center>
</body>
</html>
