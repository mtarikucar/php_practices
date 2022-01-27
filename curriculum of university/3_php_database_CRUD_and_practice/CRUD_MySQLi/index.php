<?php
    require "connection.php";

/* 
$sql = "INSERT INTO users (user_name, user_password, email)
VALUES ('John', 'Doe', 'john@example.com')";

if ($conn->query($sql) === TRUE) {
  $last_id = $conn->insert_id;
  echo "New record created successfully. Last inserted ID is: " . $last_id;
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
 */

$sql = "SELECT id, user_name, user_password FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - Name: " . $row["user_name"]. " " . $row["user_password"]. "<br>";
  }
} else {
  echo "0 results";
}

$conn->close();
?>