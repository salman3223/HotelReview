<!DOCTYPE html>
<html lang="en">

<head>

<script src="jquery-3.2.1.min.js" type="text/javascript"></script>

        <script type="text/javascript">

	
            $(document).ready(function(){

                $("#but_submit").click(function(){
                    var username = $("#txt_uname").val().trim();
                    var password = $("#txt_pwd").val().trim();
					if (username == "") 
					{
					alert("Name must be filled out");
					return false;
					}	
					if (password == "") 
					{
					alert("Name must be filled out");
					return false;
					}	

                    if( username != "" && password != "" ){
                        $.ajax({
                            url:'checkUser.php',
                            type:'post',
                            data:{username:username,password:password},
                            success:function(response){
                                var msg = "";
                                if(response == 1){
                                    window.location = "h.html";
                                }else{
                                    msg = "Invalid username and password!";
									alert("invalid password or username")
                                }
                                $("#message").html(msg);
                            }
                        });
                    }
                });

            });
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
				
                <h1></h1>
                
					<h1>Id</h1><br>
                    <input type="text" class="textbox" id="txt_uname" name="txt_uname" placeholder="Username" required /><br><br><br><br>
					<h1>Password</h1><br>
                
                    <input type="password" class="textbox" id="txt_pwd" name="txt_pwd" placeholder="Password" required /><br><br><br><br>
					
                    <input type="button" value="Login" name="but_submit" id="but_submit" /><br><br><br><br>
					<form name="myForm" action="" method="post">
		    <h1>Forget password</h1><br><br>
		    <button type="Submit" class="button button2" formaction="recover2.html">Forget password</button></input>
			</form>
		   
                
            </div>
			<div class="video-container">
            <div class="color-overlay"></div>
            <video autoplay loop muted>
                <source src="2.mp4" type="video/mp4">
            </video>
        </div>

        </div>
		<div style="height:400px;width:100%">
        
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