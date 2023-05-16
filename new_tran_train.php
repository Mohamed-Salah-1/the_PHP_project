<?php
// Replace these values with your actual database credentials
$hostname = 'localhost';
$username = 'root';
$password = '';
$database = 'arizona';

// Connect to the database
$conn = new mysqli($hostname, $username, $password, $database);

// Check if the connection was successful
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the form data
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $speciality = $_POST['speciality'];
    $email = $_POST['email'];
    $salary = $_POST['salary'];

    // Prepare the SQL statement
    $sql = "INSERT INTO translators_trainers (name, phone, address, speciality, email, salary) VALUES (?, ?, ?, ?, ?, ?)";

    // Prepare and bind the parameters
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssssi", $name, $phone, $address, $speciality, $email, $salary);

    // Execute the statement
    if ($stmt->execute()) {
        echo "New record added successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the statement
    $stmt->close();
}

// Close the database connection
$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add New Data</title>
</head>
<body>
    <h2>Add New Data</h2>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="name">Name:</label>
        <input type="text" name="name" required><br>

        <label for="phone">Phone:</label>
        <input type="text" name="phone" required><br>

        <label for="address">Address:</label>
        <input type="text" name="address" required><br>

        <label for="speciality">Speciality:</label>
        <input type="text" name="speciality" required><br>

        <label for="email">Email:</label>
        <input type="email" name="email" required><br>

        <label for="salary">Salary:</label>
        <input type="number" name="salary" required><br>

        <input type="submit" value="Add Data">
    </form>
</body>
</html>
