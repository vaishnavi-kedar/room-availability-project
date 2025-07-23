<?php
$host = "localhost";
$username = "root";
$password = "havesomefun";
$database = "hotel_management";

// Connect to MySQL
$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$room_id = $_POST['room_id'];
$checkin = $_POST['checkin'];
$checkout = $_POST['checkout'];

// Call stored procedure
$sql = "CALL sp_check_room_availability(?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("iss", $room_id, $checkin, $checkout);
$stmt->execute();
$result = $stmt->get_result();

// Display result
echo "<h2>Room Availability Status:</h2>";
while ($row = $result->fetch_assoc()) {
    echo "<p>Status: <strong>" . $row['Status'] . "</strong></p>";
}

// Close connections
$stmt->close();
$conn->close();
?>
