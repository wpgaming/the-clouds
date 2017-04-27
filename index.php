
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Name - Home</title>
<meta name="description" content="">
<meta http-equiv="refresh" content="120">
<link rel="shortcut icon" href="/skyrealms/favicon.ico">
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" />
<link href="css/custom.css" rel="stylesheet" type="text/css" />
<link href="css/buttons.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="css/animate.min.css" />
<script type="text/javascript" src="//code.jquery.com/jquery-1.8.3.js"></script>
<script src="/js/count.js"></script>

<script type='text/javascript'>//<![CDATA[
$(window).load(function(){
var intval = null;
var pos = 0;

$(document).ready(function() {


    intval = window.setInterval(moveBg, 125);
});

function moveBg() {
    
    pos++;
    
    $(".clouds").css({backgroundPosition: (pos * 1) + "px 0px"});
}

});//]]> 

</script>

</head>
  <body>
  	<style>
	.buttons { margin-top: 50px; }
	.buttons img { height: 175px; margin: 50px; }
	</style>
<div class="header">
	<div class="clouds">

		<div align="center" class="logo">
			<img class="animated bounceIn" src="/img/logo.png" />
			<div style="color: #ffffff; width:350px; height: 45px; font-size:18px; border-width:1px; border-color:#ddd; text-align:center; padding:10px; 	font-weight:bold; margin-top: 37.5px;" class="well">Players Online: <span id="playercount">
			<?php
$ip = 'HOST/IP';
$port = PORT;

$onlinePlayers = 0;
$maxPlayers = 0;
$serverMotd = '';

$serverSock = @stream_socket_client('tcp://'.$ip.':'.$port, $empty, $empty, 1);


if($serverSock !== FALSE)
{
    fwrite($serverSock, "\xfe");
    
    $response = fread($serverSock, 2048);
    $response = str_replace("\x00", '', $response);
    $response = substr($response, 2);
    
    $data = explode("\xa7", $response);
    
    unset($response);

    fclose($serverSock);

    if(sizeof($data) == 3)
    {
        $serverMotd = $data[0];
        $onlinePlayers = (int) $data[1];
        $maxPlayers = (int) $data[2];
        
        echo $onlinePlayers.'/'.$maxPlayers.'';
    }else{
        echo 'Could not connect.';
    }
}else{
    echo 'Server is offline.';
}

?></div>
			</div>
		</div>
		<div class="buttons" align="center">
			<a href="{InsertLinkHere}"><img alt="Vote" src="/img/vote_icon.png"></a>
			<a href="{InsertLinkHere}"><img alt="Store" src="/img/store_icon.png"></a>
			<a href="{InsertLinkHere}"><img alt="Forum" src="/img/forum_icon.png"></a>
			<a href="{InsertLinkHere}"><img alt="Bans" src="/img/bans_icon.png"></a>
		</div>
                <div class="serverip" align="center">
                <input type="text" value="{InsertServerIP}" style="color: #fffcb1; width:250px; height:45px; font-size:19px; border-width:1px; border-color:#ddd; text-align:center; padding:10px; font-weight:bold;" readonly="readonly">
                </div>
				<div align="center">
					<p>&copy; <a href="http://wickednessproductions.com/">WickednessProductions</a></p>
				</div>
</div>
<!---Import Zendesk Widget Here--->

<!---End Of Zendesk Widget--->
</body>
</html>
