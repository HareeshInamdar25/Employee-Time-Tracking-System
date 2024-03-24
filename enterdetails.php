<?php
// Create connection
$conn = mysqli_connect('127.0.0.1', 'root', '', 'mini_project');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
$ename = $_POST['ename'];
$eposition = $_POST['eposition'];
$eid = $_POST['eid'];
$edept = $_POST['edept'];
$ephno = $_POST['ephno'];
$taskid = $_POST['taskid'];

// Prepare SQL statement
$sql = "INSERT INTO employee (ename, eposition, eid, edept,ephno,taskid) VALUES ('$ename', '$eposition', '$eid', '$edept', '$ephno','$taskid')";

// Execute SQL statement
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    echo '<button onclick="goBack()">    Go Back    </button>';
    echo '<script>';
    echo 'function goBack() {';
    echo 'window.history.back();';
    echo '}';
    echo '</script>';
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>
