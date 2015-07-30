<?php include 'views\DataBase.php';?>
<?php

$username='niraran';
$pass = '123';
//echo [$user];
$i=0;
//if ($user&&$pass)
//{

//$connect = mysql_connect("$server","$username","$password") or die("not connecting");
//mysql_select_db($db_name) or die("no db :'(");
$queryuser = "SELECT user_name FROM users WHERE user_name = '$username'";
$result = mysql_query($queryuser);
$temp_user = mysql_result($result,$i);
if ($temp_user == $username){
  $querypass = "SELECT * FROM users WHERE password = '$pass'";
  $resultpass = mysql_query($querypass);
  $temp_pass = mysql_result($resultpass,$i);
  echo mysql_result($temp_pass,$i);

  if($temp_pass == $pass){
    echo "grate";
  }
  else {
    echo mysql_result($temp_pass,$i);
    echo "not";
  }
  // //SELECT * FROM `users` WHERE `user_name` = "niraran" && `password`

}
else {
  echo ":-(";
}
//var_dump ($result);
?>
