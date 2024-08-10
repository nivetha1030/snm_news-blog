<?php
// Database configuration
$servername = "localhost";
$username = "root";
$password = ""; // Change this if your MySQL server has a password
$dbname = "user_auth";


// Create connection
$conn = new mysqli();
$conn->options(MYSQLI_OPT_CONNECT_TIMEOUT, 5);
$conn->real_connect($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if username and password are set
    if (isset($_POST['username']) && isset($_POST['password'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        // Prepare and bind
        $stmt = $conn->prepare("SELECT id, username, password FROM users WHERE username = ?");
        
        // Check if prepare() succeeded
        if ($stmt) {
            $stmt->bind_param("s", $username);
            $stmt->execute();
            $stmt->store_result();

            // Check if user exists and fetch data
            if ($stmt->num_rows > 0) {
                $stmt->bind_result($id, $stored_username, $stored_password);
                $stmt->fetch();

                // Verify password
                if (password_verify($password, $stored_password)) {
                    header("Location:display.php");
                } else {
                    echo "Invalid password.";
                }
            } else {
                echo "No user found with that name.";
            }
            $stmt->close();
        } else {
            echo "Failed to prepare statement: " . $conn->error;
        }
    } else {
        echo "Please fill in both name and password.";
    }
}
$conn->close();
?>