<?php  
// define variables and set to empty values
//$username  = $password = "";
//if ($_SERVER["REQUEST_METHOD"] == "POST"){
	//echo $username ;
	//echo $password;
//}
if ($PHP_AUTH_USER != "username"  

    or $PHP_AUTH_PW != "password"):

  // Bad or no username/password.  

  // Send HTTP 401 error to make the  

  // browser prompt the user.  

  // header("WWW-Authenticate: " .  

         // "Basic realm="Protected Page: " .  

         // "Enter your username and password " .  

         // "for access."");  

  // header("HTTP/1.0 401 Unauthorized");  

  // Display message if user cancels dialog  

  ?>  

  <HTML>  

  <HEAD><TITLE>Authorization Failed</TITLE></HEAD>  

  <BODY>  

  <H1>Authorization Failed</H1>  

  <P>Without a valid username and password,  

     access to this page cannot be granted.  

     Please click 'reload' and enter a  

     username and password when prompted.  

  </P>  

  </BODY>  

  </HTML>  

<?php else:
if ($PHP_AUTH_USER == "username"  

    && $PHP_AUTH_PW == "password"):
	header("traffic_index.html");
 ?>  

  ...page contents here...  

<?php endif; ?>