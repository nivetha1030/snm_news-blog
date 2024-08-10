<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "image";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect and sanitize input data
    $title = htmlspecialchars($_POST['title']);
    $subtitle = htmlspecialchars($_POST['subtitle']);
    $category = htmlspecialchars($_POST['category']);
    $content = htmlspecialchars($_POST['content']);
 
    
    // Handle image upload
    $image = NULL;
    if (isset($_FILES['image']) && $_FILES['image']['tmp_name']) {
        $image = file_get_contents($_FILES['image']['tmp_name']);
    }

    // Prepare and bind
    $stmt = $conn->prepare("INSERT INTO articles (title, subtitle, category, image, content ) VALUES (?, ?, ?, ?, ?)");
    
    // Check if prepare() succeeded
    if ($stmt) {
        $stmt->bind_param("sssss", $title, $subtitle, $category, $image, $content);

        // Send the image data in chunks if needed
        if ($image) {
            $stmt->send_long_data(3, $image);
        }

        // Execute the statement
        if ($stmt->execute()) {
        header("Location:display.php");
        } else {
            echo "Error: " . $stmt->error;
        }

        $stmt->close();
    } else {
        echo "Failed to prepare statement: " . $conn->error;
    }
}

$conn->close();
?>