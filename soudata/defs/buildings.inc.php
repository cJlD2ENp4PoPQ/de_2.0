<?php
/*formel f�r die baukosten
wert = round(wurzel(ship_diameter)) * ship_diameter * 3
spieler*180 minuten * wert / 10
100*180*J4/10 */

//rohstoffverh�tnisse festlegen
$reswert= array ( 1, 2, 5, 10, 15, 20, 25, 30, 35, 40);

//maximale geb�udestufe
$b_max_bldg_level=50;

unset($b_defs);

//alle schiffsdurchmesser vorberechnen
unset($ship_diameter);
//fix f�r die kosten f�r das 1. geb�ude, damit dieses besonders preiswert ist, der wert spiegelt nicht den wirklichen durchmesser wieder
$ship_diameter[]=6;
$ga=2;$d=0;
for($i=1;$i<=$b_max_bldg_level;$i++)
{
  $d=$d+$ga;
  $ga=$ga*1.1019;
  $ship_diameter[]=floor($d+10);
}
//print_r($ship_diameter);

// geb�udedefinitionen
////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////
//  konstruktionszentrum
////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////
$b_index=0;
$b_defs[$b_index][0]='Konstruktionszentrum';  //name

//baukosten f�r den level
//verteilungsverh�ltnis
unset($share);
$share[0]=array(100, 0, 0, 0, 0, 0, 0, 0, 0, 0);
//kostenmodifikator 0-10% +/-
$costmod=-10;
//daten erzeugen
generate_bldg_cost();

//geb�ude voraussetzungen f�r den bau
for($i=0;$i<=$b_max_bldg_level;$i++){$b_defs[$b_index][2][$i]='';}

//forschungsvorraussetzungen f�r den bau
for($i=0;$i<=$b_max_bldg_level;$i++){$b_defs[$b_index][3][$i]='';}

////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////
//  forschungszentrum
////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////
//1
$b_index++;
$b_defs[$b_index][0]='Forschungszentrum';  //name

//baukosten f�r den level
//verteilungsverh�ltnis
unset($share);
$share[0]=array(75, 25, 0, 0, 0, 0, 0, 0, 0, 0);
//kostenmodifikator 0-10% +/-
$costmod=10;
//daten erzeugen
generate_bldg_cost();

//geb�ude voraussetzungen f�r den bau
for($i=0;$i<=$b_max_bldg_level;$i++){$b_defs[$b_index][2][$i]='';}

//forschungsvorraussetzungen f�r den bau
for($i=0;$i<=$b_max_bldg_level;$i++){$b_defs[$b_index][3][$i]='';}

////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////
//  raumwerft
////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////
//2
$b_index++;
$b_defs[$b_index][0]='Raumwerft';  //name

//baukosten f�r den level
//verteilungsverh�ltnis
unset($share);
$share[0]=array(70, 30, 0, 0, 0, 0, 0, 0, 0, 0);
//kostenmodifikator 0-10% +/-
$costmod=10;
//daten erzeugen
generate_bldg_cost();

//geb�ude voraussetzungen f�r den bau
for($i=0;$i<=$b_max_bldg_level;$i++){$b_defs[$b_index][2][$i]='';}
$b_defs[$b_index][2][0]='4x1';

//forschungsvorraussetzungen f�r den bau
for($i=0;$i<=$b_max_bldg_level;$i++){$b_defs[$b_index][3][$i]='';}

////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////
//  handelskontor
////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////
//3
$b_index++;
$b_defs[$b_index][0]='Handelskontor';  //name

//baukosten f�r den level
//verteilungsverh�ltnis
unset($share);
$share[0]=array(100, 0, 0, 0, 0, 0, 0, 0, 0, 0);
//kostenmodifikator 0-10% +/-
$costmod=-5;
//daten erzeugen
generate_bldg_cost();

//geb�ude voraussetzungen f�r den bau
for($i=0;$i<=$b_max_bldg_level;$i++){$b_defs[$b_index][2][$i]='10x'.($i+1);}

//forschungsvorraussetzungen f�r den bau
for($i=0;$i<=$b_max_bldg_level;$i++){$b_defs[$b_index][3][$i]='';}

////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////
//  lagerkomplex
////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////
//4
$b_index++;
$b_defs[$b_index][0]='Lagerkomplex';  //name

//baukosten f�r den level
//verteilungsverh�ltnis
unset($share);
$share[0]=array(100, 0, 0, 0, 0, 0, 0, 0, 0, 0);
//kostenmodifikator 0-10% +/-
$costmod=-10;
//daten erzeugen
generate_bldg_cost();

//geb�ude voraussetzungen f�r den bau
for($i=0;$i<=$b_max_bldg_level;$i++){$b_defs[$b_index][2][$i]='10x'.($i+1);}

//forschungsvorraussetzungen f�r den bau
for($i=0;$i<=$b_max_bldg_level;$i++){$b_defs[$b_index][3][$i]='';}


////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////
//  modulkomplex
////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////
//5
$b_index++;
$b_defs[$b_index][0]='Modulkomplex';  //name

//baukosten f�r den level
//verteilungsverh�ltnis
unset($share);
$share[0]=array(100, 0, 0, 0, 0, 0, 0, 0, 0, 0);
//kostenmodifikator 0-10% +/-
$costmod=0;
//daten erzeugen
generate_bldg_cost();

//geb�ude voraussetzungen f�r den bau
for($i=0;$i<=$b_max_bldg_level;$i++){$b_defs[$b_index][2][$i]='10x'.($i+1);}

//forschungsvorraussetzungen f�r den bau
for($i=0;$i<=$b_max_bldg_level;$i++){$b_defs[$b_index][3][$i]='';}

////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////
//  omega-fabrik: lagermodul, bergbau, forschungsmodul
////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////
//6
$b_index++;
$b_defs[$b_index][0]='Omega-Fabrik';  //name

//baukosten f�r den level
//verteilungsverh�ltnis
unset($share);
$share[0]=array(80, 20, 0, 0, 0, 0, 0, 0, 0, 0);
//kostenmodifikator 0-10% +/-
$costmod=5;
//daten erzeugen
generate_bldg_cost();

//geb�ude voraussetzungen f�r den bau
for($i=0;$i<=$b_max_bldg_level;$i++){$b_defs[$b_index][2][$i]='';}
$b_defs[$b_index][2][0]='4x1;5x1';//geb�ude voraussetzungen f�r den bau

//forschungsvorraussetzungen f�r den bau
for($i=0;$i<=$b_max_bldg_level;$i++){$b_defs[$b_index][3][$i]='';}

////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////
//  waffenfabrik
////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////
//7
$b_index++;
$b_defs[$b_index][0]='Waffenfabrik';  //name

//baukosten f�r den level
//verteilungsverh�ltnis
unset($share);
$share[0]=array(75, 35, 0, 0, 0, 0, 0, 0, 0, 0);
//kostenmodifikator 0-10% +/-
$costmod=7;
//daten erzeugen
generate_bldg_cost();

//geb�ude voraussetzungen f�r den bau
for($i=0;$i<=$b_max_bldg_level;$i++){$b_defs[$b_index][2][$i]='';}
$b_defs[$b_index][2][0]='4x1;5x1';//geb�ude voraussetzungen f�r den bau

//forschungsvorraussetzungen f�r den bau
for($i=0;$i<=$b_max_bldg_level;$i++){$b_defs[$b_index][3][$i]='';}

////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////
//  schutzschildfabrik
////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////
//8
$b_index++;
$b_defs[$b_index][0]='Schutzschildfabrik';  //name

//baukosten f�r den level
//verteilungsverh�ltnis
unset($share);
$share[0]=array(75, 35, 0, 0, 0, 0, 0, 0, 0, 0);
//kostenmodifikator 0-10% +/-
$costmod=6;
//daten erzeugen
generate_bldg_cost();

//geb�ude voraussetzungen f�r den bau
for($i=0;$i<=$b_max_bldg_level;$i++){$b_defs[$b_index][2][$i]='';}
$b_defs[$b_index][2][0]='4x1;5x1';//geb�ude voraussetzungen f�r den bau

//forschungsvorraussetzungen f�r den bau
for($i=0;$i<=$b_max_bldg_level;$i++){$b_defs[$b_index][3][$i]='';}

////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////
//  fabrik f�r antriebe
////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////
//9
$b_index++;
$b_defs[$b_index][0]='Fabrik f&uuml;r Antriebe';  //name

//baukosten f�r den level
//verteilungsverh�ltnis
unset($share);
$share[0]=array(50, 50, 0, 0, 0, 0, 0, 0, 0, 0);
//kostenmodifikator 0-10% +/-
$costmod=-2;
//daten erzeugen
generate_bldg_cost();

//geb�ude voraussetzungen f�r den bau
for($i=0;$i<=$b_max_bldg_level;$i++){$b_defs[$b_index][2][$i]='';}
$b_defs[$b_index][2][0]='4x1;5x1';//geb�ude voraussetzungen f�r den bau

//forschungsvorraussetzungen f�r den bau
for($i=0;$i<=$b_max_bldg_level;$i++){$b_defs[$b_index][3][$i]='';}

////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////
//  transmitterportal
////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////
//10
$b_index++;
$b_defs[$b_index][0]='Transmitterportal';  //name

//baukosten f�r den level
//verteilungsverh�ltnis
unset($share);
$share[0]=array(100, 0, 0, 0, 0, 0, 0, 0, 0, 0);
//kostenmodifikator 0-20% +/-
$costmod=-20;
//daten erzeugen
generate_bldg_cost();

//geb�ude voraussetzungen f�r den bau
for($i=0;$i<=$b_max_bldg_level;$i++){$b_defs[$b_index][2][$i]='';}

//forschungsvorraussetzungen f�r den bau
for($i=0;$i<=$b_max_bldg_level;$i++){$b_defs[$b_index][3][$i]='';}
$b_defs[$b_index][3][0]='60000';//transmitterefeld


////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////
//  auktionszentrum
////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////
//11

$b_index++;
$b_defs[$b_index][0]='Auktionszentrum';  //name

//baukosten f�r den level
//verteilungsverh�ltnis
unset($share);
$share[0]=array(40, 60, 0, 0, 0, 0, 0, 0, 0, 0);
//kostenmodifikator 0-10% +/-
$costmod=-25;
//daten erzeugen
generate_bldg_cost();

//geb�ude voraussetzungen f�r den bau
for($i=0;$i<=$b_max_bldg_level;$i++){$b_defs[$b_index][2][$i]='5x'.($i+1);}

//forschungsvorraussetzungen f�r den bau
for($i=0;$i<=$b_max_bldg_level;$i++){$b_defs[$b_index][3][$i]='';}

////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////
//  Upgrade-O-Modul
////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////
//12

$b_index++;
$b_defs[$b_index][0]='Upgrade-O-Modul';  //name

//baukosten f�r den level
//verteilungsverh�ltnis
unset($share);
$share[0]=array(42, 58, 0, 0, 0, 0, 0, 0, 0, 0);
//kostenmodifikator 0-10% +/-
$costmod=-30;
//daten erzeugen
generate_bldg_cost();

//geb�ude voraussetzungen f�r den bau
for($i=0;$i<=$b_max_bldg_level;$i++){$b_defs[$b_index][2][$i]='5x'.($i+1);}

//forschungsvorraussetzungen f�r den bau
for($i=0;$i<=$b_max_bldg_level;$i++){$b_defs[$b_index][3][$i]='';}

////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////
//  hyperraumaufrissprojektor
////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////
//13

$b_index++;
$b_defs[$b_index][0]='Hyperraumaufrissprojektor';  //name

//baukosten f�r den level
//verteilungsverh�ltnis
unset($share);
$share[0]=array(30, 70, 0, 0, 0, 0, 0, 0, 0, 0);
//kostenmodifikator 0-10% +/-
$costmod=20;
//daten erzeugen
generate_bldg_cost();

//geb�ude voraussetzungen f�r den bau
for($i=0;$i<=$b_max_bldg_level;$i++){$b_defs[$b_index][2][$i]='';}

//forschungsvorraussetzungen f�r den bau
for($i=0;$i<=$b_max_bldg_level;$i++){$b_defs[$b_index][3][$i]='';}
$b_defs[$b_index][3][0]='60006';//hyperraumblasen

///////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////

//funktion zum generieren der geb�udekosten
function generate_bldg_cost()
{
  global $b_max_bldg_level, $ship_diameter, $share, $costmod, $b_defs, $b_index, $reswert;
  
  for($i=0;$i<$b_max_bldg_level;$i++)
  {
    //geb�udegesamtkosten berechen
    $wert=round(sqrt($ship_diameter[$i]))*$ship_diameter[$i]*3;
    $cost=floor(100*180*$wert/10);
    //modifikator berechnen
    $cost=($cost+($cost*$costmod/100))*0.9;
    //die kosten nach dem verteilungsverh�ltnis aufteilen
    if(isset($share[$i])){$shareit=$share[$i];}
    else $shareit=$share[0];
    //die kosten nach dem vorgegebenen verh�ltnis aufsplitten
    $coststring='';
    for($r=0;$r<10;$r++)
    {
  	  //einzelkosten berechnen
  	  $costpart=$cost*$shareit[$r]/100/$reswert[$r];
      //den wert auf 3 nullen am ende trimmen
      $costpart=round($costpart/1000);
      $costpart=$costpart*1000;
  	
  	  //kostenstring bauen
  	  if($costpart>0)
  	  {
  	    if($coststring!='')$coststring.=';';
   	    $coststring.=$costpart.'x'.($r+1);
  	  }
    } 
    //die werte im hauptarray definieren
    $b_defs[$b_index][1][$i]=$coststring;
  }  
}

?>