<?php
include 'db_connection.php'; // Include database connection

if ($_SERVER['REQUEST_METHOD'] === 'DELETE') {
  $userId = $_GET['id'];

  $query = "DELETE FROM users WHERE id = $userId";
  $result = mysqli_query($conn, $query);

  if ($result) {
    echo json_encode(['message' => 'User deleted successfully']);
  } else {
    echo json_encode(['message' => 'Error deleting user']);
  }
}
?>
