<!DOCTYPE html>
<html lang="en">

<head>
<script>
function validateForm() 
{
 
 var x = document.forms["myForm"]["username"].value;
 
 var n = x.includes("'");
 var n1 = x.includes("<");
 var n2 = x.includes(">");
 var n3 = x.includes("!");
 var n4 = x.includes("|");
 var n5 = x.includes("$");
 var n6 = x.includes("#");
 var n7 = x.includes("*");
 var n8 = x.includes("(");
 var n9 = x.includes(")");
 var n10 = x.includes("?");
 var n11 = x.includes(";");
 
 
  if (n == "1" || n1 == "1" || n2 == "1" || n3 == "1" || n4 == "1" || n5 == "1" || n6 == "1" || n7 == "1" || n8 == "1" || n9 == "1" || n10 == "1" || n11 == "1")
 
 {
	alert("no special character are allowed to use");
	return false;
 }
var y = document.forms["myForm"]["password"].value;
var m = y.includes("'");
 var m1 = y.includes("<");
 var m2 = y.includes(">");
 var m3 = y.includes("!");
 var m4 = y.includes("|");
 var m5 = y.includes("$");
 var m6 = y.includes("#");
 var m7 = y.includes("*");
 var m8 = y.includes("(");
 var m9 = y.includes(")");
 var m10 = y.includes("?");
 var m11 = y.includes(";");


 if (m == "1" || m1 == "1" || m2 == "1" || m3 == "1" || m4 == "1" || m5 == "1" || m6 == "1" || m7 == "1" || m8 == "1" || m9 == "1" || m10 == "1" || m11 == "1")
 
 {
	alert("no special character are allowed to use");
	return false;
 }
 else
 {	
   
	
 }
 
 

}

</script>

	    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    <link href="https://fonts.googleapis.com/css?family=Cookie" rel="stylesheet">
    
    <title>Video Background</title>
</head>

<body>

    <div class="section">

        
		<div class="section1">
<form name="myForm" action="recover4.php"
onsubmit="return validateForm()" method="post">

			<h1>Recovery</h1><br><br><br>
			<h1>Id</h1><br>
		<input id="loc" type="email"placeholder="Enter your Id " name="username" align="center" required ><br><br><br><br>
		<h1>New Password</h1><br>
		<input id="loc" type="password" placeholder="Enter your Password  " name="password" align="center" required><br><br><br><br>
                
                
		
		<input type="submit" value="Recover">
		
		</form>
		</div>
        <div class="video-container">
            <div class="color-overlay"></div>
            <video autoplay loop muted>
			
                <source src="2.mp4" type="video/mp4">
            </video>
        </div>

    </div>
    <div style="height:100px;width:0%">
        
    </div>

</body>
</html>
<style>
.section {

  position: relative;
  width: 100%;
  height: 100vh;
  display: flex;
  align-items: center;
  justify-content: center;
  overflow: hidden;
  
  ext-align: center;
}

.section1
{
  	
  text-align: center;
  font-size: 19px;
  padding: 70px;
 
  z-index: 1;
  opacity: 0.5;
  height: 425px;  /* px is for pixel*/
  width: 270px;
  margin: 100px auto; /*auto - the browser calculates the margin*/
  background-color : white;
  box-shadow: 0 0 3px rgba(0, 0, 0, 0.6);
  border-radius: 20px;
  -webkit-border-radius: 20px;
  -moz-border-radius: 20px;
  
}

.video-container {
 
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  margin-left: auto;
    margin-right: auto;
    display: block
   
}

.color-overlay {
  position: absolute;
  top: 0;
  left: 0;
   margin: 0 auto; 
  width: 400px;
  height: 100vh;
  opacity: 0.5;
  margin-left: auto;
    margin-right: auto;
    display: block
}

</style>