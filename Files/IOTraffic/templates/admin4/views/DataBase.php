<?php

//Open Connection to mySQL
$db_host = "localhost" ;
$db_username = "root" ;
$db_pass = "" ;
$db_name = "iotraffic" ;
$connection = mysql_connect($db_host,$db_username,$db_pass);
//To select a database
$result = mysql_select_db("$db_name") or die ("No database") ;
//set hebrew
mysql_query("SET NAMES 'utf8'");
//Query2 - count query
$all_events_count = mysql_query("SELECT count(*) from events",$connection);
$all_open_events_count = mysql_query("SELECT count(*) from events where eventStatus='open'",$connection);
$police_count = mysql_query("SELECT count(*) from events where eventCategory='POLICE' AND eventStatus='open'",$connection);
$mda_count = mysql_query("SELECT count(*) from events where eventCategory='MDA' AND eventStatus='open'",$connection);
$fire_count = mysql_query("SELECT count(*) from events where eventCategory='FIRE' AND eventStatus='open'",$connection);
$municipality_count = mysql_query("SELECT count(*) from events where eventCategory='MUNICIPALITY' AND eventStatus='open'",$connection);
//echo mysql_result($result,0);

//$a = 1;
//while ($a <= mysql_result($result,0))
//while ($a <= 60)
//{
//$tmp1 = mysql_query("SELECT site_name FROM stores where place=$a",$connection); 
//}

//Events
$query="SELECT * FROM events";
$result=mysql_query($query);
$num=mysql_numrows($result);

//Traffic Light
$query2="SELECT * FROM traffic_light";
$result2=mysql_query($query2);
$num2=mysql_numrows($result2);

//Crossroad
$query3="SELECT * FROM crossroad";
$result3=mysql_query($query3);
$num3=mysql_numrows($result3);

//Camera
$query4="SELECT * FROM camera";
$result4=mysql_query($query4);
$num4=mysql_numrows($result4);

//get enum values
function get_enum_values( $table , $field )
{
	$query = " SHOW COLUMNS FROM `$table` LIKE '$field' ";
	$result = mysql_query( $query ) or die( 'error getting enum field ' . mysql_error() );
	$row = mysql_fetch_array( $result , MYSQL_NUM );
	#extract the values
	#the values are enclosed in single quotes
	#and separated by commas
	$regex = "/'(.*?)'/";
	preg_match_all( $regex , $row[1], $enum_array );
	$enum_values = $enum_array[1];
	return $enum_values;
}

?>