<?php
$pdo = new PDO('mysql:host=localhost;dbname=hw_users', 'root', 'babba2');


$sql = "DELETE FROM credentials WHERE mail = test@test.test";
foreach ($pdo->query($sql) as $row) {
   echo $row['mail']."<br />";
   echo $row['passwort']."<br />";
}
?>
