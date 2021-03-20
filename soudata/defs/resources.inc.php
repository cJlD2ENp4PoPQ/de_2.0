<?php
/////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////
//definitionen der spezial rohstoffe
/////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////
$index=0;
$specialres_def[$index][0]='specialres1';//db spaltenname
$specialres_def[$index][1]='Darnkristall';//name des rohstoff
$index++;
$specialres_def[$index][0]='specialres2';
$specialres_def[$index][1]='Zalussplitter';
$index++;
$specialres_def[$index][0]='specialres3';
$specialres_def[$index][1]='Melagitessenz';
$index++;
$specialres_def[$index][0]='specialres4';
$specialres_def[$index][1]='Hyveelement';
$index++;
$specialres_def[$index][0]='specialres5';
$specialres_def[$index][1]='Ishnartefakt';
$index++;
$specialres_def[$index][0]='specialres6';
$specialres_def[$index][1]='Granarkristall';
$index++;
$specialres_def[$index][0]='specialres7';
$specialres_def[$index][1]='Rieluxsplitter';
$index++;
$specialres_def[$index][0]='specialres8';
$specialres_def[$index][1]='Eledaressenz';
$index++;
$specialres_def[$index][0]='specialres9';
$specialres_def[$index][1]='Uldaraelement';
$index++;
$specialres_def[$index][0]='specialres10';
$specialres_def[$index][1]='Belarartefakt';

/////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////
//definition der spezialrohstofffundorte im raumm�ll
/////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////
// definition x,y,r wobei r f�r radius steht, der von x/y ausgeht
//eisen
$index=0;
$srv_def[$index][]= array(0,0, 1000000);

//
$index++;
$srv_def[$index][]= array(0,0, 1200);

//
$index++;
$srv_def[$index][]= array(0,0, 1100);

//
$index++;
$srv_def[$index][]= array(0,0, 1000);

//
$index++;
$srv_def[$index][]= array(0,0, 900);

//
$index++;
$srv_def[$index][]= array(0,0, 750);

//
$index++;
$srv_def[$index][]= array(0,0, 600);

//
$index++;
$srv_def[$index][]= array(0,0, 450);

//
$index++;
$srv_def[$index][]= array(0,0, 300);

//
$index++;
$srv_def[$index][]= array(0,0, 150);



/////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////
//definitionen der rohstoffe
/////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////
$index=0;
$r_def[$index][0]='Eisen'; //name
$r_def[$index][1]=1; //f�rderverh�ltnis beim mining
$r_def[$index][2]=1; //verkaufspreis im handelskontor
$r_def[$index][3]=1; //ben�tigter handelskontorlevel
$r_def[$index][4]=1; //ben�tigter lagerkomplexlevel
$r_def[$index][5]=1; //ben�tigter raumwerftlevel

$index++;
$r_def[$index][0]='Titan'; //name
$r_def[$index][1]=2; //f�rderverh�ltnis beim mining
$r_def[$index][2]=2.05; //verkaufspreis im handelskontor
$r_def[$index][3]=2; //ben�tigter handelskontorlevel
$r_def[$index][4]=2; //ben�tigter lagerkomplexlevel
$r_def[$index][5]=2; //ben�tigter raumwerftlevel

$index++;
$r_def[$index][0]='Mexit'; //name
$r_def[$index][1]=5; //f�rderverh�ltnis beim mining
$r_def[$index][2]=5.10; //verkaufspreis im handelskontor
$r_def[$index][3]=15; //ben�tigter handelskontorlevel
$r_def[$index][4]=15; //ben�tigter lagerkomplexlevel
$r_def[$index][5]=15; //ben�tigter raumwerftlevel

$index++;
$r_def[$index][0]='Dulexit'; //name
$r_def[$index][1]=10; //f�rderverh�ltnis beim mining
$r_def[$index][2]=10.15; //verkaufspreis im handelskontor
$r_def[$index][3]=20; //ben�tigter handelskontorlevel
$r_def[$index][4]=20; //ben�tigter lagerkomplexlevel
$r_def[$index][5]=20; //ben�tigter raumwerftlevel

$index++;
$r_def[$index][0]='Tekranit'; //name
$r_def[$index][1]=15; //f�rderverh�ltnis beim mining
$r_def[$index][2]=15.20; //verkaufspreis im handelskontor
$r_def[$index][3]=25; //ben�tigter handelskontorlevel
$r_def[$index][4]=25; //ben�tigter lagerkomplexlevel
$r_def[$index][5]=25; //ben�tigter raumwerftlevel

$index++;
$r_def[$index][0]='Ylesenium'; //name
$r_def[$index][1]=20; //f�rderverh�ltnis beim mining
$r_def[$index][2]=20.25; //verkaufspreis im handelskontor
$r_def[$index][3]=30; //ben�tigter handelskontorlevel
$r_def[$index][4]=30; //ben�tigter lagerkomplexlevel
$r_def[$index][5]=30; //ben�tigter raumwerftlevel

$index++;
$r_def[$index][0]='Serodium'; //name
$r_def[$index][1]=25; //f�rderverh�ltnis beim mining
$r_def[$index][2]=25.30; //verkaufspreis im handelskontor
$r_def[$index][3]=35; //ben�tigter handelskontorlevel
$r_def[$index][4]=35; //ben�tigter lagerkomplexlevel
$r_def[$index][5]=35; //ben�tigter raumwerftlevel

$index++;
$r_def[$index][0]='Rowalganium'; //name
$r_def[$index][1]=30; //f�rderverh�ltnis beim mining
$r_def[$index][2]=30.35; //verkaufspreis im handelskontor
$r_def[$index][3]=40; //ben�tigter handelskontorlevel
$r_def[$index][4]=40; //ben�tigter lagerkomplexlevel
$r_def[$index][5]=40; //ben�tigter raumwerftlevel

$index++;
$r_def[$index][0]='Sextagit'; //name
$r_def[$index][1]=35; //f�rderverh�ltnis beim mining
$r_def[$index][2]=35.40; //verkaufspreis im handelskontor
$r_def[$index][3]=45; //ben�tigter handelskontorlevel
$r_def[$index][4]=45; //ben�tigter lagerkomplexlevel
$r_def[$index][5]=45; //ben�tigter raumwerftlevel

$index++;
$r_def[$index][0]='Octagium'; //name
$r_def[$index][1]=40; //f�rderverh�ltnis beim mining
$r_def[$index][2]=40.45; //verkaufspreis im handelskontor
$r_def[$index][3]=50; //ben�tigter handelskontorlevel
$r_def[$index][4]=50; //ben�tigter lagerkomplexlevel
$r_def[$index][5]=50; //ben�tigter raumwerftlevel

/////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////
//definition der rohstofffundorte
/////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////
// definition x,y,r wobei r f�r radius steht, der von x/y ausgeht
//eisen
$index=0;
$rv_def[$index][]= array(0,0, 10000000);

//titan
$index++;
$rv_def[$index][]= array(0,0, 10000000);

//mexit
$index++;
$rv_def[$index][]= array(0,0, 1300);

//dulexit
$index++;
$rv_def[$index][]= array(0,0, 1050);

//tekranit
$index++;
$rv_def[$index][]= array(0,0, 900);

//ylesenium
$index++;
$rv_def[$index][]= array(0,0, 750);

//serodium
$index++;
$rv_def[$index][]= array(0,0, 600);

//rowalganium
$index++;
$rv_def[$index][]= array(0,0, 450);

//sextagit
$index++;
$rv_def[$index][]= array(0,0, 300);

//octagium
$index++;
$rv_def[$index][]= array(0,0, 150);

/*
/////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////
leveldefinitionen f�r den forschungsrohstoffverbrauch
/////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////
1	Eisen	Titan
15	Titan	Mexit 
20	Mexit 	Dulexit 
25	Dulexit 	Tekranit 
30	Tekranit 	Ylesenium 
35	Ylesenium 	Serodium 
40	Serodium 	Rowalganium 
45	Rowalganium 	Sextagit 
50	Sextagit 	Octagium
*/

?>