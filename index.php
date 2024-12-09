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

for ($x=1; $x<=100; $x++) { // izvada pāra skaitļus līdz 100.
  if ($x%2==0){
    echo $x;
  }
}

echo "<br>";

$y=10;
for ($x=9; $x>=1; $x--) { // izvada faktoriālu.
  $y = $y * $x; 
}
echo $y;

echo "<br>";

$x2 = 1;
for ( $x1=1; $x1 <= 1000;) { // izvada visus Fibonači skaitļus līdz 1000.
  echo $x1 . ", ";
  $x3 = $x1 + $x2;
  $x1 = $x2;
  $x2 = $x3;
}

echo "<br>";

for ($x=1; $x<100; $x++) { // izvada visus skaitļus kas dalās ar 3 vai 5 bet nedalās ar 15.
  if ($x%3==0 || $x%5==0){
    if ($x%15!=0) {
      echo $x . ",";
    }
  }
}

echo "<br>";

$pilseta = array("cesis"=>14699, "valmiera"=>23046);
print_r($pilseta);

echo "<br>";

$animal = array("suns"=>"gaf", "kaķis"=>"mjau", "putns"=>"čiv");
print_r(array_keys($animal));

echo "<br>";

/*
$url = file_get_contents ("https://jsonplaceholder.typicode.com/posts");
$data = json_decode($url);

foreach ($data as $d) {
  echo "Virsraksts: $d->title <br>";
  echo "Saturs: $d->body <br>";
  echo "Lietotaka id: $d->userId <br> ---------- <br>";
}
*/

$url2 = file_get_contents ("https://jsonplaceholder.typicode.com/todos");
$data2 = json_decode($url2);

foreach ($data2 as $data2) {
  echo "Nsoaukums: $data2->title <br>";
  if($data2->completed == 0) {
    echo "Status: Neizpildīts <br>";
  }else {
    echo "Status: Izpildīts <br>";
  }
  echo "Autora id $data2->userId <br>";
}