<?php
require 'db.php';

// Fetch orphanages from the database
$sql = "SELECT * FROM orphanages";
$result = $conn->query($sql);

$orphanages = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $orphanages[] = $row;
    }
}

// Send orphanages as JSON response
header('Content-Type: application/json');
echo json_encode($orphanages);

$conn->close();
?>
