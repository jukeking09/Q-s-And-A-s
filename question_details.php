<html>
    <title>Question Details</title>
    <head>
        <script>
            if ( window.history.replaceState ) {
                window.history.replaceState( null, null, window.location.href );
            }
        </script>
        <div class="topnav0">
          <a href="logout.php">Logout</a>
          <a href="dashboard.php">Dashboard</a>
          <a href="home.php">Home</a>
        </div>
    <link rel="stylesheet" href="question_details.css">
    </head>
    <body>
        <?php
        require "php/database_connect.php";
        include("php/session_start.php");
        $user_id = $_GET["user_id"];
        $question_id = $_GET["q_id"];
        $sql = "SELECT * FROM `questions` WHERE q_id = $question_id";
        $result = mysqli_query($conn,$sql);
        if(!$result){
            echo "Something Went Wrong";
            return;
        }
        $question = mysqli_fetch_assoc($result);?>
        <div id="body_content">
        <div id="question_box">
            <textarea name="answer_description" cols="90" rows="7" readonly><?php echo $question['description'];?></textarea>
            <div class="answer_post">
            <?php 
                if(isset($_POST['answer_description'])){
                    $answer_description = ($_POST['answer_description']);
                    $msg = $answer_description;
                    $query = "INSERT into `answers` (description ,user_id, q_id) VALUES ('$msg' ,'$user_id', '$question_id')";
                    $result = mysqli_query($conn, $query);
                    if (!$result) {
                        echo "Something went wrong";
                    }
                }
            ?>
              <form action="" method="post">
                <textarea name="answer_description" cols="90" rows="7" placeholder="Wanna Post An Answer...."></textarea>
                <input type="submit" value="Post Answer" id="post_answer_button">
              </form>
            </div>
            <?php
                $sql1 = "SELECT * FROM `answers` WHERE q_id = $question_id";
                $result1 = mysqli_query($conn, $sql1);
                if(!$result1){
                    echo "No Answers To This Question Yet";
                }
                $answers = mysqli_fetch_all($result1,MYSQLI_ASSOC);
                foreach($answers as $answer){?>
                    <h4> Answers </h4>
                    <div id="answer_box">
                        <textarea name="answer_description" cols="90" rows="7" readonly><?php echo $answer['description'];?></textarea>
                    </div>
            <?php 
                }
            ?>
        </div> 
        </div>
    </body>
</html>