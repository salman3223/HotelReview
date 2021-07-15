
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Jim Harami</title>
</head>

<body>

<?php
$name = $_POST["user_name"];
$pass = $_POST["user_pass"];


$conn = mysql_connect("localhost" , "root" ,"");

if(!$conn)
{
echo "error in connection";
}
else
{
echo " connection established";
}



mysql_select_db("demo", $conn);

$sql = "insert into tab1e values('$name' , '$pass') ";
echo $sql;

if(mysql_query($sql))
{
echo "row inserted";
}
else
{
echo "error in insertion";
}


$query = "select * from tab1";
$result = mysql_query($query);

if(mysql_num_rows($result)>0)
{
while($row = mysql_fetch_assoc($result))
{
echo "name - " . $row["user_name"];
echo "pass - " . $row["user_pass"];

}
}
else
{
echo "0 rows return";
}



mysql_close();

?>

</body>
</html>
