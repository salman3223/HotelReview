<?php
$username = filter_input(INPUT_POST, 'username');
$Restaurantname = filter_input(INPUT_POST, 'Rname');
$bill = filter_input(INPUT_POST, 'bill');
$service = filter_input(INPUT_POST, 'service');
$noofpeople = filter_input(INPUT_POST, 'noofp');
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "tip";
// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
if (mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_errno() .') '
. mysqli_connect_error());
}
else{
$sql = "INSERT INTO feedback3 (username, Restaurantname, bill, service, noofpeople)
values ('$username','$Restaurantname','$bill','$service','$noofpeople')";
if ($conn->query($sql)){
}
else{
echo "Error: ". $sql ."
". $conn->error;
}
$conn->close();
}
?>
<html>
<script>
window.location = "h.html";
</script>
</html>