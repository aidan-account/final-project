<?php

$host = "localhost";
$user = "Aidan";
$pass = "sasha66";
$db = "test";

mysql_connect($host, $user, $pass);
mysql_select_db($db);

if(isset($_POST['username'])){}
    $username = $_Post['username'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM users WHERE username='".$username."'AND password='".$password."' LIMIT 1";
    $res = mysql_query($sql);
    if(mysql_num_rows($res) == 1){
      echo"You have successfully logged in.";
      exit();
    }else{

      echo "Invalid login information. Please return to the previous page.";
      exit();
    }
}
?>
<!DOCTYPE html>
<html>
  <head>
  
  </head>
  <body>
  <form method="post" action="login.php">
  Username: <input type="text" name="username"/><br /><br />
  Password: <input type="password" name="password" /><br /><br />
  <input type="submit" name="submit" value="Log in">
  </form>
    <php>
        
    </php>
    <script>
   
    </script>
  
    


  
  </body>
</html>
