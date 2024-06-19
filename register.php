
<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    include 'c.php';
    $username=$_POST['username'];
    $password=$_POST['password'];
    $mobilno=$_POST['mobilno'];
    $email=$_POST['email'];
    $rollno=$_POST['rollno'];
    $fullame=$_POST['fullame'];

$sql="SELECT * FROM data WHERE username='$username'";
$result=mysqli_query($conn,$sql);
 $rowcount=mysqli_num_rows($result);
if($rowcount>0){
  //echo "Username already exists.";   
  $message = "Username already exists.";
echo "<script type='text/javascript'>
window.alert('$message');
</script>";
}else
 {
 $sql="INSERT  INTO data (username, password, mobilno, email, rollno, fullame) VALUES ('$username'  , '$password' , $mobilno , '$email' ,'$rollno' , '$fullame')";
//  $stmt = $conn->prepare($sql);
//  $stmt->execute();
//  $stmt->close();
//  mysqli_close($conn);

    $result=mysqli_query($conn,$sql);
    if($result){
     header('Location: home.html');
     
       }
 else{
    die("Connection failed: " . mysqli_connect_error());
     }
 }
}
?><!DOCTYPE html>
<html>
<head>
  <title>Registration form</title>
  <link rel="stylesheet" href="body.css">
  <link rel="stylesheet" href="header.css">
  <style>
    
    /* Add some base styles for the page */
    .hed{
       margin-top: 12px;   
      text-align: center;
  
    }
    /* .dive {
      
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      width: 650px;
      height: 620px;
      margin-top: 4px;
      border: none;
      background-color: rgba(0, 0, 0, 0.5);
      border-radius: 12px;
      text-align: center
     
      padding: 5px;
    }
    form{
      top: 60%;
      width: 500px;
      height: 620px;
      display: flex;
      flex-direction: column;
      justify-content: 3px;

      margin-top: 10px;
    } */
    .dive {
  position: relative;
  display: flex;
  justify-content: center;
  align-items: center;
  height: 93vh;
  margin-top: 0px;

}
.di{
  width: 480px;
  height: 580px;
  background-color:  rgba(0, 0, 0, 0.5);
  border-radius: 12px;
  margin: 0px;
}
form {
  position: absolute;
  top: 53%;
  width: 400px;
  transform: translateY(-50%);
  padding-top: 10px;
  padding: 40px;
  margin-left: 30px;
  margin-right: 30px;

}
    label {
      display: block;
      margin-bottom: 1px;
      border: 2px solid transparent;

    }
    input[type="text"], input[type="password"], input[type="email"] {
      /* Add some basic styles for the input fields */
      width: 100%;
      height: 25px;
      margin-bottom: 10px;
      padding: 1px;
      border: none;
      border-radius: 5px;
      /* background-color: rgba(0, 0, 0, 0.5); */
      color: black;
    }
    input[type="submit"] {
      /* Add some basic styles for the submit button */
      width: 90px;
      height: 25px;
      font-size: 18px;
	  padding: 2px;
      margin-left: 40%;
      margin-top: 5px;
    }
     input[type="submit"]:hover {
      /* Add a hover effect for the submit button */
       background-color:#87CEEB ; 
      

      
    }
    input[type="number"] {
      /* Add some basic styles for the number input field */
      width: 100%;
      height: 25px;
      margin-bottom: 10px;
      padding: 1px;
      border: none;
      border-radius: 5px;
      /* background-color: rgba(0, 0, 0, 0.5); */
      color: black;
      
    }
   
    
    .ide {
      /* Add some basic styles for the "Already have an account?" link */
     width: 100px;
     height: 30px;
      text-decoration: underline;
      color: white;
      text-align: center;
      left: 50;
      margin-left: 42%;
      &:hover {
        transform: scale(1.1);
        background-color: #555;
    }
    }
   
  </style>
</head>
<body>
  <header>
    <nav>
    <a class="navbar-brand"   href="home.html"> <img src="Screenshot 2024-03-27 081402.png" class="logo"></a>
         <a href="home.html" class="button">HOME</a>
         <a href="cont.html" class="button">CONCACT</a>
    </nav>
  </header>
  <div CLASS="dive" >
    <div class="di">
    <h1 class="hed">Appaly For Hostel</h1>
  </div>
  <form action="register.php" method="post">
    <label for="name">Name:</label>
    <input type="text" id="name" name="fullame" required />
    <br />
    <label for="mobile">Mobile Number:</label>
    <input type="number" id="mobile" name="mobilno" required />
    <br />
    <label for="email">Email:</label>
    <input type="email" id="email" name="email"  required />
    <br />
    <label for="roll">Roll Number:</label>
    <input type="text" id="roll" name="rollno"  required />
    <br />
    <label for="username">Username:</label>
    <input type="text" id="username" name="username"  required />
    <br />
    <label for="password">Password:</label>
    <input type="password" id="password" name="password"  required />
    <br />
    <input type="submit" value="Appaly" /> 
    <br>
    <br>
    <label style="text-align: center";>Or</label>
    <a href="login1.php" class="ide" >Go to Login</a>
  </form>
</div>
</body>
</html> 