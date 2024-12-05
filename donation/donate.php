<?php
require 'db.php';

// Get donation data from the POST request
$donor_name = $_POST['donor_name'];
$orphanage_id = $_POST['orphanage_id'];
$amount = $_POST['amount'];

// Validate input
if (!empty($donor_name) && !empty($orphanage_id) && !empty($amount)) {
    $sql = "INSERT INTO donations (donor_name, orphanage_id, amount) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sid", $donor_name, $orphanage_id, $amount);

    if ($stmt->execute()) {
        echo "Donation successful!";
    } else {
        echo "Error: " . $conn->error;
    }

    $stmt->close();
} else {
    echo "All fields are required!";
}

$conn->close();
?>
