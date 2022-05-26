<?php
    include("php/session_start.php");
?>
<!DOCTYPE html>
<html>
    <title>Dashboard</title>
    <link rel="stylesheet" href="dashboard.css">
    <head>
        <div class="topnav">
        <a href="logout.php">Logout</a>
        <a href="home.php">Home Page</a>
        <p>Hey, <?php echo $_SESSION['first_name']; ?>! Welcome To Q's And A's</p>
        </div>
    </head>
<body>
    <div class="body_content">
        <div class="user_details">
            <?php
                require "php/database_connect.php";
                $id = $_SESSION['id'];   
                $query="SELECT * FROM `users` WHERE id ='$id'";
                $result = mysqli_query($conn, $query) or die(mysql_error());
                $row = mysqli_fetch_assoc($result);
            ?>
            <label>First Name:</label><?php echo $row['first_name'];?><br>
            <label>Last Name:</label><?php echo $row['last_name'];?><br>
            <label>Email:</label><?php echo $row['email'];?><br>
            <label>College:</label><?php echo $row['college'];?><br>
            <label>Account Created On:</label><?php echo $row['create_datetime'];?><br>
        </div>
    </div>
</body>
</html>