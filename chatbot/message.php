<?php
include 'db.php';

// Check if POST data is received
if (!isset($_POST['text'])) {
    echo "No input received.";
    exit;
}

// Debug: Print the received input
$getMesg = mysqli_real_escape_string($conn, $_POST['text']);
echo "Received message: $getMesg\n";

// Run the query
$check_data = "SELECT replies FROM chatbot WHERE queries LIKE '%$getMesg%'";
$run_query = mysqli_query($conn, $check_data);

// Check if query ran successfully
if (!$run_query) {
    echo "Error: " . mysqli_error($conn);
    exit;
}

// Check for results
if (mysqli_num_rows($run_query) > 0) {
    $fetch_data = mysqli_fetch_assoc($run_query);
    $replay = $fetch_data['replies'];
    echo $replay;
} else {
    echo "Sorry, I didn't understand that.";
}
?>
