<?php 
if($_SERVER['REQUEST_METHOD']=='POST'){
    include 'c.php';
    $mas=$_POST['mas'];
    $username=$_POST['username'];
$sql = "UPDATE data SET mas =? WHERE username = ?";
$stmt = $conn->prepare($sql);

$stmt->bind_param("ss", $mas, $username);
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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notification</title>
    <link rel="stylesheet" href="body.css">
    <link rel="stylesheet" href="header.css">
    <style>
        .container {
            width: 700px;
            margin: 40px auto;
            border: 1px solid #ccc;
            padding: 10px;
            background-color: rgba(0, 0, 0, 0.5);
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
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
  width: auto;
}

table th:nth-child(2) {
  width: auto;/* second column width */
}
table th:nth-child(3) {
  width: auto;/* second column width */
}
table th:nth-child(4) {
  width: auto;/* second column width */
}
table tr:hover {
  background-color: #555;

}
h2 {
    text-align: center;
    font-size: 24px;
    margin-bottom: 10px;
}

    </style>
</head>
<body>
    <header>
        <nav>
        <a class="navbar-brand"   href="home.html"> <img src="Screenshot 2024-03-27 081402.png" class="logo"></a>
        <a href="ad_hom.html" class="button">HOME</a>
        <a href="logout.php" class="button">LOGOUT</a>
        </nav>
    </header>
    <h2>Notification</h2>
    <div class="container">
        <!-- Table and form will go here -->
        <table border="0" cellpadding="10" cellspacing="0">
    <tr>
        <th>NAME</th>
         <th>ROOL NO.</th>
        <th>NOTIFICATION</th>
        <th>ACTION</th>
    </tr>
    <?php
   // $conn = new mysqli(HOST, USERNAME, PASSWORD, DATABASE);
   include 'c.php';
    $query = "SELECT * FROM data";
    $result = $conn->query($query);
    while ($row = $result->fetch_assoc()) {
    ?>
        <tr>
           
            <td><?php echo $row['fullame']; ?></td>
            <td><?php echo $row['rollno']; ?></td> 
            <!-- <td><?php echo date('d-m-Y', strtotime($row['costdate'])); ?></td> -->
            <td>
                <form action="ad_info.php" method="post">
                    <!-- <input type="text" name="mas" value="<?php echo $row['mas']; ?>"> -->
                    <textarea name="mas" value="<?php echo $row['mas']; ?>" cols="30" rows="5"></textarea>
                    <input type="hidden" name="username" value="<?php echo $row['username']; ?>">
                    </td>
                    <td>
                    <input type="submit"  value="PUSH">
                </td>
                </form>
        </tr>
    <?php
    }
    ?>
</table>
  

<!-- <script>
    // Add this JavaScript to the bottom of the page
    window.onload = function() {
        if (window.confirm("Are you sure you want to delete this row?")) {
            // If the user clicks "OK", submit the form
            document.forms[0].submit();
        }
    }
</script> -->
</body>
</html>
