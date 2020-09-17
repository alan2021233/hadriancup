<?php
/*
CREATE TABLE signups (
    id INT PRIMARY KEY AUTO_INCREMENT,
	first VARCHAR(255),
    last VARCHAR(255),
    email VARCHAR(255),
    school VARCHAR(255),
    glevel INT,
    clubcontact VARCHAR(255)
)
*/
require 'lc.db.php';

if ($_SERVER['REQUEST_METHOD'] == "POST") {
  $first = mysqli_real_escape_string($conn, $_POST['first']);
  $last = mysqli_real_escape_string($conn, $_POST['last']);
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $school = mysqli_real_escape_string($conn, $_POST['school']);
  $glevel = mysqli_real_escape_string($conn, $_POST['glevel']);
  $clubcontact = mysqli_real_escape_string($conn, $_POST['clubcontact']);

  //Prevent empty submissions using empty() function, check for email fiirst
  if (empty($first) || empty($last) || empty($email) || empty($school) || empty($glevel) || empty($clubcontact)) {
    //Make their data saved!
    header("Location: ../signup.php?signup=success#main");
    exit();
  }
  else {
    if (!filter_var($email, FILTER_VALIDATE_EMAIL) || !filter_var($clubcontact, FILTER_VALIDATE_EMAIL)) {
    header("Location: ../signup.php?signup=invalid-email&first=$first&last=$last&email=$email&school=$school&glevel=$glevel&clubcontact=$clubcontact");
    exit();
    }
    else {
      if (!preg_match("/^[a-zA-Z]*$/", $first) || !preg_match("/^[a-zA-Z]*$/", $last)) {
        header("Location: ../signup.php?signup=invalid-name&first=$first&last=$last&email=$email&school=$school&glevel=$glevel&clubcontact=$clubcontact");
        exit();
      }
      else {
        $sql_select = "SELECT * FROM signups WHERE first = '$first' OR last = '$last' OR $email = '$email';";
        $result = mysqli_query($conn, $sql_select);
        $resultcheck = mysqli_num_rows($result);

        if ($resultcheck > 0) {
          header("Location: ../signup.php?signup=already-exists&first=$first&last=$last&email=$email&school=$school&glevel=$glevel&clubcontact=$clubcontact");
          exit();
        }
        else {
          $sql_insert = "INSERT INTO signups (first, last, email, school, glevel, clubcontact)
          VALUES (?,?,?,?,?,?);";
          $stmt = mysqli_stmt_init($conn);
          if (!mysqli_stmt_prepare($stmt, $sql_insert)){
            echo "SQL error";
            exit();
          }
          else {
            mysqli_stmt_bind_param($stmt, "ssssis", $first, $last, $email, $school, $glevel, $clubcontact);
            mysqli_stmt_execute($stmt);

            $sql_select2 = "SELECT * FROM signups WHERE email = '$email';";
            //Finds row of user that just signed up

            $result2 = mysqli_query($conn, $sql_select2);
            if (mysqli_num_rows($result2) > 0) {
              //id from users equals userid from profileimg

              header("Location: ../signup.php?signup=success");
              exit();
            }
          }
        }
      }
    }
  }
}
else {
  header("Location: ../signup.php?signup=error");
}
