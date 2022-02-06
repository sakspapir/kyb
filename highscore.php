<?php
$servername = "localhost";
$username = "sakspapir";
$password = "Lassotta0208";
$dbname = "highscore";

$conn = new mysqli($servername, $username, $password, $dbname); // Create connection
if ($conn->connect_error) {     // Check connection
    die("Connection failed: " . $conn->connect_error);
} 

$name = mysqli_real_escape_string($conn, $_POST['name']);
$score = mysqli_real_escape_string($conn, $_POST['score']);

$sql = "INSERT INTO highscorelist (name,score)
VALUES ('$name', '$score')";

if ($conn->query($sql) === TRUE) {
    echo "Page saved!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>