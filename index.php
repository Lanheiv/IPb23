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
$data = $sql->fetch_assoc(); // Dabū datus ārā no datubāzes // Tas arī ir asocatīvais masīvs
// query un fetch_assoc ir iebūvētā metode
var_dump($data);

/* echo "<pre>";
var_dump($_SERVER);
echo "</pre>"; */

echo "<form method='POST'>";
 echo "<label>Lietotājvards:<input placeholder='Lietotājs' name='username'/></label><br>";
 echo "<label>Parole:<input placeholder='Parole' name='password' type='password' /></label><br>";
 echo "<input type='submit' value='Reģistrēties'/>";
echo "</form>";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["username"];
  $password = $_POST["password"];

  $sql1 = "INSERT INTO bok (username, pasword) VALUES ('$name', '$password')";
  $savien->query($sql1);
}

/* 

Divi masīvu veidi (eksistē divi veidi)

// Masīvs ar vērtībām
$augli = ["abols", "bumbieris", 21];
echo "<br>";
print_r($augli);
// Asocatīvais masīvs
$aso = ["color"=>"sarkans","type"=>"abols","number"=>4];
echo "<br>";
print_r($aso);

*/