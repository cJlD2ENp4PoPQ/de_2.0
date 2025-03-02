<?php
include "inc/header.inc.php";
include 'inc/lang/'.$sv_server_lang.'_toplist.lang.php';
include "functions.php";

$db_daten=mysql_query("SELECT restyp01, restyp02, restyp03, restyp04, restyp05, score, sector, system, newtrans, newnews, allytag, status FROM de_user_data WHERE user_id='$ums_user_id'",$db);
$row = mysql_fetch_array($db_daten);
$restyp01=$row[0];$restyp02=$row[1];$restyp03=$row[2];$restyp04=$row[3];$restyp05=$row["restyp05"];
$punkte=$row["score"];$newtrans=$row["newtrans"];$newnews=$row["newnews"];
$sector=$row["sector"];$system=$row["system"];
if ($row["status"]==1) $ownally = $row["allytag"];
?>
<!doctype html>
<html>
<head>
<title>Rangliste</title>
<?php include "cssinclude.php";?>
</head>
<body>
<?php //stelle die ressourcenleiste dar
include "resline.php";

function showmenu($menuid, $menupos){
	global $toplist_lang, $sv_ewige_runde, $sv_oscar, $sv_hardcore;
	//men�s definieren

	/////////////////////////////
	//spieler
	/////////////////////////////

	//ewige runde?
	if($sv_ewige_runde==1){
		$index=0;
		//punkte
		$menudata[0][$index]['name']=$toplist_lang['punkte'];
		$menudata[0][$index]['dateiname']='top1a.tmp';
		//Kollektoren
		$index++;
		$menudata[0][$index]['name']=$toplist_lang['kollektoren'];
		$menudata[0][$index]['dateiname']='top1b.tmp';
		//Türme
		$index++;
		$menudata[0][$index]['name']=$toplist_lang['tuerme'];
		$menudata[0][$index]['dateiname']='top1c.tmp';
		//Errungenschaften
		$index++;
		$menudata[0][$index]['name']=$toplist_lang['errungenschaften'];
		$menudata[0][$index]['dateiname']='top1g.tmp';
		if($sv_oscar!=1){
			//Kopfgeld
			$index++;
			$menudata[0][$index]['name']='Kopfgeld';
			$menudata[0][$index]['dateiname']='top1e.tmp';				
			//Kopfgeldjänger
			$index++;
			$menudata[0][$index]['name']='Kopfgeldj&auml;ger';
			$menudata[0][$index]['dateiname']='top1f.tmp';		
		}
		//Erhabenenpunkte
		$index++;
		$menudata[0][$index]['name']=$toplist_lang['erhabenenpunkte'];
		$menudata[0][$index]['dateiname']='top1h.tmp';		
		$menudata[0][$index]['hinweis']='Die Erhabenenpunkte berechnen sich nach folgender Formel: Kollektoren * 0,75 + Einheitenpunkte / 250.000 + Errungenschaften + Flottenangriffserfahrung / 12.500 + Flottenverteidigungserfahrung / 10.000 + Z&ouml;llner / 10.000';
		//Erhabenencounter
		$index++;
		$menudata[0][$index]['name']='Erhabenencounter';
		$menudata[0][$index]['dateiname']='top1i.tmp';		
		//Erhabenensiege
		$index++;
		$menudata[0][$index]['name']='Erhabenensiege';
		$menudata[0][$index]['dateiname']='top1j.tmp';
		//Executor-Punkte
		$index++;
		$menudata[0][$index]['name']='Executorpunkte';
		$menudata[0][$index]['dateiname']='top1k.tmp';
		$menudata[0][$index]['hinweis']='Die Executorpunkte berechnen sich nach folgender Formel: Geb&auml;udepunkte (Vergessene-Systeme) + Handelspunkte / 100 (vorl&auml;ufig, wird noch ge&auml;ndert)';
	}elseif($sv_hardcore==1){
		$index=0;
		//punkte
		$menudata[0][$index]['name']=$toplist_lang['punkte'];
		$menudata[0][$index]['dateiname']='top1a.tmp';
		//Kollektoren
		$index++;
		$menudata[0][$index]['name']=$toplist_lang['kollektoren'];
		$menudata[0][$index]['dateiname']='top1b.tmp';
		//T�rme
		$index++;
		$menudata[0][$index]['name']=$toplist_lang['tuerme'];
		$menudata[0][$index]['dateiname']='top1c.tmp';
		//Rundenpunkte
		$index++;
		$menudata[0][$index]['name']=$toplist_lang['rundenpunkte'];
		$menudata[0][$index]['dateiname']='top1d.tmp';
		//Errungenschaften
		$index++;
		$menudata[0][$index]['name']=$toplist_lang['errungenschaften'];
		$menudata[0][$index]['dateiname']='top1g.tmp';
		if($sv_oscar!=1){
			//Kopfgeld
			$index++;
			$menudata[0][$index]['name']='Kopfgeld';
			$menudata[0][$index]['dateiname']='top1e.tmp';				
			//Kopfgeldj�nger
			$index++;
			$menudata[0][$index]['name']='Kopfgeldj&auml;ger';
			$menudata[0][$index]['dateiname']='top1f.tmp';
		}
		//Erhabenenpunkte
		$index++;
		$menudata[0][$index]['name']=$toplist_lang['erhabenenpunkte'];
		$menudata[0][$index]['dateiname']='top1h.tmp';		
		$menudata[0][$index]['hinweis']='Die Erhabenenpunkte berechnen sich nach folgender Formel: Kollektoren + Einheitenpunkte / 250.000 + Errungenschaften + Rundenpunkte + Flottenangriffserfahrung / 12.500 + Flottenverteidigungserfahrung / 10.000';
		//Erhabenencounter
		$index++;
		$menudata[0][$index]['name']='Erhabenencounter';
		$menudata[0][$index]['dateiname']='top1i.tmp';		
		//Erhabenensiege
		$index++;
		$menudata[0][$index]['name']='Erhabenenteilsiege';
		$menudata[0][$index]['dateiname']='top1j.tmp';
		//Executor-Punkte
		$index++;
		$menudata[0][$index]['name']='Executorpunkte';
		$menudata[0][$index]['dateiname']='top1k.tmp';
		$menudata[0][$index]['hinweis']='Die Executorpunkte berechnen sich nach folgender Formel: Geb&auml;udepunkte (Vergessene-Systeme) + Handelspunkte / 100 (vorl&auml;ufig, wird noch ge&auml;ndert)';
	}else{ //normale runde
		$index=0;
		//punkte
		$menudata[0][$index]['name']=$toplist_lang['punkte'];
		$menudata[0][$index]['dateiname']='top1a.tmp';
		//Kollektoren
		$index++;
		$menudata[0][$index]['name']=$toplist_lang['kollektoren'];
		$menudata[0][$index]['dateiname']='top1b.tmp';
		//T�rme
		$index++;
		$menudata[0][$index]['name']=$toplist_lang['tuerme'];
		$menudata[0][$index]['dateiname']='top1c.tmp';
		//Rundenpunkte
		$index++;
		$menudata[0][$index]['name']=$toplist_lang['rundenpunkte'];
		$menudata[0][$index]['dateiname']='top1d.tmp';
		//Errungenschaften
		$index++;
		$menudata[0][$index]['name']=$toplist_lang['errungenschaften'];
		$menudata[0][$index]['dateiname']='top1g.tmp';
		if($sv_oscar!=1){
			//Kopfgeld
			$index++;
			$menudata[0][$index]['name']='Kopfgeld';
			$menudata[0][$index]['dateiname']='top1e.tmp';				
			//Kopfgeldj�nger
			$index++;
			$menudata[0][$index]['name']='Kopfgeldj&auml;ger';
			$menudata[0][$index]['dateiname']='top1f.tmp';		
		}
		//Erhabenenpunkte
		$index++;
		$menudata[0][$index]['name']=$toplist_lang['erhabenenpunkte'];
		$menudata[0][$index]['dateiname']='top1h.tmp';		
		$menudata[0][$index]['hinweis']='Die Erhabenenpunkte berechnen sich nach folgender Formel: Kollektoren + Einheitenpunkte / 250.000 + Errungenschaften + Rundenpunkte + Flottenangriffserfahrung / 12.500 + Flottenverteidigungserfahrung / 10.000';
		//Executor-Punkte
		$index++;
		$menudata[0][$index]['name']='Executorpunkte';
		$menudata[0][$index]['dateiname']='top1k.tmp';
		$menudata[0][$index]['hinweis']='Die Executorpunkte berechnen sich nach folgender Formel: Geb&auml;udepunkte (Vergessene-Systeme) + Handelspunkte / 100 (vorl&auml;ufig, wird noch ge&auml;ndert)';
	}

	/////////////////////////////
	//allianz
	/////////////////////////////
	if($sv_ewige_runde==1){
		$index=0;
		//punkte
		$menudata[2][$index]['name']=$toplist_lang['punkte'];
		$menudata[2][$index]['dateiname']='top3.tmp';
		//Siegartefakte
		$index++;
		$menudata[2][$index]['name']=$toplist_lang['siegartefakte'];
		$menudata[2][$index]['dateiname']='top3a.tmp';
		//B�ndnisse
		$index++;
		$menudata[2][$index]['name']=$toplist_lang['buendnisse'];
		$menudata[2][$index]['dateiname']='top3b.tmp';
		//Erhabene
		$index++;
		$menudata[2][$index]['name']='Erhabene';
		$menudata[2][$index]['dateiname']='top3c.tmp';
	}else{
		$index=0;
		//punkte
		$menudata[2][$index]['name']=$toplist_lang['punkte'];
		$menudata[2][$index]['dateiname']='top3.tmp';
		//Siegartefakte
		$index++;
		$menudata[2][$index]['name']=$toplist_lang['siegartefakte'];
		$menudata[2][$index]['dateiname']='top3a.tmp';
		//B�ndnisse
		$index++;
		$menudata[2][$index]['name']=$toplist_lang['buendnisse'];
		$menudata[2][$index]['dateiname']='top3b.tmp';
	}

	echo '<div class="menu_box">';
	echo '<ul id="menu">';
	//////////////////////////////////////////////////////////
	//die einzelnen men�punkte ausgeben
	//////////////////////////////////////////////////////////
	for($i=0;$i<count($menudata[$menuid]);$i++){
		if($menupos==$i){$str1='<b>';$str2='</b>';}else{$str1='';$str2='';}
		echo '<li><a href="toplist.php?s='.($menuid+1).'&mp='.($i).'">'.$str1.$menudata[$menuid][$i]['name'].$str2.'</a></li>';
	}
	echo '</ul>';
	echo '</div><br>';
	
	//ggf. einen Hinweis ausgeben
	if(!empty($menudata[$menuid][$menupos]['hinweis'])){

	  echo '<table border="0" cellpadding="0" cellspacing="1" width="600">';
	  echo '<tr class="cell" align="center"><td>'.$menudata[$menuid][$menupos]['hinweis'].'</td></tr>';
	  echo '</table><br>';
	}
	
	//Datei mit den Daten einbinden
	$filename = "cache/toplist/".$menudata[$menuid][$menupos]['dateiname'];
	include $filename;
}


echo '<div class="cell" style="width: 600px;">';
echo '<table border="0" cellpadding="0" cellspacing="2" width="500">';
echo '<tr align="center">';
echo '<td width="50%"><a href="toplist.php?s=1"><img src="'.$ums_gpfad.'g/'.$sv_server_lang.'_tl1.gif" border="0"></a></td>';
echo '<td width="50%"><a href="toplist.php?&s=2"><img src="'.$ums_gpfad.'g/'.$sv_server_lang.'_tl2.gif" border="0"></a></td>';
echo '</tr>';
echo '<tr align="center">';
echo '<td><a href="toplist.php?&s=3"><img src="'.$ums_gpfad.'g/'.$sv_server_lang.'_tl3.gif" border="0"></a></td>';
echo '<td><a href="toplist.php?&s=4"><img src="'.$ums_gpfad.'g/'.$sv_server_lang.'_tl4.gif" border="0"></a></td>';
echo '</tr>';
echo '</table>';
echo '</div><br>';

if(!isset($_REQUEST["mp"])){
	$_REQUEST["mp"]=0;
}

$s = $_REQUEST["s"] ?? 1;

if ($s==1){
	echo '<script language="JavaScript">
	<!--
	var gpfad="'.$ums_gpfad.'";
	//-->
	</script>';
	
	showmenu(0,$_REQUEST["mp"]);
}

///////////////////////////////////
//sektorenrangliste
///////////////////////////////////
if ($s==2){
  $filename = "cache/toplist/top2.tmp";
  include $filename;
}

///////////////////////////////////
//allianz
///////////////////////////////////
if ($s==3){
	showmenu(2,$_REQUEST["mp"]);
}

///////////////////////////////////
//handel
///////////////////////////////////
if ($s==4){
	$filename = "cache/toplist/top4a.tmp";
	include $filename;
}


//beim ersten aufruf, wenn nichts ausgew�hlt ist die m�glichen gewinne anzeigen.
if(!isset($s)){
	if($sv_ewige_runde==1 || $sv_hardcore==1){
		rahmen_oben('Creditgewinne');
	}else{	
		rahmen_oben($toplist_lang['creditrundengewinne']);
	}

	echo '<table border="0" cellpadding="0" cellspacing="1" width="580">';
	if($sv_ewige_runde==1){
		echo '<tr class="cell" align="center"><td>Der Erhabene erh&auml;lt als Preis 50 Credits.</td></tr>';
	}elseif($sv_hardcore==1){
		echo '
			<tr class="cell" align="center">
				<td>
					Der ERHABENE erh&auml;lt als Preis 1000 Credits.<br>
					Jeder ERHABENEN-Teilsieg bringt 100 Credits als Belohnung.
				</td>
			</tr>';
	}else{	
		echo '<tr class="cell" align="center"><td><b>'.$toplist_lang['ziel'].'</b></td><td><b>1. '.$toplist_lang['platz'].'</b></td><td><b>2. '.$toplist_lang['platz'].'</b></td><td><b>3. '.$toplist_lang['platz'].'</b></td></tr>';

		echo '<tr class="cell1" align="center">
		  <td align="left">'.$toplist_lang['spieler'].' -> '.$toplist_lang['punkte'].' -> '.$toplist_lang['punkte'].'</td>
		  <td>'.number_format($sv_credit_win[0][0], 0,"",".").'</td>
		  <td>'.number_format($sv_credit_win[0][1], 0,"",".").'</td>
		  <td>'.number_format($sv_credit_win[0][2], 0,"",".").'</td>
		</tr>';

		if($sv_deactivate_trade==0)
		echo '<tr class="cell" align="center">
		  <td align="left">'.$toplist_lang['spieler'].' -> '.$toplist_lang['punkte'].' -> Executorpunkte</td>
		  <td>'.number_format($sv_credit_win[1][0], 0,"",".").'</td>
		  <td>'.number_format($sv_credit_win[1][1], 0,"",".").'</td>
		  <td>'.number_format($sv_credit_win[1][2], 0,"",".").'</td>
		</tr>';

		/*
		echo '<tr class="cell1" align="center">
		  <td align="left">'.$toplist_lang[spieler].' -> '.$toplist_lang[kopfgeldjaeger].' -> '.$toplist_lang[gesamtwert].'</td>
		  <td>'.number_format($sv_credit_win[2][0], 0,"",".").'</td>
		  <td>'.number_format($sv_credit_win[2][1], 0,"",".").'</td>
		  <td>'.number_format($sv_credit_win[2][2], 0,"",".").'</td>
		</tr>';
		*/
		/*
		echo '<tr class="cell" align="center">
		  <td align="left">'.$toplist_lang[cyborg].' -> '.$toplist_lang[punkte].'</td>
		  <td>'.number_format($sv_credit_win[3][0], 0,"",".").'</td>
		  <td>'.number_format($sv_credit_win[3][1], 0,"",".").'</td>
		  <td>'.number_format($sv_credit_win[3][2], 0,"",".").'</td>
		</tr>';
		*/

		echo '<tr class="cell1" align="center"><td><b>'.$toplist_lang['ziel'].'</b></td><td colspan="3"><b>1. '.$toplist_lang['platz'].'</b></td></tr>';  
		echo '<tr class="cell" align="center">
		  <td align="left">'.$toplist_lang['spieler'].' -> '.$toplist_lang['erhabenenpunkte'].' -> '.$toplist_lang['ehpunkte'].'</td>
		  <td colspan="3">'.number_format($sv_credit_win[4][0], 0,"",".").'</td>
		</tr>';

		echo '<tr class="cell1" align="center">
		  <td colspan="5">'.$toplist_lang['creditgewinnhinweis'].'</td>
		</tr>';
	}  

	echo '</table>';

	rahmen_unten();
}


?>
</div>
<br>
<?php include "fooban.php"; ?>
</body>
</html>
