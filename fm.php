<?php
exec('sudo killall fm_transmitter');
exec('sudo killall fm_transmitter');
exec('sudo killall fm_transmitter');
exec('/opt/fm_webui/yt.sh ",'.$_POST["url"].'" > /tmp/fm.log &');
header( "refresh:2;url=index.html" );
?>

<html>

<head>
<title>PiFM WebUI</title>
</head>

<body background="bg.gif">
<br><br><br><br><br><br>
<h1 style="text-align: center;">
	<span style="font-size:28px;"><span style="font-family:verdana,geneva,sans-serif;"><strong>Broadcasting started.</strong></span></span></h1>
</body>
</html>