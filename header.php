<!doctype html>
<html>
<head>
<title><?php echo $title ?></title>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="css/style.css" />
</head>

<body>
<div id="header">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td id="pagetitle">Listen now</td>
    <td id="player"><audio controls><source src="http://nebula.shoutca.st:8419/stream" type="audio/mp3">Your browser does not support the audio element, please use the alternatives here.</audio></td>
		<?php include 'links.htm' ?>
	<td id="last"><script type="text/javascript">
var currenttime = '<? print date("F d, Y H:i:s", time()+60*60*5)?>'

var serverdate=new Date(currenttime)

function padlength(what){
var output=(what.toString().length==1)? "0"+what : what
return output
}

function displaytime(){
serverdate.setSeconds(serverdate.getSeconds()+1)
var timestring=padlength(serverdate.getHours())+":"+padlength(serverdate.getMinutes())+":"+padlength(serverdate.getSeconds())
document.getElementById("servertime").innerHTML=timestring
}

window.onload=function(){
setInterval("displaytime()", 1000)
}

</script>Server time <span id="servertime"></span></td>
    </tr>
</table>
</div>
<div id="content">