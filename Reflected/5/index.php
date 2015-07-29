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
<h3>Reflected XSS : LEVEL 5</h3>
<script src="../../Includes/Script/script.js"></script>
<form action="" method="get"> 
<a href="../4/index.php"><img src="../../Includes/Image/previous.png" width="150px" height="150px" title="Previous Step"></a>
<textarea name="text" ></textarea>
<a href="../6/index.php"><img src="../../Includes/Image/next.png" width="150" height="150px" title="Next Step"></a><br>
<input type="submit" name="send" value="send" >
<input type="button" name="viewsource" value="View Source" onclick="javascript:popUp('index.php?viewsource')"><br>
<input type="button" name="home" value="Back To Home" onclick="window.location.href='../index.html'">
<input type="button" name="checklist" value="Checklist" onclick="window.open('../../Checklist/index.php')"><br><br>
<br><br><br>
<?php

error_reporting(0);

	if (isset($_GET['send'])){
		$string = $_GET['text'];
		$filter = array(
		'input',
		'INPUT',
		'alert',
		'prompt',
		'document',
		'cookie',
		'window',
		'href',
		'location',
		'<SCRIPT',
		'<script',
		'<iframe',
		'<IFRAME',
		'<b',
		'<B',
		'onload',
		'ONLOAD',
		'src',
		'SRC',
		'<body',
		'<BODY',
		'<head',
		'<HEAD',
		'<a',
		'<A',
		'<h1',
		'<h2',
		'<h3',
		'<h4',
		'<h5',
		'<h6',
		'<H1',
		'<H2',
		'<H3',
		'<H4',
		'<H5',
		'<H6'
		);
		$string = str_replace($filter,"",$string);
?>
    <table align="center">
    <tr>
    <th>Your Comment <font color="white">~~~></font></th>    
	 	<td id="td_input"><?php echo $string; ?></td>
	</tr>
    </table>
<?php
	}

?>
</form>
</center>
</body>
</html>
