<?php
$savien = new mysqli("localhost", "root", "", "ipb23");
/*
if ($savien->connect_error) {
  echo("Kļūda: " . $savien->connect_error);
}
echo "Strādā";
*/ // Pārbaude vai ir savienots

// var_dump($savien);
$sql = $savien->query("SELECT * FROM bok");
$row = $sql->fetch_assoc(); // Dabū datus ārā no objekta
// query un fetch_assoc ir iebūvētā metode

var_dump($row);