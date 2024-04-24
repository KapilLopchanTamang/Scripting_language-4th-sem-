<?php
// Establish connection to MySQL
$servername = "localhost";
$username = "root"; // Your MySQL username
$password = ""; // Your MySQL password
$dbname = "form"; // Your MySQL database name

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
$fullname = $_POST['fullname'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];

// Perform validation
// You can also use JavaScript for client-side validation in addition to PHP validation
if (strlen($fullname) > 40) {
    echo "Error: Full name exceeds 40 characters limit.";
    exit;
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "Error: Invalid email address.";
    exit;
}

if (!preg_match("/^[a-zA-Z]+[0-9]+$/", $username)) {
    echo "Error: Username must start with a letter followed by numbers.";
    exit;
}

if (strlen($password) < 8) {
    echo "Error: Password must be at least 8 characters long.";
    exit;
}

// Store data in MySQL
$sql = "INSERT INTO users (fullname, email, username, password) VALUES ('$fullname', '$email', '$username', '$password')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
