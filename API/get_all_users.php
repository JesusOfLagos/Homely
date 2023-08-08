<?php
include 'db_connection.php'; // Include database connection

$query = "SELECT * FROM users";
$result = mysqli_query($conn, $query);

if ($result) {
  $users = mysqli_fetch_all($result, MYSQLI_ASSOC);
  echo json_encode($users);
} else {
  echo json_encode(['message' => 'Error fetching users']);
}
?>
