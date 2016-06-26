
<!-- <?php echo phpinfo() ?> -->

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>

	<head>
		<title> Lab </title>
        <link rel="stylesheet" href="css/style.css" type="text/css" charset="utf-8"/>
	  	<meta http-equiv="Content-Type" content="text/html"; charset="utf-8"/>
	</head>
	<body>
		<div class="img">

		</div>
		<div class="content">
			<div class="loginup">
                <form name="frm" method="post" action="autentic.php">
                    <input class="email" type="email" name="user" placeholder="Email"/>
                    <input class="pass" type="password" name="key" placeholder="Password">
                    <div class="logindown">
                		<a class="newpass"href="#">Forgot password?</a>
                		<input type="submit" value="Login"></input>
                		<a class="register" href="register.html">Sign Up</a>
            		</div> <!-- logindown -->
                </form>            
            </div> <!-- loginup -->
           
		</div> <!-- content -->

	</body>

</html>