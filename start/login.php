<?php
$pdo = new PDO('mysql:host=localhost;dbname=hw_users', 'root', 'babba2');


$sql = "DELETE FROM credentials WHERE mail = "test@test.test";
if ($pdo->query($sql) === TRUE) {
  echo "qry successful";
}
else {
  echo "qry error";
}

?>
