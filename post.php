<?php
// Fetching Values From URL
$fname = $_POST['FirstName'];
$lname = $_POST['LastName'];
$email = $_POST['Email'];


// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "nohamahm_menasummit";

$servername = "127.0.0.1";
$username = "ramydoss_resiliencesummit_5426";
$password = "1o@=C{*KvxO9";
$dbname = "ramydoss_evolve_2021";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "insert into subscriber(first_name, last_name, email) values 
('$fname', '$lname', '$email')";
$result = $conn->query($sql);

$conn->close();

?>