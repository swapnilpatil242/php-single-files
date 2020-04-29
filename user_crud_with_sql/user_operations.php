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

  // Create connection
  $conn = new mysqli('localhost', 'swapnil', '', 'php_db');

  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  // Default page fetch table values 
  $sql = "SELECT id, name, email, password FROM Users";
  $result = $conn->query($sql);

  // Save request
  if (isset($_POST['save'])) {
    echo "1.................save...<br />";
    // get post form values
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    // insert into database
    $sql = "insert into Users(name, email, password) values('$name', '$email', '$password')";

    if ($conn->query($sql) === TRUE) {
      $_SESSION["message"] = "New record created successfully";
      $_SESSION["message_type"] = "success";
      echo "New record created successfully";
      header("location: users.php");
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
  } 
  
  // Delete request
  if (isset($_GET['delete'])) {
    echo "2.................delete..";
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

  // connection close
  $conn->close();
?>
