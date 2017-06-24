<?php
$pdo = new PDO('mysql:host=localhost;dbname=hw_users', 'root', 'babba23');
echo "DB TEST <br /> ";
if ($pdo) {
  echo "Connection succefully established";
}
else {
  echo "Connection error";
}

foreach($db->query('SELECT * FROM users') as $row) {
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
