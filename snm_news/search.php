        <?php
        if (isset($_GET['query'])) {
            $query = $_GET['query'];

            // Database connection
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "image";

            $conn = new mysqli($servername, $username, $password, $dbname);

            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // Prepare statement
            $stmt = $conn->prepare("SELECT category,title,subtitle,content FROM articles WHERE category LIKE ?");
            if ($stmt === false) {
                die("Prepare failed: " . $conn->error);
            }

            $searchTerm = "%" . $query . "%";

            // Bind parameters
            if (!$stmt->bind_param("s", $searchTerm)) {
                die("Bind failed: " . $stmt->error);
            }

            // Execute statement
            if (!$stmt->execute()) {
                die("Execute failed: " . $stmt->error);
            }

            // Get result
            $result = $stmt->get_result();
            if ($result === false) {
                die("Get result failed: " . $stmt->error);
            }

            // Fetch and display results
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<li>" . htmlspecialchars($row['category'],ENT_QUOTES) . "</li>";
                }
            } else {
                echo "<li>No results found</li>";
            }

            // Close statement and connection
            $stmt->close();
            $conn->close();
        }
       ?>
    </ul>