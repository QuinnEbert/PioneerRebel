<!--
 wiiumote.php
 part of Quinn Ebert's "Pioneer Rebel" software project
 
 PURPOSE:
   Interface for selecting VSX-1022-K inputs optimally
   from the Wii-U touchpad device's NetFront-based
   web browser.
 -->
<?php
/*
  CONFIGURATION:
  
  Set the IP or hostname of your VSX-1022-K below and enjoy!
*/
// Network address where your VSX-1022-K can be reached:
$pioneer = '192.168.1.Xyz';

// Handling code for Ajax button requests:
if (isset($_GET['input'])) {
	require_once(dirname(__FILE__).'/pioneer.lib.php');
	header('Content-Type: text/xml');
	pvRebel_setSource($pioneer,$_GET['input']);
	die("<pioneer_rebel>\n  <status>OK</status>\n</pioneer_rebel>\n");
}
if (isset($_GET['power'])) {
	require_once(dirname(__FILE__).'/pioneer.lib.php');
	header('Content-Type: text/xml');
	pvRebel_setPower($pioneer,intval($_GET['power']));
	die("<pioneer_rebel>\n  <status>OK</status>\n</pioneer_rebel>\n");
}

// Web page rendering code...
?>
<html>
<head>
	<title>Pioneer VSX-1022-K Wii-U Remote</title>
	<script type="text/javascript">
		function pvRebel_setSource(fnInput) {
			if (window.XMLHttpRequest) {
				xmlhttp=new XMLHttpRequest();
			} else {
				xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
			}
			xmlhttp.open("GET","<?php echo( basename( __FILE__ ) . '?input=' ); ?>"+fnInput,false);
			xmlhttp.send();
			alert("Input changed!");
		}
		function pvRebel_setPower(fnPower) {
			if (window.XMLHttpRequest) {
				xmlhttp=new XMLHttpRequest();
			} else {
				xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
			}
			xmlhttp.open("GET","<?php echo( basename( __FILE__ ) . '?power=' ); ?>"+fnPower,false);
			xmlhttp.send();
			alert("Power changed!");
		}
	</script>
	<style type="text/css">
		html {
			background-color: #333;
			color: #FFF;
		}
		body {
			margin: 0px;
			padding: 0px;
		}
		td {
			font-size: 32pt;
			font-family: sans-serif;
		}
		div {
			display: inline-block;
			width: 320px;
			height: 120px;
			line-height: 120px;
			margin-top: 22px;
			background-color: #111;
			border: 2px #FFF solid;
		}
		#powerUpButton {
			background-color: #0F0;
		}
		#powerDnButton {
			background-color: #F00;
		}
	</style>
</head>
<body>
	<table width="100%" height="80%" border="0" cellspacing="0" cellpadding="0">
		<tr>
			<td width="33%" valign="middle" align="center">
				<div onClick="pvRebel_setSource('04')">DVD</div>
			</td>
			<td width="34%" valign="middle" align="center">
				<div onClick="pvRebel_setPower('0')" id="powerDnButton">Off</div>
			</td>
			<td width="33%" valign="middle" align="center">
				<div onClick="pvRebel_setSource('06')">Sat/Cable</div>
			</td>
		</tr>
		<tr>
			<td width="33%" valign="middle" align="center">
				<div onClick="pvRebel_setSource('25')">BD Player</div>
			</td>
			<td width="34%" valign="middle" align="center">
				<div onClick="pvRebel_setPower('1')" id="powerUpButton">On</div>
			</td>
			<td width="33%" valign="middle" align="center">
				<div onClick="pvRebel_setSource('49')">Game Console</div>
			</td>
		</tr>
		<tr>
			<td width="33%" valign="middle" align="center">
				<div onClick="pvRebel_setSource('15')">DVD/BD Rec.</div>
			</td>
			<td width="34%" valign="middle" align="center">
				<div onClick="pvRebel_setSource('05')">TV</div>
			</td>
			<td width="33%" valign="middle" align="center">
				<div onClick="pvRebel_setSource('10')">Video In</div>
			</td>
		</tr>
	</table>
</body>
</html>