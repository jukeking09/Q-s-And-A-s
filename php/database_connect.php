<?php
    $conn = mysqli_connect("127.0.0.1","root","","q's and a's");
    if(mysqli_connect_errno()){
        echo "Failed to connect MySQL.";
        return;    
    }
?>