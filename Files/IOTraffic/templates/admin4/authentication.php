<?php include 'views\DataBase.php';?>
<?php
//set vars
extract($_POST);
$username = $_POST['username'];
$password = sha1($_POST['password']);
//$pass = sha1($password);
$i=0;

$queryuser = "SELECT user_name FROM users WHERE user_name = '$username'";
$result = mysql_query($queryuser);
$temp_user = mysql_result($result,$i);
if ($temp_user == $username){
  $querypass = "SELECT password FROM users WHERE password = '$password'";
  $resultpass = mysql_query($querypass);
  $temp_pass = mysql_result($resultpass,$i);
  //echo mysql_result($temp_pass,$i);
  if($temp_pass == $password){
    echo "grate";
    header("location:index.php");
  }
  else {
    header("location:login.php");

  }


}
else {
header("location:login.php");
}
?>
