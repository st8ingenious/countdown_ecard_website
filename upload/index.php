<!-- 
                     E-card online announcement with countdown
    
    Copyright (C) 2015  Efstathios Kladis

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 2 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.
    
       GNU GENERAL PUBLIC LICENSE
          Version 2, June 1991
    _______________________________________________________________________
   
	 Disclaimer
	 All pictures used on this project have been found on Google or from other different sources all over the Internet, and are assumed to be in public domain and are displayed under the fair use principle. If you are the owner of the images and you believe that their use is violating any copyright law, please contact me at info@bettercallstathis.com and I will delete them asap.

	 
	 Description     
     Create an awesome announcement site and share it with you friends!!
	 
	 How to use
	 Change any text you want to fit your needs
     Replace the images with your own and simply rename them with the current names of the pictures
	 
 Original can be found at https://github.com/st8ingenious/e-card_online_announcement
-->


<?php
   date_default_timezone_set('Europe/Athens');                         //SET TIMEZONE
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta property="og:image" content="./fb.png" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>E-card Countdown</title>
<link rel='shortcut icon' type='image/x-icon' href='./favicon.ico' />
<style type="text/css">
.divWholePage {
				position: absolute;
				top: 0;
				left: 0;
			 right: 0;
				bottom: 0;
				text-align:center;
				}
			.divSection {
				display: table;
				width: 100%;
				min-height: 50%;
				height: 50%;
				z-index: 0;
				}
			.divText {
				font-family: "Average";
				font-size: 18px;
				line-height: 115%;
				padding: 1%;
				display: table-cell;
				vertical-align: middle;
				}
			.divBackgroundImage {
				height: 100%;
				width: 100%;
				position: fixed;
				right: 0;
				
				-webkit-background-size: cover;
				-moz-background-size: cover;
				-o-background-size: cover;
				background-size: cover;
				background-position: center;
				background-repeat: no-repeat;
				
				z-index: -1;
				opacity: .3;
				}
			.imgBackground {
				float: left;
				}
.txt1 {
	font-family: Verdana, Geneva, sans-serif;
	font-size: 36px;
	font-weight: bold;
	color: #0923B6;
	
}
.txt2 {
	font-family: "Comic Sans MS", cursive;
	font-size: 24px;
	font-weight: bold;
	color: #000;
	font-style: normal;
}
.txt3 {
	font-family: "Comic Sans MS", cursive;
	font-size: 18px;
	color: #000;
	font-style: normal;
}

 #loading {width: 100%;height: 100%;top: 0px;background-color: #fff;left: 0px;position: fixed;display: block; z-index: 99}

#loading-image {position: absolute;top: 40%;left: 45%;z-index: 100} 

</style>
<script type="text/javascript">
        window.onload = function(){ document.getElementById("loading").style.display = "none" }   
    </script>
</head>
<body>
<div id="loading">
<img id="loading-image" src="./load.gif" alt="Loading..." />
</div>  
<div class="divWholePage">
<div class="divSection">
 <div class="divBackgroundImage" style="background-image: url(./mainimage.jpg);">
 </div>
 <div class="divText">
<?php $target = mktime(3, 0, 0, 10, 30, 2015) ;                                          //SET DATE                        
$today = time () ; $difference =($target-$today) ; 
$year = 23667694; $progress = 100 - ($difference/$year*100); 
?> 
<img src="fb.png" width="379" height="260" alt="img" />
<span class="txt1">
<?php
print "<br><br>Baby is coming!!!!!!!!<br><br>";                                          //YOU CAN CHANGE THIS
?>
<img src="B7.png" width="102" height="100" alt="img" /> </span>
<span  class="txt2">
<?php
echo "<br> <b>Baby in progress.. " . (int) $progress . "% done! :P</b><br>";              //YOU CAN CHANGE THIS
$bar1 = (int) $progress; $bar2 = 100 - $bar1;
echo "<table height=40 align=center width=700><tr><td bgcolor=6599FF width= $bar1><td bgcolor=FFBAD2 width= $bar2></tr></table><br><br>" 
?>
</span>
<div class="timerr" style="font-size:70px; font-family:Verdana, Geneva, sans-serif; color: #0923B6;">
<span id="countdown">
loading...
</span>
<script type="text/javascript">
var target_date = new Date("Oct 30, 2015").getTime();                                    //SET DATE AGAIN


var days, hours, minutes, seconds;

var countdown = document.getElementById("countdown");

setInterval(function () { 

	 d = new Date(); 
	localTime = d.getTime(); 
	localOffset = d.getTimezoneOffset() * 60000;
	utc = localTime + localOffset;
	offset = 3;  
    athens = utc + (3600000*offset);
    var current_date = new Date(athens);
    var seconds_left = (target_date - current_date) / 1000;

    days = parseInt(seconds_left / 86400);
    seconds_left = seconds_left % 86400;
    
    hours = parseInt(seconds_left / 3600);
    seconds_left = seconds_left % 3600;
    
    minutes = parseInt(seconds_left / 60);
    seconds = parseInt(seconds_left % 60);
    
    countdown.innerHTML = days + "d - " + hours + "h - " + minutes + "m - " + seconds + "s";   

}, 1000); 
</script>
<span  class="txt3">
<br><br><br>
©2015 Made by bettercallstathis.com <br>
 <a href="https://github.com/st8ingenious">Open Source</a> 
<br>
</span>
</div>
</div>
</div>
</body>
</html>
