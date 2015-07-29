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
<h3>Stored XSS [ Method : POST ] : LEVEL 6</h3>
<script src="../../Includes/Script/script.js"></script>
<form action="" method="post"> 
<a href="../5/index.php"><img src="../../Includes/Image/previous.png" width="150px" height="150px" title="Previous Step"></a>
<textarea name="text" ></textarea>
<a href="#"><img src="../../Includes/Image/next.png" width="150" height="150px" title="Next Step"></a><br>
<input type="submit" name="send" value="send" >
<input type="submit" name="delete" value="Clean Table">
<input type="button" name="viewsource" value="View Source" onclick="javascript:popUp('index.php?viewsource')"><br>
<input type="button" name="home" value="Back To Home" onclick="window.location.href='../index.html'">
<input type="button" name="checklist" value="Checklist" onclick="window.open('../../Checklist/index.php')"><br><br>

<?php

error_reporting(0);

//include db config
include_once("../../Includes/Config/config.php");
//clear table
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
$string = $_POST['text'];
$filter = array(
		'/input/im',
		'/alert/im',
		'/document/im',
		'/cookie/im',
		'/window/im',
		'/href/im',
		'/location/im',
		'/.js/im',
		'/.htm/im',
		'/.php/im',
		'/iframe/im',
		'/<b/im',
		'/onload/im',
		'/body/im',
		'/head/im',
		'/<a/im',
		'/h1/im',
		'/h2/im',
		'/h3/im',
		'/h4/im',
		'/h5/im',
		'/h6/im',
		'/li/im',
		'/ul/im',
		'/table/im',
		'/link/im',
		'/html/im',
		'/code/im',
		'/pre/im',
		'/area/im',
		'/localhost/im',
		'/textarea/im',
		'/div/im',
		'/br/im',
		'/tr/im',
		'/hr/im',
		'/td/im',
		'/select/im',
		'/option/im'
		);
$string = preg_replace($filter,'',$string);
$string = substr($string,0,40);
$string = base64_encode($string);
//insert into database
	if (isset($_POST['send'])){
	$query = mysql_query("INSERT INTO comments VALUES(null,'".$string."')");
		if ($query){
			echo "<h4>Insert Into Database !</h4><br>";
		}
	}
//view source 
	
//show result
$db_result = mysql_query("SELECT * FROM  comments");
	while ($result = mysql_fetch_array($db_result)){
?>
    <table align="center">
    <tr>
    <th>Your Comment:</th>
    	<td id="td_id"><?php echo $result['id']."~~~>"; ?></td>
	 	<td id="td_input"><input type="text" name="<?php echo base64_decode($result['input']); ?>" hidden></td>
	</tr>
    </table>
<?php
	}

?>
</form>
</center>
</body>
</html>
