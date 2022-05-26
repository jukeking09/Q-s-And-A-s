<html>
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>
        Q's And A's
    </title>
    <head>
        <script>
            if ( window.history.replaceState ) {
                window.history.replaceState( null, null, window.location.href );
            }
        </script>
        <div class="topnav0">
          <a href="#about">About</a>
          <a href="#contact">Contact</a>
          <a href="dashboard.php">Dashboard</a>
          <!-- <a href="register.php">Register</a> -->
        </div>
      </div>
        <div class="topnav">
            <h1 id="heading">Q's And A's</h1>
            <div class="search-container">
              <form action="/action_page.php">
                <input type="text" placeholder="Search For Questions..." name="search">
                <button type="submit"><i class="fa fa-search"></i></button>
              </form>
            </div>
          </div> 
    </head>
    <body>
      <?php
        require "php/database_connect.php";
        include("php/session_start.php");
        // $_SESSION['id'] = $row['id'];
        $user_id = $_SESSION['id'];
        if(isset($_POST['question_description'])){
          $question_description = ($_POST['question_description']);
          $msg = $question_description;
          $query = "INSERT into `questions` (description ,user_id) VALUES ('$msg' ,'$user_id')";
          $result = mysqli_query($conn, $query);
          if ($result) {
            echo "Question Posted Successfully";
          }
        }
      ?>
      <div class="body-content">
        <div class="side-box">
          <h1>Filter</h1>
        </div>
        <div class="post-container">
        <p>Hey, <?php echo $_SESSION['first_name']; ?>!</p>
          <h3>Post A Question?</h3>
          <form action="" method="post"> 
          <textarea name="question_description" id="qpost" cols="100" rows="7" placeholder="Please Enter Question Here"></textarea><br>
          <input type="submit" id="postbutton" value="Post">
          </form>
          <h4>Questions</h4>
          <?php
            $query1="SELECT * FROM `questions`";
            $result1 = mysqli_query($conn, $query1) or die(mysql_error());
            if(!$result1){
              echo "Something Went Wrong";
              return;
            }
            $questions = mysqli_fetch_all($result1, MYSQLI_ASSOC);
            // while($row = mysqli_fetch_assoc($result1)){
            foreach($questions as $question){
            ?>
            <div id="question_box">
                <textarea cols="90" rows="7" readonly><?php echo $question['description'];?></textarea>
              <div id="question_buttons">
                <?php
                  echo "<button type='button'><a href='question_details.php?q_id=$question[q_id]&user_id=$_SESSION[id]' class='view_button'>View</button></a>";
                ?>
                </div>
            </div>
            <?php
            }
          ?>
        </div>
    </body>
</html>   