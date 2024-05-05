<!-- add_car.php -->
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "car_rental";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare SQL statement
$stmt = $conn->prepare("INSERT INTO cars (make, model, year, color, class, license_plate) VALUES (?, ?, ?, ?, ?, ?)");

// Bind parameters
$stmt->bind_param("ssisss", $make, $model, $year, $color, $class, $license_plate);

// Get form data
$make = $_POST['make'];
$model = $_POST['model'];
$year = $_POST['year'];
$color = $_POST['color'];
$class = $_POST['class'];
$license_plate = $_POST['license_plate'];

// Execute the statement
if ($stmt->execute() === TRUE) {
    echo "New car added successfully";
} else {
    echo "Error: " . $stmt->error;
}

// Close statement and connection
$stmt->close();
$conn->close();
?>
