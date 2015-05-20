<?php
    header("Content-type: text/css; charset: UTF-8");
    include 'config.php';
?>

body {
	background:linear-gradient(45deg ,white, <?php echo $background; ?>) no-repeat center center fixed;
	-webkit-background-size: cover;
	-moz-background-size: cover;
	-o-background-size: cover;
	background-size: cover;
    margin-left:75px;
	margin-right:75px;
	margin-bottom:55px;
	#position:relative;
	font-family:Helvetica;
   }

h1 {
	font-size:250%;
    font-family:Helvetica;
    border-bottom:solid thin black;
   }

div.status {
	margin-top:50px;
   }

td {
    text-align: center;
    font-family:Helvetica;
   }

th {
    text-align: center;
    font-family:Helvetica;
    font-size: 13px;
    font-weight:900;
   }

tbody tr:hover {
	background: black;
	color: white;
   }

.status{
	-webkit-box-shadow: 0px 0px 62px 8px rgba(0,0,0,0.36);
	-moz-box-shadow: 0px 0px 62px 8px rgba(0,0,0,0.36);
	box-shadow: 0px 0px 62px 8px rgba(0,0,0,0.36);
	position:relative;
   }

.switchoff{
	-moz-box-shadow:inset 0px 1px 0px 0px #f7c5c0;
	-webkit-box-shadow:inset 0px 1px 0px 0px #f7c5c0;
	box-shadow:inset 0px 1px 0px 0px #f7c5c0;
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #fc8d83), color-stop(1, #e4685d));
	background:-moz-linear-gradient(top, #fc8d83 5%, #e4685d 100%);
	background:-webkit-linear-gradient(top, #fc8d83 5%, #e4685d 100%);
	background:-o-linear-gradient(top, #fc8d83 5%, #e4685d 100%);
	background:-ms-linear-gradient(top, #fc8d83 5%, #e4685d 100%);
	background:linear-gradient(to bottom, #fc8d83 5%, #e4685d 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#fc8d83', endColorstr='#e4685d',GradientType=0);
	background-color:#fc8d83;
	-moz-border-radius:6px;
	-webkit-border-radius:6px;
	border-radius:6px;
	border:1px solid #d83526;
	display:inline-block;
	cursor:pointer;
	color:#ffffff;
	font-family:Helvetica;
	font-size:15px;
	font-weight:bold;
	padding:6px 24px;
	text-decoration:none;
	text-shadow:0px 1px 0px #b23e35;
   }

.switchoff:hover {
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #e4685d), color-stop(1, #fc8d83));
	background:-moz-linear-gradient(top, #e4685d 5%, #fc8d83 100%);
	background:-webkit-linear-gradient(top, #e4685d 5%, #fc8d83 100%);
	background:-o-linear-gradient(top, #e4685d 5%, #fc8d83 100%);
	background:-ms-linear-gradient(top, #e4685d 5%, #fc8d83 100%);
	background:linear-gradient(to bottom, #e4685d 5%, #fc8d83 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#e4685d', endColorstr='#fc8d83',GradientType=0);
	background-color:#e4685d;
   }

.switchoff:active {
	position:relative;
	top:1px;
   }

.switchon{
	-moz-box-shadow:inset 0px 1px 0px 0px #d9fbbe;
	-webkit-box-shadow:inset 0px 1px 0px 0px #d9fbbe;
	box-shadow:inset 0px 1px 0px 0px #d9fbbe;
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #b8e356), color-stop(1, #a5cc52));
	background:-moz-linear-gradient(top, #b8e356 5%, #a5cc52 100%);
	background:-webkit-linear-gradient(top, #b8e356 5%, #a5cc52 100%);
	background:-o-linear-gradient(top, #b8e356 5%, #a5cc52 100%);
	background:-ms-linear-gradient(top, #b8e356 5%, #a5cc52 100%);
	background:linear-gradient(to bottom, #b8e356 5%, #a5cc52 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#b8e356', endColorstr='#a5cc52',GradientType=0);
	background-color:#b8e356;
	-moz-border-radius:6px;
	-webkit-border-radius:6px;
	border-radius:6px;
	border:1px solid #83c41a;
	display:inline-block;
	cursor:pointer;
	color:#ffffff;
	font-family:Helvetica;
	font-size:15px;
	font-weight:bold;
	padding:6px 24px;
	text-decoration:none;
	text-shadow:0px 1px 0px #86ae47;
   }

.switchon:hover {
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #a5cc52), color-stop(1, #b8e356));
	background:-moz-linear-gradient(top, #a5cc52 5%, #b8e356 100%);
	background:-webkit-linear-gradient(top, #a5cc52 5%, #b8e356 100%);
	background:-o-linear-gradient(top, #a5cc52 5%, #b8e356 100%);
	background:-ms-linear-gradient(top, #a5cc52 5%, #b8e356 100%);
	background:linear-gradient(to bottom, #a5cc52 5%, #b8e356 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#a5cc52', endColorstr='#b8e356',GradientType=0);
	background-color:#a5cc52;
   }

.switchon:active {
	position:relative;
	top:1px;
   }


.settings {
	-moz-box-shadow:inset 0px 1px 0px 0px #bbdaf7;
	-webkit-box-shadow:inset 0px 1px 0px 0px #bbdaf7;
	box-shadow:inset 0px 1px 0px 0px #bbdaf7;
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #79bbff), color-stop(1, #378de5));
	background:-moz-linear-gradient(top, #79bbff 5%, #378de5 100%);
	background:-webkit-linear-gradient(top, #79bbff 5%, #378de5 100%);
	background:-o-linear-gradient(top, #79bbff 5%, #378de5 100%);
	background:-ms-linear-gradient(top, #79bbff 5%, #378de5 100%);
	background:linear-gradient(to bottom, #79bbff 5%, #378de5 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#79bbff', endColorstr='#378de5',GradientType=0);
	background-color:#79bbff;
	-moz-border-radius:6px;
	-webkit-border-radius:6px;
	border-radius:6px;
	border:1px solid #84bbf3;
	display:inline-block;
	cursor:pointer;
	color:#ffffff;
	font-family:arial;
	font-size:15px;
	font-weight:bold;
	padding:6px 24px;
	text-decoration:none;
	text-shadow:0px 1px 0px #528ecc;
	float: right;
}
.settings:hover {
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #378de5), color-stop(1, #79bbff));
	background:-moz-linear-gradient(top, #378de5 5%, #79bbff 100%);
	background:-webkit-linear-gradient(top, #378de5 5%, #79bbff 100%);
	background:-o-linear-gradient(top, #378de5 5%, #79bbff 100%);
	background:-ms-linear-gradient(top, #378de5 5%, #79bbff 100%);
	background:linear-gradient(to bottom, #378de5 5%, #79bbff 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#378de5', endColorstr='#79bbff',GradientType=0);
	background-color:#378de5;
}
.settings:active {
	position:relative;
	top:1px;
}

.textbox {
	-webkit-border-radius: 6px;
	-moz-border-radius: 6px;
	border-radius: 6px;
	border: 1px solid #848484;
	outline:0;
	height: 25px;
	width: 250px;
        -webkit-box-shadow: 0px 0px 62px 8px rgba(0,0,0,0.36);
        -moz-box-shadow: 0px 0px 62px 8px rgba(0,0,0,0.36);
        box-shadow: 0px 0px 62px 8px rgba(0,0,0,0.36);
	padding-left: 5px;
	padding-right: 5px;
}

h2 {
    font-family:Helvetica;
    border-bottom:solid thin black;
    position:relative;
   }

.saveConfig {
	-moz-box-shadow:inset 0px 1px 0px 0px #a4e271;
	-webkit-box-shadow:inset 0px 1px 0px 0px #a4e271;
	box-shadow:inset 0px 1px 0px 0px #a4e271;
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #89c403), color-stop(1, #77a809));
	background:-moz-linear-gradient(top, #89c403 5%, #77a809 100%);
	background:-webkit-linear-gradient(top, #89c403 5%, #77a809 100%);
	background:-o-linear-gradient(top, #89c403 5%, #77a809 100%);
	background:-ms-linear-gradient(top, #89c403 5%, #77a809 100%);
	background:linear-gradient(to bottom, #89c403 5%, #77a809 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#89c403', endColorstr='#77a809',GradientType=0);
	background-color:#89c403;
	-moz-border-radius:6px;
	-webkit-border-radius:6px;
	border-radius:6px;
	border:1px solid #74b807;
	display:inline-block;
	cursor:pointer;
	color:#ffffff;
	font-family:arial;
	font-size:15px;
	font-weight:bold;
	padding:6px 30px;
	text-decoration:none;
	text-shadow:0px 1px 0px #528009;
}
.saveConfig:hover {
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #77a809), color-stop(1, #89c403));
	background:-moz-linear-gradient(top, #77a809 5%, #89c403 100%);
	background:-webkit-linear-gradient(top, #77a809 5%, #89c403 100%);
	background:-o-linear-gradient(top, #77a809 5%, #89c403 100%);
	background:-ms-linear-gradient(top, #77a809 5%, #89c403 100%);
	background:linear-gradient(to bottom, #77a809 5%, #89c403 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#77a809', endColorstr='#89c403',GradientType=0);
	background-color:#77a809;
}
.saveConfig:active {
	position:relative;
	top:1px;
}

.cancelConfig {
	-moz-box-shadow:inset 0px 1px 0px 0px #f29c93;
	-webkit-box-shadow:inset 0px 1px 0px 0px #f29c93;
	box-shadow:inset 0px 1px 0px 0px #f29c93;
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #fe1a00), color-stop(1, #ce0100));
	background:-moz-linear-gradient(top, #fe1a00 5%, #ce0100 100%);
	background:-webkit-linear-gradient(top, #fe1a00 5%, #ce0100 100%);
	background:-o-linear-gradient(top, #fe1a00 5%, #ce0100 100%);
	background:-ms-linear-gradient(top, #fe1a00 5%, #ce0100 100%);
	background:linear-gradient(to bottom, #fe1a00 5%, #ce0100 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#fe1a00', endColorstr='#ce0100',GradientType=0);
	background-color:#fe1a00;
	-moz-border-radius:6px;
	-webkit-border-radius:6px;
	border-radius:6px;
	border:1px solid #d83526;
	display:inline-block;
	cursor:pointer;
	color:#ffffff;
	font-family:arial;
	font-size:15px;
	font-weight:bold;
	padding:6px 24px;
	text-decoration:none;
	text-shadow:0px 1px 0px #b23e35;
}
.cancelConfig:hover {
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #ce0100), color-stop(1, #fe1a00));
	background:-moz-linear-gradient(top, #ce0100 5%, #fe1a00 100%);
	background:-webkit-linear-gradient(top, #ce0100 5%, #fe1a00 100%);
	background:-o-linear-gradient(top, #ce0100 5%, #fe1a00 100%);
	background:-ms-linear-gradient(top, #ce0100 5%, #fe1a00 100%);
	background:linear-gradient(to bottom, #ce0100 5%, #fe1a00 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#ce0100', endColorstr='#fe1a00',GradientType=0);
	background-color:#ce0100;
}
.cancelConfig:active {
	position:relative;
	top:1px;
}

#footer {
    position:fixed;
    bottom: 0;
    width: 100%;
    background-color: #CFCFCF;
    height: 4em;
    text-align: center;
    left:0; right:0; bottom:0;
    font-family: Helvetica;
    font-size: 11px;
   }

