<?php
  	session_start();
  	if(isset($_SESSION['admin'])){
    	header('location: admin/home.php');
  	}

    if(isset($_SESSION['voter'])){
      header('location: home.php');
    }
?>
<?php include 'includes/header.php'; ?>
<body>
  <div class="login-container">
    <div class="login-box">
      <div class="login-logo">
        <b>Student Login</b>
      </div>
      <div class="login-box-body">
        <p class="login-box-msg">Sign in to start your session</p>
        <form action="login.php" method="POST">
          <div class="form-group">
            <input type="text" class="form-control" name="voter" placeholder="Voter's ID" required>
          </div>
          <div class="form-group">
            <input type="password" class="form-control" name="password" placeholder="Password" required>
          </div>
          <div class="row">
            <div class="col-xs-12">
              <button type="submit" class="btn btn-primary btn-block btn-flat" name="login">Sign In</button>
            </div>
          </div>
        </form>
      </div>
      <?php
        if(isset($_SESSION['error'])){
          echo "<div class='error-message'>".$_SESSION['error']."</div>";
          unset($_SESSION['error']);
        }
      ?>
    </div>
  </div>
<?php include 'includes/scripts.php'; ?>
<style>/* Global Styling */
* /* Global Styling */
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Arial', sans-serif;
}

/* Full page background with a gradient and faint gray */
body {
  background: linear-gradient(45deg, #b3c6ff, #e0f7fa); /* Faint gradient */
  height: 100vh;
  display: flex;
  justify-content: center;
  align-items: center;
  perspective: 1500px; /* 3D perspective for the scene */
  overflow: hidden; /* Prevents scrollbars */
}

/* Wrapping container with 3D space for effect */
.wrapper {
  display: flex;
  justify-content: center;
  align-items: center;
  width: 100%;
  height: 100%;
  transform-style: preserve-3d;
  animation: rotateBackground 30s infinite linear;
}

/* Login Box Styling with 3D Effect */
.login-box {
  width: 350px;
  padding: 40px;
  background: rgba(255, 255, 255, 0.85);
  border-radius: 12px;
  box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
  text-align: center;
  transition: transform 0.3s ease, box-shadow 0.3s ease;
  transform: rotateX(10deg); /* Add slight X-axis rotation for 3D effect */
}

/* 3D Effect on Login Box Hover */
.login-box:hover {
  transform: translateY(-10px) scale(1.03) rotateX(15deg); /* Adding deeper rotation on hover */
  box-shadow: 0 25px 45px rgba(0, 0, 0, 0.3);
}

/* Logo with Pop-In 3D Animation */
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

/* Input focus with 3D effect */
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
  transition: background-color 0.3s ease, transform 0.3s ease, box-shadow 0.3s ease;
}

/* Button Hover with 3D effect */
.btn:hover {
  background-color: #357ab7;
  transform: translateY(-5px) scale(1.05) rotateY(15deg);
  box-shadow: 0 5px 20px rgba(0, 0, 0, 0.3);
}

/* Error Message Styling */
.error-message {
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
  text-align: center;
  font-size: 14px;
  color: #333;
  margin-top: 20px;
}

footer p {
  margin: 0;
}

/* Animation for rotating the background */
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
</html>
