<?php
//set vars
$user = $_POST['username'];
$pass = sha1($_POST['password']);
//Open Connection to mySQL
$db_host = "localhost" ;
$db_username = "root" ;
$db_pass = "" ;
$db_name = "iotraffic" ;


if ($user&&$pass)
{
//connect to db
$connection = mysql_connect($db_host,$db_username,$db_pass);
//$connect = mysql_connect("$server","$username","$password") or die("not connecting");
mysql_select_db($db_name) or die("no db :'(");
$queryuser = mysql_query("SELECT * FROM users WHERE user_name='$user'");
$querypass = mysql_query("SELECT * FROM users WHERE password='$pass'");

$numrows = mysql_num_rows($queryuser);

if ($numrows!=0)
{
//while loop
  while ($rowu = mysql_fetch_assoc($queryuser) && $rowp = mysql_fetch_assoc($querypass))
  {

    $user = $rowu['user_name']&&
    $pass = $rowp['password'];
	header("location:traffic_index.html");
  }
  //else
   //   die("incorrect username/password!");
}
else
  echo "user does not exist!";
}
else
    die("please enter a username and password!");



//echo print_r($_POST);

/* if (!isset($_SERVER['PHP_AUTH_USER'])) {
    header('WWW-Authenticate: Basic realm="My Realm"');
    header('HTTP/1.0 401 Unauthorized');
    echo 'Text to send if user hits Cancel button';
    exit;
} else {
    echo "<p>Hello {$_SERVER['PHP_AUTH_USER']}.</p>";
    echo "<p>You entered {$_SERVER['PHP_AUTH_PW']} as your password.</p>";
} */
?>
