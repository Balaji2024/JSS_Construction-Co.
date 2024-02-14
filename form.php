<?php
  $fName = $_POST['fName'];
  $fEmail = $_POST['fEmail'];
  $fPhone = $_POST['fPhone'];
  $fMessage = $_POST['fMessage'];
  $host = "localhost";
  $username = "root";
  $password = "";
  $dbname = "contact";
 
$con = mysqli_connect($host, $username, $password, $dbname);
if (!$con) {
    die("Connection failed!" . mysqli_connect_error());
}

// Prepare the SQL statement with placeholders
$sql = "INSERT INTO cust_info(fName, fEmail, fPhone, fMessage) VALUES (?, ?, ?, ?)";

// Create a prepared statement
$stmt = mysqli_prepare($con, $sql);

// Bind the parameters with the form values
mysqli_stmt_bind_param($stmt, "ssss", $fName, $fEmail, $fPhone, $fMessage);

// Execute the prepared statement
$success = mysqli_stmt_execute($stmt);

// Close the prepared statement and connection
mysqli_stmt_close($stmt);
mysqli_close($con);

if ($success) {
    // Redirect back to the HTML page
    header("Location: contact.html");
    exit();
} else {
    echo "Error";
}

if (isset($_POST['submit'])) {
    $fName = $_POST['fName'];
    $fEmail = $_POST['fEmail'];
    $fPhone = $_POST['fPhone'];
    $fMessage = $_POST['fMessage'];

    // Database details
    $host = "localhost";
    $username = "root";
    $password = "";
    $dbname = "contact";

    // Creating a connection
    $con = mysqli_connect($host, $username, $password, $dbname);

    // Check if the connection is successful
   
}
?>
