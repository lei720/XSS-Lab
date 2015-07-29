<?php
error_reporting(0);

$file = file_get_contents("../Grabber/data.txt");

//Reflected;
$r01 = "Reflected/1/";
$r02 = "Reflected/2/";
$r03 = "Reflected/3/";
$r04 = "Reflected/4/";
$r05 = "Reflected/5/";
$r06 = "Reflected/6/";
$r07 = "Reflected/7/";
$r08 = "Reflected/8/";

if (strpos($file,$r01) !== false){
	$color_r01 = "green";
}else{
	$color_r01 = "error";
}
if (strpos($file,$r02) !== false){
	$color_r02 = "green";
}else{
	$color_r02 = "error";
}
if (strpos($file,$r03) !== false){
	$color_r03 = "green";
}else{
	$color_r03 = "error";
}
if (strpos($file,$r04) !== false){
	$color_r04 = "green";
}else{
	$color_r04 = "error";
}
if (strpos($file,$r05) !== false){
	$color_r05 = "green";
}else{
	$color_r05 = "error";
}
if (strpos($file,$r06) !== false){
	$color_r06 = "green";
}else{
	$color_r06 = "error";
}if (strpos($file,$r07) !== false){
	$color_r07 = "green";
}else{
	$color_r07 = "error";
}
if (strpos($file,$r08) !== false){
	$color_r08 = "green";
}else{
	$color_r08 = "error";
}

//Stored-GET;
$sg01 = "Stored-Get/1/";
$sg02 = "Stored-Get/2/";
$sg03 = "Stored-Get/3/";
$sg04 = "Stored-Get/4/";
$sg05 = "Stored-Get/5/";
$sg06 = "Stored-Get/6/";
$sg07 = "Stored-Get/7/";

if (strpos($file,$sg01) !== false){
	$color_sg01 = "green";
}else{
	$color_sg01 = "error";
}
if (strpos($file,$sg02) !== false){
	$color_sg02 = "green";
}else{
	$color_sg02 = "error";
}
if (strpos($file,$sg03) !== false){
	$color_sg03 = "green";
}else{
	$color_sg03 = "error";
}
if (strpos($file,$sg04) !== false){
	$color_sg04 = "green";
}else{
	$color_sg04 = "error";
}
if (strpos($file,$sg05) !== false){
	$color_sg05 = "green";
}else{
	$color_sg05 = "error";
}
if (strpos($file,$sg06) !== false){
	$color_sg06 = "green";
}else{
	$color_sg06 = "error";
}if (strpos($file,$sg07) !== false){
	$color_sg07 = "green";
}else{
	$color_sg07 = "error";
}

//Stored-POST;
$sp01 = "Stored-Post/1/";
$sp02 = "Stored-Post/2/";
$sp03 = "Stored-Post/3/";
$sp04 = "Stored-Post/4/";
$sp05 = "Stored-Post/5/";
$sp06 = "Stored-Post/6/";
$sp07 = "Stored-Post/7/";

if (strpos($file,$sp01) !== false){
	$color_sp01 = "green";
}else{
	$color_sp01 = "error";
}
if (strpos($file,$sp02) !== false){
	$color_sp02 = "green";
}else{
	$color_sp02 = "error";
}
if (strpos($file,$sp03) !== false){
	$color_sp03 = "green";
}else{
	$color_sp03 = "error";
}
if (strpos($file,$sp04) !== false){
	$color_sp04 = "green";
}else{
	$color_sp04 = "error";
}
if (strpos($file,$sp05) !== false){
	$color_sp05 = "green";
}else{
	$color_sp05 = "error";
}
if (strpos($file,$sp06) !== false){
	$color_sp06 = "green";
}else{
	$color_sp06 = "error";
}
?>
<!DOCTYPE html>
<html>
<head>
<title>.: Check List :.</title>
</head>
<body>
<style>
body{
	font-family:Lucida Sans Unicode;
	background:#111;
	color:white;
}
td{
	padding-left:30px;
	padding-right:50px;
	padding-top:8px;
	padding-bottom:8px;
	text-align:center;
}
</style>
<center>
	<table>
		<tr>
			<td>LEVEL</td>
			<td>Reflected</td>
			<td>Stored [GET]</td>
			<td>Stored [POST]</td>
		</tr>
		<tr>
			<td>1</td>
			<td bgcolor="<?php echo $color_r01;?>"></td>
			<td bgcolor="<?php echo $color_sg01;?>"></td>
			<td bgcolor="<?php echo $color_sp01;?>"></td>
		</tr>
		<tr>
			<td>2</td>
			<td bgcolor="<?php echo $color_r02;?>"></td>
			<td bgcolor="<?php echo $color_sg02;?>"></td>
			<td bgcolor="<?php echo $color_sp02;?>"></td>
		</tr>
		
		<tr>
			<td>3</td>
			<td bgcolor="<?php echo $color_r03;?>"></td>
			<td bgcolor="<?php echo $color_sg03;?>"></td>
			<td bgcolor="<?php echo $color_sp03;?>"></td>
		</tr>
		<tr>
			<td>4</td>
			<td bgcolor="<?php echo $color_r04;?>"></td>
			<td bgcolor="<?php echo $color_sg04;?>"></td>
			<td bgcolor="<?php echo $color_sp04;?>"></td>
		</tr>
		<tr>
			<td>5</td>
			<td bgcolor="<?php echo $color_r05;?>"></td>
			<td bgcolor="<?php echo $color_sg05;?>"></td>
			<td bgcolor="<?php echo $color_sp05;?>"></td>
		</tr>
		<tr>
			<td>6</td>
			<td bgcolor="<?php echo $color_r06;?>"></td>
			<td bgcolor="<?php echo $color_sg06;?>"></td>
			<td bgcolor="<?php echo $color_sp06;?>"></td>
		</tr>
		<tr>
			<td>7</td>
			<td bgcolor="<?php echo $color_r07;?>"></td>
			<td bgcolor="<?php echo $color_sg07;?>"></td>
			<td bgcolor="Orange"><font color="black">NONE</font></td>
		</tr>
		<tr>
			<td>8</td>
			<td bgcolor="<?php echo $color_r08;?>"></td>
			<td bgcolor="Orange"><font color="black">NONE</font></td>
			<td bgcolor="Orange"><font color="black">NONE</font></td>
		</tr>
	</table>
</center>

</body>
</html>