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
  
  Set the IP or hostname of your VSX-1022-K below, indicate if you want the
  alert to successful command send dialog to appear, and enjoy!
*/
// Network address where your VSX-1022-K can be reached:
$pioneer = '192.168.1.Xyz';
// Set this to indicate if you want an alert message to show up confirming
// the command was sent to the VSX-1022-K unit:
// 
// POSSIBLE SETTINGS:
//    true : confirmation alert will display
//   false : confirmation alert won't display
$confirm = true;

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
	<title>Pioneer Remote</title>
	<script type="text/javascript">
		function pvRebel_setSource(fnInput) {
			if (window.XMLHttpRequest) {
				xmlhttp=new XMLHttpRequest();
			} else {
				xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
			}
			xmlhttp.open("GET","<?php echo( basename( __FILE__ ) . '?input=' ); ?>"+fnInput,false);
			xmlhttp.send();
			<?php if ($confirm) { ?>
			alert("Input changed!");
			<?php } ?>
		}
		function pvRebel_setPower(fnPower) {
			if (window.XMLHttpRequest) {
				xmlhttp=new XMLHttpRequest();
			} else {
				xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
			}
			xmlhttp.open("GET","<?php echo( basename( __FILE__ ) . '?power=' ); ?>"+fnPower,false);
			xmlhttp.send();
			<?php if ($confirm) { ?>
			alert("Power changed!");
			<?php } ?>
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
			width: 280px;
			height: 120px;
			line-height: 120px;
			margin-top: 22px;
			background-color: #111;
			border: 2px #FFF solid;
		}
		.midpageColumn {
			width: 240px;
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
				<div onClick="pvRebel_setPower('0')" id="powerDnButton" class="midpageColumn">Off</div>
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
				<div onClick="pvRebel_setPower('1')" id="powerUpButton" class="midpageColumn">On</div>
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
				<div onClick="pvRebel_setSource('05')" class="midpageColumn">TV</div>
			</td>
			<td width="33%" valign="middle" align="center">
				<div onClick="pvRebel_setSource('10')">Video In</div>
			</td>
		</tr>
	</table>
</body>
</html>