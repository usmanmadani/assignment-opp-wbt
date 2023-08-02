<?php
// Check if the form is submitted
if (isset($_POST['submit'])) {
  // Get the form data
  $name = $_POST['name'];
  $course = $_POST['Course/Semester'];
  $gender = $_POST['gender'];
  $complainant = $_POST['complainant'];
  $date = $_POST['date'];
  $details = $_POST['details'];

  // Validate the form data
  if (empty($name) || empty($course) || empty($gender) || empty($complainant) || empty($date) || empty($details)) {
    // Display an error message and exit
    echo "Please fill in all the required fields.";
    exit;
  }

  // Connect to the database
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "lincoln_university";

  // Create a connection object
  $conn = new mysqli($servername, $username, $password, $dbname);

  // Check the connection status
  if ($conn->connect_error) {
    // Display an error message and exit
    echo "Connection failed: " . $conn->connect_error;
    exit;
  }

  // Prepare a SQL statement to insert the form data into the database
  $sql = "INSERT INTO complaints (name, course, gender, complainant, date, details) VALUES (?, ?, ?, ?, ?, ?)";

  // Create a prepared statement object
  $stmt = $conn->prepare($sql);

  // Bind the parameters to the statement
  $stmt->bind_param("ssssss", $name, $course, $gender, $complainant, $date, $details);

  // Execute the statement
  if ($stmt->execute()) {
    // Display a success message
    echo "Your complaint has been sent successfully.";
  } else {
    // Display an error message
    echo "Something went wrong: " . $stmt->error;
  }

  // Close the statement and the connection
  $stmt->close();
  $conn->close();
}
?>
