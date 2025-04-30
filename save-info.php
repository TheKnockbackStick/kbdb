<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "kbdb";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection fked: " . $conn->connect_error);
}

$ign = $_POST['ign'] ?? '';
$disc = $_POST['disc'] ?? '';
$note = $_POST['note'] ?? '';

$stmt = $conn->prepare("INSERT INTO data (ign, disc, note) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $ign, $disc, $note);

if ($stmt->execute()) {
    echo "Info sent to DB successfully.";
} else {
    echo "You fked up. Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>