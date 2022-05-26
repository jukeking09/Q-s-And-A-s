<html>
    <title>Login</title>
    <head>
        <script>
            if ( window.history.replaceState ) {
                window.history.replaceState( null, null, window.location.href );
            }
        </script>
        <link rel="stylesheet" href="login.css">
    </head>
    <body>
        <?php
            require 'php/database_connect.php';
            session_start();
            if (isset($_POST['email'])&& isset($_POST['password'])){
                $email=($_POST['email']);
                $password=($_POST['password']);
                $query="SELECT * FROM `users` WHERE email='$email'";
                $result = mysqli_query($conn, $query) or die(mysql_error());
                // $rows = mysqli_num_rows($result);
                $row = mysqli_fetch_assoc($result);
                $hash = $row['password'];
                $verify = password_verify($password,$hash);
                if($verify){
                    if ($row['email'] == $email ) {
                        echo "Logged in!";
                        $_SESSION['email'] = $row['email'];
                        $_SESSION['first_name'] = $row['first_name'];
                        $_SESSION['id'] = $row['id'];
                        header("Location: dashboard.php");
                        exit();
                    }
                    else {
                        echo "<div class='form'>
                        <h3>Incorrect Email/Password.</h3><br/>
                        <p class='link'>Click here to <a href='login.php'>Login</a> again.</p>
                        </div>";
                    }
                }
            }         
    ?>
        <div class="loginbox">
            <div id="loginhead">
                <h1>Login</h1>
            </div>
            <div id="loginbody">
                <form action="" method="post" id="login">
                    <label><b>Email:</b></label>
                    <input type="email" name="email" id="Email" placeholder="EMAIL..." required><br><br>
                    <label><b>Password:</b></label>
                    <input type="password" name="password" id="Password" required><br><br>
                    <input type="submit" value="Login" id="loginbutton">
                </form>
            </div>
            <p>Don't have an Account? <a href="register.php">Click here to Register</a></p>
        </div>
    </body>