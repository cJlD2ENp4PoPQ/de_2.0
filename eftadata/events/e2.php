<?php
//lm 1 tor zwischen wasser und gebirgszug
//�berpr�fen ob man genug ruhm hat
if($player_fame>=10)
{
	
}
else
{
  mysql_query("UPDATE de_cyborg_data SET y=y-1 WHERE user_id='$efta_user_id'",$eftadb);
  $e_text='Ein magisches Kraftfeld wirft dich zur�ck und du h&ouml;rst folgende Worte in deinem Kopf: EINE PASSAGE IST ERST AB 10 RUHMESPUNKTEN M&Ouml;GLICH';
}
?>