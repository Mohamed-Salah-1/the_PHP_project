<<<<<<< HEAD
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../the_project/styles/staff.css">
    <title>staff</title>
</head>
<body>
<?php
// Create connection
$conn = new mysqli("localhost", "root", "", "arizona");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Query to select all data from the staff table
$sql = "SELECT * FROM staff";

// Execute the query and get the result
$result = $conn->query($sql);

// Display the table with CSS styling
echo "<table class='staff-table'>";
echo "<thead><tr><th>Staff ID</th><th>Name</th><th>Department</th><th>Language</th><th>Phone</th><th>Email</th><th>Address</th></tr></thead>";
echo "<tbody>";
while ($row = $result->fetch_assoc()) {
    echo "<tr>";
    echo "<td>" . $row["staff_id"] . "</td>";
    echo "<td>" . $row["name"] . "</td>";
    echo "<td>" . $row["department"] . "</td>";
    echo "<td>" . $row["language"] . "</td>";
    echo "<td>" . $row["phone"] . "</td>";
    echo "<td>" . $row["email"] . "</td>";
    echo "<td>" . $row["address"] . "</td>";
    echo "</tr>";
}
echo "</tbody>";
echo "</table>";

// Close the database connection
$conn->close();
?>

</body>
</html>
=======
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../the_project/styles/staff.css">
    <title>staff</title>
</head>
<body>
<?php
// Create connection
$conn = new mysqli("localhost", "root", "", "arizona");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Query to select all data from the staff table
$sql = "SELECT * FROM staff";

// Execute the query and get the result
$result = $conn->query($sql);

// Display the table with CSS styling
echo "<table class='staff-table'>";
echo "<thead><tr><th>Staff ID</th><th>Name</th><th>Department</th><th>Language</th><th>Phone</th><th>Email</th><th>Address</th></tr></thead>";
echo "<tbody>";
while ($row = $result->fetch_assoc()) {
    echo "<tr>";
    echo "<td>" . $row["staff_id"] . "</td>";
    echo "<td>" . $row["name"] . "</td>";
    echo "<td>" . $row["department"] . "</td>";
    echo "<td>" . $row["language"] . "</td>";
    echo "<td>" . $row["phone"] . "</td>";
    echo "<td>" . $row["email"] . "</td>";
    echo "<td>" . $row["address"] . "</td>";
    echo "</tr>";
}
echo "</tbody>";
echo "</table>";

// Close the database connection
$conn->close();
?>

</body>
</html>
>>>>>>> 58d6747 (upload files)
