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
<h3>Reflected XSS : LEVEL 8</h3>
<script src="../../Includes/Script/script.js"></script>
<form action="" method="get"> 
<a href="../7/index.php"><img src="../../Includes/Image/previous.png" width="150px" height="150px" title="Previous Step"></a>
<textarea name="text" ></textarea>
<a href="#"><img src="../../Includes/Image/next.png" width="150" height="150px" title="Next Step"></a><br>
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
		'/input/im',
		'/alert/im',
		'/document/im',
		'/cookie/im',
		'/window/im',
		'/SCRIPT/m',
		'/href/im',
		'/location/im',
		'/.js/im',
		'/.htm/im',
		'/.php/im',
		'/iframe/im',
		'/onload/im',
		'/onmouseover/im',
		'/onclick/im',
		'/onkeypress/im',
		'/onkeydown/im',
		'/onkeyup/im',
		'/onmouseout/im',
		'/script/m',
		'/body/im',
		'/head/im',
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
		'/textarea/im',
		'/div/im',
		'/br/im',
		'/tr/im',
		'/hr/im',
		'/td/im',
		'/select/im',
		'/option/im',
		'/object/im',
		'/style/im',
		'/\'/',
		'/\"/'
		);
		$string = preg_replace($filter,"",$string);
		$string = substr($string,0,35);
?>
    <table align="center">
    <tr>
    <th>Your Comment <font color="white">~~~></font></th>    
	 	<td id="td_input"><input type="text" name="<?php echo $string; ?>" hidden></td>
	</tr>
    </table>
<?php
	}

?>
</form>
</center>
</body>
</html>
