<$servername = "localhost";
$username = "root"; // Or your MySQL username
$password = ""; // Or your MySQL password
$dbname = "chatbot"; // Your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

