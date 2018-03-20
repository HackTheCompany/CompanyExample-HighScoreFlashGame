<?php

//TODO - add authentication, SQL to store current player tokens, and update tokens here

$company_api_key = ""; // TODO Replace with environmental variable
$url = "http://127.0.0.1:8000/get_player_info?player_auth_code=".$_GET['player_auth_code']."&company_api_key=".$company_api_key;
$user_data = file_get_contents($url);
print_r($user_data);

if($_GET['do'] == 'newscore' && $_POST['gscore']) {
    $score = (int)$_POST['gscore'];
    print "Congrats on your score of ".$score;
    print "<hr>";
}

?>
<script>
    window.addEventListener( "message",
        function (data) {
          if (data.data.hackcoin_paid) {
            window.location.reload();
          }
        },
        false
    );
</script>
<center>

<table width="40%">
    <tr>
        <td align="left"><b>Cost:</b> 1 HackCoin per play</td>
        <td align="right"><b>Plays Available:</b> 0</td>
    </tr>
</table>
<br>

<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0" width="600" height="437">
<PARAM name="movie" value="goldminer.swf">
<PARAM NAME=scale VALUE=noscale>
<PARAM NAME=menu VALUE=false>
<PARAM name="quality" value="high">
<EMBED src="goldminer.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="600" height="437"></EMBED>
</OBJECT>
<br><br>

<table width="50%" border="1">
    <tr>
        <th>Top Score So Far Today</th>
        <th>Current Jackpot</th>
    </tr>
    <tr>
        <td align="center">12345 by emeth</td>
        <td align="center">12345 HackCoins</td>
    </tr>
</table>

<h2>Everyday, the highest score wins all the HackCoins in the pot!</h2>

<br><br><br>
<span style="font-size: 8px">*Note, the game is hackable. That is part of the game.</span>