<?php
echo "DB TEST";
$pdo = new PDO('mysql:host=localhost;dbname=hw_users', 'root', 'babba2');
echo "<br /> - after PDO";
if ($pdo) {
  echo "<br /> Connection succefully established";
}
else {
  echo "<br /> Connection error";
}
$sql = "SELECT * FROM users";
foreach($pdo->query($sql) as $row) {
      echo $row['id']."<br />";
      echo $row['name']."<br />";
      echo $row['pw']."<br /><br />";
}

$delete  = babba;
$sql2 = "DELETE FROM credentials WHERE passwort = :delete";
$query = $pdo->prepare($sql2);

if ($pdo->query($sql2) === TRUE) {
  echo "<br /> qry successful - DELETE";
}
else {
  echo "<br /> qry error";
}
*/
?>
