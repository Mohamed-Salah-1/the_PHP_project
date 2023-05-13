<?php
include "config.php";

// Retrieve the list of courses from the database
$sql = "SELECT * FROM courses";
$result = $conn->query($sql);

// Display the list of courses
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<div class='course'>";
        echo "<h2>" . $row["title"] . "</h2>";
        echo "<p>" . $row["description"] . "</p>";
        echo "<a href='#' class='btn'>Enroll Now</a>";
        echo "</div>";
    }
} else {
    echo "No courses found.";
}

// Close database connection
$conn->close();
?>
