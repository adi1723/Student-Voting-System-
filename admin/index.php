<?php
  	session_start();
  	if(isset($_SESSION['admin'])){
    	header('location:home.php');
  	}
?>
<?php include 'includes/header.php'; ?>
<body class="hold-transition login-page">
<div class="login-box">
  	<div class="login-logo">
  		<b>Voting System</b>
  	</div>
  
  	<div class="login-box-body">
    	<h3 class="login-box-msg">Login Admin</h3>

    	<form action="login.php" method="POST">
      		<div class="form-group has-feedback">
        		<input type="text" class="form-control" name="username" placeholder="Username" required>
        		<span class="glyphicon glyphicon-user form-control-feedback"></span>
      		</div>
          <div class="form-group has-feedback">
            <input type="password" class="form-control" name="password" placeholder="Password" required>
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
      		<div class="row">
    			<div class="col-xs-4">
          			<button type="submit" class="btn btn-primary btn-block btn-flat" name="login"><i class="fa fa-sign-in"></i> Sign In</button>
        		</div>
      		</div>
    	</form>
  	</div>

  	<?php
  		if(isset($_SESSION['error'])){
  			echo "
  				<div class='callout callout-danger text-center mt20'>
			  		<p>".$_SESSION['error']."</p> 
			  	</div>
  			";
  			unset($_SESSION['error']);
  		}
  	?>
</div>

<?php include 'includes/scripts.php' ?>
<style>/* Global Styling */
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Arial', sans-serif;
}

/* Full page background */
body {
  background: linear-gradient(45deg, #b3c6ff, #e0f7fa); /* Faint gradient */
  height: 100vh;
  display: flex;
  justify-content: center;
  align-items: center;
  perspective: 1500px; /* 3D perspective for the scene */
  overflow: hidden; /* Prevents scrollbars */
  position: relative; /* Ensure footer stays at bottom */
}

/* Login Box Styling */
.login-box {
  width: 350px;
  padding: 40px;
  background: rgba(255, 255, 255, 0.85);
  border-radius: 12px;
  box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
  text-align: center;
  transition: transform 0.3s ease, box-shadow 0.3s ease;
  position: relative;
  z-index: 1;
}

/* Logo Styling */
.login-logo {
  font-size: 32px;
  font-weight: bold;
  color: #4a90e2;
  margin-bottom: 20px;
  text-transform: uppercase;
  letter-spacing: 2px;
  animation: popIn 1s ease-out forwards; /* Pop-in and bounce effect */
}

/* Logo Pop-In and Bounce Animation */
@keyframes popIn {
  0% {
    transform: scale(0.5);
    opacity: 0;
  }
  40% {
    transform: scale(1.2);
    opacity: 1;
  }
  60% {
    transform: scale(0.9);
  }
  80% {
    transform: scale(1.05);
  }
  100% {
    transform: scale(1);
  }
}

/* Login Box Body */
.login-box-body {
  margin-top: 10px;
}

/* Form Elements Styling */
.form-group {
  margin-bottom: 20px;
}

.form-control {
  width: 100%;
  padding: 12px;
  font-size: 16px;
  border-radius: 6px;
  border: 1px solid #ccc;
  background: #fafafa;
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}

/* Input focus styling */
.form-control:focus {
  border-color: #4a90e2;
  box-shadow: 0 0 10px rgba(74, 144, 226, 0.5);
  transform: scale(1.05);
}

/* Button Styling */
.btn {
  padding: 12px;
  font-size: 16px;
  border: none;
  background: #4a90e2;
  color: #fff;
  text-transform: uppercase;
  letter-spacing: 1px;
  border-radius: 6px;
  cursor: pointer;
  transition: background-color 0.3s ease, transform 0.3s ease, box-shadow 0.3s ease
}

/* Button Hover Effect */
.btn:hover {
  background-color: #357ab7;
  transform: translateY(-5px) scale(1.05) rotateY(15deg);
  box-shadow: 0 5px 20px rgba(0, 0, 0, 0.3);
}

/* Error Message Styling */
.callout.callout-danger {
  background-color: #f8d7da;
  color: #721c24;
  padding: 10px;
  margin-top: 15px;
  border-radius: 6px;
  font-size: 14px;
  text-align: center;
}

/* Footer Styling */
footer {
  background-color: #4a90e2;
  color: #fff;
  padding: 10px 0;
  text-align: center;
  font-size: 14px;
  position: absolute;
  bottom: 0;
  width: 100%;
  left: 0;
  box-shadow: 0 -5px 20px rgba(0, 0, 0, 0.1);
}

/* Footer Text Styling */
footer p {
  margin: 0;
}

/* Footer Text Positioning */
footer p {
  text-align: center;
  color: #fff;
}

@keyframes rotateBackground {
  0% {
    transform: rotate(0deg);
  }
  50% {
    transform: rotate(360deg);
  }
  100% {
    transform: rotate(720deg);
  }
}

</style>

</body>
<footer>
<p><center>Login Details Are Provided Inside adminlogin.txt File<center></p>
</footer>
</html>
