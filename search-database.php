<?php 
//load database connection
    $host = "localhost";
    $user = "root";
    $password = "";
    $database_name = "tip";
    $pdo = new PDO("mysql:host=$host;dbname=$database_name", $user, $password, array(
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ));
// Search from MySQL database table
$search=$_POST['search'];
$query = $pdo->prepare("select * from feedback3 where Restaurantname LIKE '%$search%'  LIMIT 0 , 10");
$query->bindValue(1, "%$search%", PDO::PARAM_STR);
$query->execute();
// Display search result
         if (!$query->rowCount() == 0) {
			 
			    $a="a";
		 		echo"<div id = a>";
				echo "<table st>";	
                echo "<tr><td style=\"border-style:solid;border-width:1px;color: white;\"> User Name </td><td style=\"border-style:solid;border-width:1px;color: white;\"> Restaurant name </td><td style=\"border-style:solid;border-width:1px;color: white;\"> Bill </td><td style=\"border-style:solid;border-width:1px;color: white;\"> Service </td><td style=\"border-style:solid;border-width:1px;color: white;\">no of people </tr>";				
            while ($results = $query->fetch()) {
				echo "<tr><td style=\"border-style:solid;border-width:1px;color: white;\">";			
                echo $results['username'];
				echo "</td><td style=\"border-style:solid;border-width:1px;color: white;\">";
                echo $results['Restaurantname'];
				echo "</td><td style=\"border-style:solid;border-width:1px;color: white;\">";
                echo $results['bill'];
				echo "</td><td style=\"border-style:solid;border-width:1px;color: white;\">";
                echo $results['service'];
				echo "</td><td style=\"border-style:solid;border-width:1px;color: white;\">";
                echo $results['noofpeople'];
				echo "</td></tr>";				
				
            }
				echo "</table>";		
        } else {
            echo 'Nothing found';
		}
		echo "</div>";
		
		?>
		
		
	<style>
	#a
	{
  height: 230px;
  width: 360px;
  margin: 15px auto;
 
  box-shadow: 0 0 3px rgba(0, 0, 0, 0.1);
  border-radius: 20px;
  -webkit-border-radius: 25px;
  -moz-border-radius: 25px;
  text-align: center;
  color:white;
  font-size: 11px;
	}
	body {
  font-family: Roboto;
  background: #8E0E00;
  /* fallback for old browsers */
  background: -webkit-linear-gradient(to left, #8E0E00, #1F1C18);
  /* Chrome 10-25, Safari 5.1-6 */
  background: linear-gradient(to left, #8E0E00, #1F1C18);
  /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
  
  
}
table, td, th {
  border: 1px solid black;
}

table {
  width: 100%;
   border-collapse: collapse;
}

th , tr , td {
  padding: 15px;
}
	</style>