<?php
$pdo = new PDO('mysql:host=localhost;dbname=hw_users', 'root', 'babba2');

$sqlselect = "SELECT * FROM users";
foreach($db->query($sqlselect) as $row) {
      echo $row['id']."<br />";
      echo $row['name']."<br />";
      echo $row['pw']."<br /><br />";
}
/*
$delete  = babba;
$sql = "DELETE FROM credentials WHERE passwort = :delete";
$queray = $db->prepare($sql);
$
if ($pdo->query($sql) === TRUE) {
  echo "qry successful";
}
else {
  echo "qry error";
}
*/
?>
