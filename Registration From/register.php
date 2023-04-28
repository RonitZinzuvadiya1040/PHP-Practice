<?php
// Connect to database
$servername = "localhost";
$username = "admin";
$password = "Admin@123";
$dbname = "your_database_name";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}

// Process form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$username = $_POST["username"];
	$email = $_POST["email"];
	$password = $_POST["password"];
	$confirm_password = $_POST["confirm_password"];

	// Verify password match
	if ($password != $confirm_password) {
		die("Error: Passwords do not match");
	}

	// Hash password
	$hashed_password = password_hash($password, PASSWORD_DEFAULT);

	// Prepare and execute SQL query
	$sql = "INSERT INTO users (username, email, password) VALUES (?, ?, ?)";
	$stmt = mysqli_prepare($conn, $sql);
	mysqli_stmt_bind_param($stmt, "sss", $username, $email, $hashed_password);
	mysqli_stmt_execute($stmt);

	// Close statement and database connection
	mysqli_stmt_close($stmt);
	mysqli_close($conn);

	echo "Registration successful!";
}
?>