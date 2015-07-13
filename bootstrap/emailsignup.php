<?php
  // define variables and set to empty values
  $name = "";
  $name_error = "";

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $ret = save_email_in_database($_POST["email"]);
    echo $ret;
  }

  function save_email_in_database($data) {

    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);

    if (!filter_var($data, FILTER_VALIDATE_EMAIL)) {
      return "Invalid email format";
    }

    $servername = "localhost";
    $username = "root";
    // Create connection
    $conn = new mysqli($servername, $username, "", "emaillist");
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 

    // Create database
    $sql = "INSERT INTO emails VALUES ('" . $data . "')";
    
    if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close(); 

    return $data;
  }

  function create_database() {

    
  }

?>