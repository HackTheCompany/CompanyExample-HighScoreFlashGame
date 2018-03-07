<?php

if($_GET['do'] == 'newscore' && $_POST['gscore']) {
    $score = (int)$_POST['gscore'];
    print "Congrats on your score of ".$score;
    print "<hr>";
}

?>

<center>
<h1 style="padding: 0;margin:0; padding-top: 15px">Gold Miner Game</h1>
<OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0" width="600" height="510">
<PARAM name="movie" value="goldminer.swf">
<PARAM NAME=scale VALUE=noscale>
<PARAM NAME=menu VALUE=false>
<PARAM name="quality" value="high">
<EMBED src="goldminer.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="600" height="510"></EMBED>
</OBJECT>
<br><br>