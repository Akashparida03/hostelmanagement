<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    include 'c.php';
    $username=$_POST['username'];
$sql = "DELETE FROM data WHERE username='$username'";
$stmt = $conn->prepare($sql);
$stmt->execute();

if ($stmt->affected_rows > 0) {
    echo "Data updated successfully.";
} else {
    echo "Data not updated.";
}
$conn->close();
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin home page</title>
    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="body.css">
	<style>
        body {
    font-family: Arial, sans-serif;
    margin: 0px;
    padding: 0px;
}
.container {
            width: 80%;
            margin: 40px auto;
            border: 1px solid #ccc;
            padding: 10px;
            background-color: rgba(0, 0, 0, 0.5);
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
        }

section {
    padding: 20px;
    
}
table{
    background-color:  rgba(0, 0, 0, 0.5);

}
section h2 {
    text-align: center;
    font-size: 24px;
    margin-bottom: 10px;
}

table {
  border-collapse: collapse;
  width: 100%;
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
  width: 14.28%; /* first column width */
}

table th:nth-child(2) {
  width: 14.28%; /* second column width */
}

table th:nth-child(3) {
  width: 14.28%; /* third column width */
}

table th:nth-child(4) {
  width: 14.28%; /* fourth column width */
}

table th:nth-child(5) {
  width: 14.28%; /* fifth column width */
}

table th:nth-child(6) {
  width: 5%; /* sixth column width */
}

table th:nth-child(7) {
  width: 6%; /* seventh column width */
}
table th:nth-child(8) {
  width: 6%; /* seventh column width */
}

table tr:nth-child(even) {
  background-color: transparent;
}

table tr:hover {
  background-color: #555;

}

table th:first-child, table td:first-child {
  border-left: none;
}

table th:last-child, table td:last-child {
  border-right: none;
}

</style>
</head>
<body>
<header>
    
        
    <nav>
     <a class="navbar-brand"   href="home.html"> <img src="Screenshot 2024-03-27 081402.png" class="logo"></a>
     <a href="ad_hom.html" class="button">HOME</a>
        <a href="logout.php" class="button">LOGOUT</a>
     <!-- <a href="ad.php" class="button">ADMIN LOGIN</a>
         <a href="login1.php" class="button">STUDENT LOGIN</a>
        <a href="gallery.html" class="button">GALLERY</a>
            <button id="nav-button-4" class="button">Button 3</button>
            <button id="nav-button-5" class="button">Button 3</button>
            <button id="nav-button-6" class="button">Button 3</button> -->
        </nav>
    </header>
	<main>
		<section id="content-1">
			<h2>Details of all students</h2>
            <div class="container">
        <!-- Table and form will go here -->
        <table border="0" cellpadding="10" cellspacing="0">
    <tr>
        <th>USERNAME</th>
        <th>MOB NO</th>
        <th>EMAIL</th>
        <th>ROLL NO.</th>
        <th>FULLNAMME</th>
        <th>ROOM NO.</th>
        <th>Action</th>
    </tr>
    <?php
   // $conn = new mysqli(HOST, USERNAME, PASSWORD, DATABASE);
include 'c.php';
    $query = "SELECT * FROM data";
    $result = $conn->query($query);
    while ($row = $result->fetch_assoc()) {
    ?>
        <tr>
            <td><?php echo $row['username']; ?></td>
            <td><?php echo $row['mobilno']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['rollno']; ?></td>
            <td><?php echo $row['fullame']; ?></td>
            <td><?php echo $row['room']; ?></td>
            <!-- <td><?php echo date('d-m-Y', strtotime($row['costdate'])); ?></td> -->
            <td>
            <form action="ad_dil.php" method="post">
                    <input type="hidden" name="username" value="<?php echo $row['username']; ?>">
                    <input type="submit"  value="deleate">
                </form>
            </td>
        </tr>
    <?php
    }
    ?>
</table>
    </div>
		</section>
	</main>
	<!-- <script>const button1 = document.getElementById("nav-button-1");
const button2 = document.getElementById("nav-button-2");
const button3 = document.getElementById("nav-button-3");

const content1 = document.getElementById("content-1");
const content2 = document.getElementById("content-2");
const content3 = document.getElementById("content-3");

button1.addEventListener("click", () => {
    content1.style.display = "block";
    content2.style.display = "none";
    content3.style.display = "none";
});

button2.addEventListener("click", () => {
    content1.style.display = "none";
    content2.style.display = "block";
    content3.style.display = "none";
});

button3.addEventListener("click", () => {
    content1.style.display = "none";
    content2.style.display = "none";
    content3.style.display = "block";
});

content1.style.display = "block";
content2.style.display = "none";
content3.style.display = "none";</script> -->
</body>
</html>