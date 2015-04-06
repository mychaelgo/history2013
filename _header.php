<html>
	<head>
		<title>HIMTI - HISTORY 2013</title>
		
		<script type="text/javascript" src="mag.js"></script>
		<link rel="stylesheet" href="font/stylesheet.css" type="text/css" charset="utf-8" />
		<style>
			#menu a:link {text-decoration:none; color:white;}
			#menu a:visited {text-decoration:none; color:white;}
			#menu a:hover {text-decoration:none; color:white;}
			#menu a:active {text-decoration:none; color:white;}
			#wrapper {
				display: block;
				z-index: 1;
				position: relative;
				width: 900px;
				margin: 0 auto;
				//background-color: red;
			}
			#rightcon{
				float: right;
				width: 650px;
				//background-color: yellow;
				height: 600px;
				z-index: 2;
			}
			#content{
				float: left;
				width: 250px;
				//background-color: red;
				text-align:center
			}
			#bg {
				position:fixed;
				top:-50%;
				left:-50%;
				width:200%;
				height:200%;
			}
			#bg img {
				position:absolute;
				top:0;
				left:0;
				right:0;
				bottom:0;
				margin:auto;
				min-width:50%;
				min-height:50%;
			}
			.title {
				font-family: "sujetaregular", sans-serif;
				color: white;
				font-size: 16pt;
				text-shadow:
				 -2px -2px 0 #1c5689,
				  2px -2px 0 #1c5689,
				  -2px 2px 0 #1c5689,
				   2px 2px 0 #1c5689;
				 //  -webkit-text-stroke-width: 2px;
				  //-webkit-text-stroke-color: #1c5689;
				text-align: center;

			}
			.menu {
				font-family: "sujetaregular", sans-serif;
				color: rgb(197, 249, 232);
				font-size: 25pt;
			}
			#menu li {
				list-style: none;
				display: inline;
				margin-left: 12px;
				margin-right: 12px;
			}
			#logos img {
				height: 50px;
				text-align: center;
			}
			#content_2 {
				width: 650px;
				height:  390px;
				//overflow: hidden;
				top: 212px;
				position: relative;
			}
			#backgroundy{
				opacity: 0.4;
				position:absolute;
				top: 0;
				left: 0;
				right: 0;
				bottom: 0;
				background-color: black;
				-webkit-border-bottom-right-radius: 10px;
				-webkit-border-bottom-left-radius: 10px;
				-moz-border-radius-bottomright: 10px;
				-moz-border-radius-bottomleft: 10px;
				border-bottom-right-radius: 10px;
				border-bottom-left-radius: 10px;

			}
			#realcontent {
				font-family: arial, sans-serif;
				color: white;
				font-size: 13pt;
				z-index: 99;
				position: absolute;
				top: 0;
				left: 0;
				right: 0;
				bottom: 0;
				margin: 3px;
				margin-bottom: 10px;
				overflow: scroll;
				overflow-x: hidden;
				text-align: justify;
				text-justify:inter-word;
				padding: 5px;
			}
			#realcontent a{
				color:white;
			}
			#footer {
				position: absolute;
				top:612px;
				text-align: center;
				width:650px;
				font-size: 14pt;
				text-decoration: none;
				color:white;
				letter-spacing: 1px;
			}
			#whattoserve {
				margin: 3px;
				position: relative;
				color: white;
				opacity: 1;
			}
			p {
				text-indent:50px;
			}
		</style>
	</head>
	<body>
		<!-- DON'T REMOVE, pesanan BINUS -->
		<div id="bg">
			<img src="img/back.jpg" alt="">
		</div>
		<div id="wrapper">
			<div id="content">
				<div id="logoutama"><a href="?view=home.htm"><img src="img/logo.png" width="170px"/></a></div>
				<div  id="logos" style="top: 10px; position: relative; ">
					<div id="sponsoredby" width="250px">
						<div class="title">
							<!-- Sponsored By: -->
						</div>
						<div class="list"></div>
					</div>
					<div id="media" width="250px">
						<div class="title">
							<!-- Sponsored By: -->
						</div>
						<div class="list"></div>
					</div>
					<div id="poweredby" width="250px">
						<div class="title">
							Powered By:
						</div>
						<div class="list"><a href="http://www.binus.ac.id/"><img src="img/binus.png"  /></a></div>
					</div>
					<div id="organizedby" width="250px">
						<div class="title">
							Organized By:
						</div>
						<div class="list"><a href="http://www.himti.org/"><img src="img/HIMTI.png"  /></a></div>
					</div>
				</div>
			</div>
			<!-- DON'T REMOVE or CHANGE ANY ID, pesanan BINUS -->
			<div id="rightcon" >
				<div id="header" >
					<div style="z-index:10; position:absolute;width: 650px; text-align:center;">
						<img src="img/header.png" height="160px">
					</div>
					<div style="z-index:6; top:110px;position:absolute; ">
						<div>
							<img src="img/kota.png" width="650px">
						</div>
					</div>
					<div id ="menu" class="menu" style="z-index:10; position:absolute;top:160px; width: 650px; text-align: center ">
						<div>
							<li><a href="?view=home.htm">Home</a></li>
							<li><a href="?view=recruitment.htm">Open Recruitment</a></li>
							<li><a href="?view=contactus.htm">Contact Us</a></li>
						</div>
					</div>
				</div>
				<div id ="content_2">
					<div id="backgroundy">
					</div>
					<div id="realcontent">