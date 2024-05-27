<!DOCTYPE html>
<html>
<head>
    <title>Student Information</title>
</head>
<body>

<h1>Student Information</h1>

<?php
// Database connection parameters
$servername = "localhost"; // Change this if your MySQL server is hosted elsewhere
$username = "root"; // Replace with your MySQL username
$password = ""; // Replace with your MySQL password
$database = "student"; // Replace with your MySQL database name

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL query to fetch student data
$sql = "SELECT name, rno, branch, semester FROM students";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    
    while($row = $result->fetch_assoc()) {
        echo "Name: " . $row["name"]. " - Roll Number: " . $row["rno"]. " - Branch: " . $row["branch"]. " - Semester: " . $row["semester"]. "<br>";
    }
} else {
    echo "0 results";
}

// Close connection
$conn->close();
?>

</body>
</html>