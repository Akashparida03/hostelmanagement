<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    $use=$_POST['username'];
    $pas=$_POST['password'];
if($use === "admin" and $pas === "password"){
    header('Location: ad_hom.html');
    exit();
}else{
    $message = "wrong password";
    echo "<script type='text/javascript'>
    window.alert('$message');
    </script>"; 
}
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Aadmin login</title>
  <link rel="stylesheet" href="body.css">
  <link rel="stylesheet" href="header.css">
  <style>

    h1 {
      text-align: center;
      margin-bottom: 50px;
	  font-size: 50px;
    }
    form {
      /* Position the form at the exact center of the page */
      position: absolute;
       top: 50%;
      left: 50%; 
      transform: translate(-50%, -50%);
      /* Increase the width to 150% of the original width */
      width: 500px;
	  height: 250px;
      text-align: center;
	  background-color: rgba(0, 0, 0, 0.5);
	  padding: 5px;
	  border-radius: 8px;
    }
    label {
      display: block;
      margin-bottom: 7px;
	  font-size: 18px;
    padding: 3px;
    }
    input[type="text"], input[type="password"] {
      width: 450px;
      height: 30px;
      margin-bottom: 20px;
      padding: 3px;
      border-radius: 8px;
    }
    input[type="submit"] {
      width: 150px;
      height: 40px;
      font-size: 18px;
	  padding: 3px;
    border-radius: 8px;
    }
	
  </style>
</head>
<body>
  <header>
    <nav>
    <a class="navbar-brand"   href="home.html"> <img src="Screenshot 2024-03-27 081402.png" class="logo"></a>
         <a href="home.html" class="button">HOME</a>
    </nav>
  </header>
  <h1>ADMIN LOGIN</h1>
  <form action="ad_log.php" method="post">
    <label>Username:</label>
    <input type="text" name="username" required />
    <br />
    <label>Password:</label>
    <input type="password" name="password" required />
    <br />
    <input type="submit" value="Login" />
	<br>
  </form>
</body>
</html>