<?php
  session_start();
  // session_unset();
  // session_destroy();
  
  // Default values
  $id = 0;
  $name = '';
  $email = '';
  $password = '';
  $update=false;
  $isError=false;
  $nameErr = $emailErr = $passwordErr = "";

  // Create connection
  $conn = mysqli_connect('localhost', 'swapnil', '', 'php_db');

  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  // Default page fetch table values 
  $sql = "SELECT id, name, email, password FROM Users";
  $result = $conn->query($sql);

  // Save request
  if (isset($_POST['save'])) {
    check_login_user();
    // get post form values
    if (empty($_POST["name"])) {
      $isError=true;
    } else {
      $name = test_input($_POST["name"]);
    }

    if (empty($_POST["email"])) {
      $isError=true;
    } else {
      $email = test_input($_POST["email"]);
    }

    if (empty($_POST["password"])) {
      $isError=true;
    } else {
      $password = test_input($_POST["password"]);
    }

    // insert into database
    $sql = "insert into Users(name, email, password) values('$name', '$email', '$password')";

    if (!$isError && $conn->query($sql) === TRUE) {
      $_SESSION["message"] = "New record created successfully";
      $_SESSION["message_type"] = "success";
      header("location: users.php");
    } else {
      $_SESSION["message"] = "New record not created, Please fill details properly or check this error:".$conn->error;
      $_SESSION["message_type"] = "danger";
      header("location: users.php");
    }
  } 
  
  // Delete request
  if (isset($_GET['delete'])) {
    check_login_user();
    $id = $_GET["delete"];
    // sql to delete a record
    $sql = "DELETE FROM Users WHERE id=$id";
    if ($conn->query($sql) === TRUE) {
      $_SESSION["message"] = "Record deleted successfully";
      $_SESSION["message_type"] = "danger";
      echo "Record deleted successfully";
      header("location: users.php");
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
  }
  
  // Edit request
  if (isset($_GET["edit"])) {
    check_login_user();
    $update=true;
    $id = $_GET["edit"];
    $edit_record = $conn->query("select * from Users where id=$id");
    if (count($edit_record)==1) {
      $row = $edit_record->fetch_array();
      $name=$row['name'];
      $email=$row['email'];
      $password=$row['password'];
    }
  }

  // update request
  if(isset($_POST["update"])) {
    check_login_user();
    $id=$_POST["id"];
    $name=$_POST["name"];
    $email=$_POST["email"];
    $password=$_POST["password"];
    $sql_query ="update Users set name='$name', email='$email', password='$password' where id=$id";
    if ($conn->query($sql_query) === TRUE) {
      $_SESSION["message"] = "Record updated successfully";
      $_SESSION["message_type"] = "success";
      echo "Record updated successfully";
      header("location: users.php");
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $update=false;
    $id=0;
  }
  
  // Login functionality
  if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["login"])) {
    $email = $_POST["email"];
    $password = $_POST["password"];
    $login_sql = "SELECT * FROM Users where email='$email' and password='$password'";
    $user_found = $conn->query($login_sql);
    $user_count = mysqli_num_rows($user_found);
    if ($user_count !== 1) {
      $_SESSION["message"] =  "Email or Password invalid";
      $_SESSION["message_type"] = "danger";
      header("location: users.php");
    } else {
      $_SESSION["message"] =  "User logged in";
      $_SESSION["message_type"] = "primary";
      $_SESSION["login_user"] = $email;
      header("location: users.php");
    }
  }

  // LogOut functionality
  if(isset($_GET["logout"])) {
    echo "logout..........=>";
    $_SESSION["message"] =  "User logout successfully";
    $_SESSION["message_type"] = "success";
    session_destroy();
    header("location: users.php");
  }

  function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

  function check_login_user() {
    if(!isset($_SESSION["login_user"])) {
      $_SESSION["message"] = "Please login first";
      $_SESSION["message_type"] = "warning";
      header("location: users.php");
      die();
    }
  }

  // connection close
  $conn->close();
?>
