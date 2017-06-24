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



$sql = "DELETE FROM `users` WHERE pw = \"babba\"";
$qry = $pdo->prepare($sql);
$qry->execute();
if ($qry->execute()) {
  echo "<br /> qry successful - DELETE";
}
else {
  echo "<br /> qry error";
  echo $qry->errorInfo()[2];
}

?>
