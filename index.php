<?php
$savien = new mysqli("localhost", "root", "", "ipb23"); // Pēdējais "" ir priekš datubāzes
/*
if ($savien->connect_error) {
  echo("Kļūda: " . $savien->connect_error);
}
echo "Strādā";
*/ // Pārbaude vai ir savienots

// var_dump($savien);
$sql = $savien->query("SELECT * FROM bok");
$data = $sql->fetch_assoc(); // Dabū datus ārā no datubāzes
// query un fetch_assoc ir iebūvētā metode

var_dump($data);

echo "<form>";
echo "<input name='username'/>";
echo "<input name='password' type='password'/>";
echo "<input type='submit' value='register'";
echo "</form>";