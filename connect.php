<?php

$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "youtube";
// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
if($conn)
{
	
$username = mysqli_real_escape_string($conn,$_POST['username']);
$name = mysqli_real_escape_string($conn,$_POST['name']);
$password = mysqli_real_escape_string($conn,$_POST['password']);
$recover = mysqli_real_escape_string($conn,$_POST['rec']);
	
}

if (mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_errno() .') '
. mysqli_connect_error());
}
else{
$sql = "INSERT INTO account (username, name, password, recover)
values ('$username','$name','$password','$recover')";
if ($conn->query($sql)){
	
}
else{


}
$conn->close();
}

?>
<html>
<script>
alert("sign up successful")
window.location = "sign_login.html";
</script>
</html>
<style> /*style is used for css*/
body 
{

 background-color:#8E0E00
 font-family: "jokerman";
 text-align: center;
  background:url("wa.jpg");no-repeat center;
}
#container /* # is selector , here style is applied to id_name(container)*/
{              
  height: 525px;  /* px is for pixel*/
  width: 360px;
  margin: 100px auto; /*auto - the browser calculates the margin*/
  background-color : white;
  box-shadow: 0 0 3px rgba(0, 0, 0, 0.1);
  border-radius: 20px;
  -webkit-border-radius: 20px;
  -moz-border-radius: 20px;
}

</style> 