<html>
    <title>Register</title>
    <head>
        <script>
            if ( window.history.replaceState ) {
                window.history.replaceState( null, null, window.location.href );
            }
        </script>
        <link rel="stylesheet" href="register.css">
    </head>
    
    <body>
        <?php
        require 'php/database_connect.php';
        if ($_SERVER['REQUEST_METHOD']=='POST') {
            $first_name=($_POST['first_name']);
            $last_name=($_POST['last_name']);
            $email=($_POST['email']);
            $password=($_POST['password']);
            $hash= password_hash($password,PASSWORD_BCRYPT);
            $college=($_POST['college']);
            $create_datetime = date("Y-m-d H:i:s");
            // if (!preg_match("/^[a-zA-Z ]+$/",$first_name)) {
            //     $name_error = "Name must contain only alphabets and space";
            // }
            // if (!preg_match("/^[a-zA-Z ]+$/",$last_name)) {
            //     $name_error = "Name must contain only alphabets and space";
            // }
            // if(!filter_var($email,FILTER_VALIDATE_EMAIL)) {
            //     $email_error = "Please Enter Valid Email ID";
            // }
            // if(strlen($password) < 6) {
            //     $password_error = "Password must be minimum of 6 characters";
            // }
            $query="INSERT into `users` (first_name, last_name , password, email, college, create_datetime)
                VALUES ('$first_name', '$last_name', '$hash', '$email', '$college', '$create_datetime')";
            $result   = mysqli_query($conn, $query);
            if ($result) {
                echo "<div class='form'>
                  <h3>You are registered successfully.</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a></p>
                  </div>";
                } 
            else {
                echo "<div class='form'>
                  <h3>Required fields are missing.</h3><br/>
                  <p class='link'>Click here to <a href='registration.php'>registration</a> again.</p>
                  </div>";
                }
            }  
        ?>      
        <div class="registerbox">
            <div id="registerhead">
                <h1>Register</h1>
            </div>
            <div id="registerbody">
            <form class="form" action="" method="post" id="Regis">
                    <label><b>First Name:</b></label>
                    <input type="text" name="first_name" id="Name" placeholder="FIRST NAME..." required><br><br>
		            <label><b>Last Name:</b></label>
                    <input type="text" name="last_name" id="Name" placeholder="LAST NAME..." required><br><br>
                    <label><b>Email:</b></label>
                    <input type="email" name="email" id="Email" placeholder="EMAIL..." required><br><br>
                    <label><b>Password:</b></label>
                    <input type="password" name="password" id="Password" placeholder="" required minlength="8"><br><br>
		            <label><b>College:</b></label>
                    <input type="text" name="college" id="College" placeholder="COLLEGE..." required><br><br>
                    <input type="submit" value="Register" id="RegisterButton">
                </form>
            </div>
            <p>Already have an Account? <a href="login.php">Click Here To Login</a></p>
        </div>
    </body>
</html>