<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    include 'c.php';
    $username=$_POST['username'];
    $password=$_POST['password'];

$sql="SELECT * FROM data WHERE username='$username' and  password= '$password'";
$result=mysqli_query($conn,$sql);
if($result){
    $rowcount=mysqli_num_rows($result);
    if($rowcount>0){
      session_start();
    $_SESSION['username'] = $username;
    header('Location: u_account.php');
}else{
    $message = "wrong password";
    echo "<script type='text/javascript'>
    window.alert('$message');
    </script>"; 
}
}
}?>
 <!DOCTYPE html>
<html>
<head>
  <title>Login page</title>
  <link rel="stylesheet" href="body.css">
  <link rel="stylesheet" href="header.css">
  <link rel="stylesheet" href="log.css">
</head>
<body>
  <header>
    <nav>
        <a class="navbar-brand"   href="home.html"> <img src="Screenshot 2024-03-27 081402.png" class="logo"></a>
         <a href="cont.html" class="button">CONTACT</a>
    </nav>
  </header>
  <div>
  <h1>Login</h1>
  <form action="login1.php" method="post">
    <label>Username</label>
    <input type="text" name="username" required />
    <br />
    <label>Password</label>
    <input type="password" name="password" required />
    <br />
    <input type="submit" value="Login" />
	<br>
	<p><h4>or</h4></p>
	<a href="register.php"  id = "link" > APPALY </a>
  </form>
</div>
</body>
</html>