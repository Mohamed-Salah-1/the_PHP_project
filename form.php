<<<<<<< HEAD
<!-- <?php
// Create a database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "arizona";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Get form data
  $name = $_POST["name"];
  $phone = $_POST["phone"];
  $email = $_POST["email"];
  $address = $_POST["address"];
  $language_level = $_POST["language_level"];
  $age = $_POST["age"];
  $order_type = $_POST["order_type"];

  // Insert data into table
  $sql = "INSERT INTO customers (name, phone, email, address, language_level, age, order_type)
          VALUES ('$name', '$phone', '$email', '$address', '$language_level', '$age', '$order_type')";

  if ($conn->query($sql) === TRUE) {
    echo "New customer added successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
}

// Close database connection
$conn->close();
?> -->

<!DOCTYPE html>
<html>
<head>
  <title>Add Customer</title>
</head>
<body>

<h2>Add Customer</h2>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  <label for="name">Name:</label>
  <input type="text" name="name" required><br>

  <label for="phone">Phone:</label>
  <input type="tel" name="phone" required><br>

  <label for="email">Email:</label>
  <input type="email" name="email" required><br>

  <label for="address">Address:</label>
  <textarea name="address" required></textarea><br>

  <label for="language_level">Language Level:</label>
  <select name="language_level" required>
    <option value="">Select language level</option>
    <option value="Beginner">Beginner</option>
    <option value="Intermediate">Intermediate</option>
    <option value="Advanced">Advanced</option>
  </select><br>

  <label for="age">Age:</label>
  <input type="number" name="age" required><br>

  <label for="order_type">Order Type:</label>
  <input type="text" name="order_type" required><br>

  <input type="submit" value="Add Customer">
</form>

</body>
</html>
=======
<!-- <?php
// Create a database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "arizona";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Get form data
  $name = $_POST["name"];
  $phone = $_POST["phone"];
  $email = $_POST["email"];
  $address = $_POST["address"];
  $language_level = $_POST["language_level"];
  $age = $_POST["age"];
  $order_type = $_POST["order_type"];

  // Insert data into table
  $sql = "INSERT INTO customers (name, phone, email, address, language_level, age, order_type)
          VALUES ('$name', '$phone', '$email', '$address', '$language_level', '$age', '$order_type')";

  if ($conn->query($sql) === TRUE) {
    echo "New customer added successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
}

// Close database connection
$conn->close();
?> -->

<!DOCTYPE html>
<html>
<head>
  <title>Add Customer</title>
</head>
<body>

<h2>Add Customer</h2>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  <label for="name">Name:</label>
  <input type="text" name="name" required><br>

  <label for="phone">Phone:</label>
  <input type="tel" name="phone" required><br>

  <label for="email">Email:</label>
  <input type="email" name="email" required><br>

  <label for="address">Address:</label>
  <textarea name="address" required></textarea><br>

  <label for="language_level">Language Level:</label>
  <select name="language_level" required>
    <option value="">Select language level</option>
    <option value="Beginner">Beginner</option>
    <option value="Intermediate">Intermediate</option>
    <option value="Advanced">Advanced</option>
  </select><br>

  <label for="age">Age:</label>
  <input type="number" name="age" required><br>

  <label for="order_type">Order Type:</label>
  <input type="text" name="order_type" required><br>

  <input type="submit" value="Add Customer">
</form>

</body>
</html>
>>>>>>> 58d6747 (upload files)
