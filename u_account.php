<!DOCTYPE html>
<html>
<head>
  <title>Dashboard</title>
  <!-- <link rel="stylesheet" href="dashboard.css"> -->
  <link rel="stylesheet" href="hover.css">
  <link rel="stylesheet" href="header.css">
  <style>
body {
    font-family: Arial, sans-serif;
    background-image: url('Screenshot 2024-03-28 115145.png');
    background-size: cover;
    background-position: center;
    background-attachment: fixed;
    margin: 0;
    padding: 0;
  }
  
  .container {
    display: flex;
    justify-content: space-between;
    height: 90vh;
    padding: 20px;
    margin: 5px;
    background-color: transparent;
  }
  
  .left-column {
    width: 70%;
    display: flex;
    flex-direction: column;
  }
  
  .section-card {
    background-color: rgba(0, 0, 0, 0.266);
    border-radius: 5px;
    padding: 20px;
    margin-bottom: 20px;
    width: 85%;
    height: 85%;
    margin: 5px;
  }
  
  .section-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 20px;
    color:  white;
  }
  
  .section-content {
    margin-top: 50px;
    color: white;
    text-align: left;
  }
  
  .right-column {
    width: 30%;
    display: flex;
    flex-direction: column;
    margin-left: 5px;
    color: white;
  }
  
  .box {
    background-color: rgba(0, 0, 0, 0.5);
    border-radius: 5px;
    padding: 15px;
    width: 90%;
    height: 50%;
    margin-bottom: 20px;
  }
  .box p{
  /* border: 1px solid black; */
  display: flex;
  padding-top: 5px;
  padding-bottom: 10px;
  width: 345px;
  height:  200px;
  border: 1px solid transparent;
  margin: 20px;
  margin-left: 12px;
  background-color: rgba(0, 0, 0, 0.3);
  box-shadow: 0px 0px 3px rgba(0, 0, 0, 0.2); 
  }
  h1, h2 {
    margin: 0;
  }
  
  p {
    margin: 0;
    padding: 0;
  }
 
  table {
  border-collapse: collapse;
  width: 50%;
  background-color:  rgba(0, 0, 0, 0.5);
}

table, th, td {
  border: 1px solid black;
  padding: 8px;
  text-align: left;
}
table tr{
    height: 10px;
}
table th {
  background-color:  rgba(0, 0, 0, 0.5);
  color: while;
  font-weight: bold;
  padding: 12px;
  width: auto;
}

table th:nth-child(2) {
  width: auto;/* second column width */
}
table tr:hover {
  background-color: #555;

}
  </style>
</head>
<body>
  <header>
    <nav>
      <a class="navbar-brand"   href="home.html"> <img src="Screenshot 2024-03-27 081402.png" class="logo"></a>
       <a href="logout.php" class="button">LOGOUT</a>
       <a href="cont.html" class="button">CONTACT</a>
     
      <!-- <div class="hover-links">
          <a href="ad_log.php">Admin</a>
          <a href="login.php">Student</a>
        </div> -->
  </nav>
  </header>
  <div class="container">
    <div class="left-column">
      <div class="section-card">
        <div class="section-header">
           <h1>
           <?php
 include 'c.php';
// include 'c2.php';
session_start();
$sum=$_SESSION['username'];
$sql="SELECT * FROM `data` WHERE username='$sum'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
 $row = $result->fetch_assoc();
 echo "Hello ".$row['fullame']  ; 
}else{
    echo "hello";
}
?>
           </h1>
        
        </div>
        <div class="section-content">
          <!-- Content for section 1 -->
          <h3>Personal Details</h3>
          <table>
            <tr><th>NAME</th>
                <td><?php echo $row['fullame']; ?></td>
            </tr>
            <tr><th>Roll no</th>
            <td><?php echo $row['rollno']; ?></td>
            </tr>
            <tr><th>ROOM NO.</th>
            <td><?php echo $row['room']; ?></td>
            </tr>
          </table>
        </div>
      </div>
      <!-- Add more sections below -->
    </div>

    <div class="right-column"> 
      <div class="box">
        <h2>Important Alerts</h2>
        <!-- Content for important alerts -->
        <p id="ualt"><?php echo $row['mas']; ?></p>
      </div>
      </div>
    </div>
  </div>
</body>
</html>