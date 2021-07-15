<?php
$username = $_POST['username'];
$bill = $_POST['bill'];
$service OST['service'];
$noofpeople = $_POST['noofp'];
if (!empty($username) || !empty($bill) || !empty($service) || !empty($noofpeople) || !empty($phoneCode)) {
 $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "tip";
    //create connection
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    if (mysqli_connect_error()) {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } else {
     $SELECT = "SELECT username From feedback Where username = ? Limit 1";
     $INSERT = "INSERT Into register (username, bill, service, noofpeople) values(?, ?, ?, ?)";
     //Prepare statement
     $stmt = $conn->prepare($SELECT);
     $stmt->bind_param("s", $username);
     $stmt->execute();
     $stmt->bind_result($username);
     $stmt->store_result();
     $rnum = $stmt->num_rows;
     if ($rnum==0) {
      $stmt->close();
      $stmt = $conn->prepare($INSERT);
      $stmt->bind_param("ssssii", $username, $bill, $service, $noofpeople);
      $stmt->execute();
      echo "New record inserted sucessfully";
     } else {
      echo "Someone already register using this username";
     }
     $stmt->close();
     $conn->close();
    }
} else {
 echo "All field are required";
 die();
}
?>