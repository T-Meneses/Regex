<?php
//regex preg_match
$tr = "Visite o SENAC";
$pat = "/SENAC/";
echo preg_match($pat, $tr);
echo "<br>";
$tatu="Visite o windows";
$pato="/windows/i";
echo preg_replace($pato,"windows", $tatu);
echo"<br>";
//DATA
date_default_timezone_set("America/Sao_Paulo");
echo"Hoje é " . date("Y/m/d") . "<br>";
echo"Hoje é " . date("l") . "<br>";
echo"Hoje é " . date("Y-m-d") . "<br>";
echo date ("Y") . "<br>";
echo"Hora " . date ("h:i:sa") . "<br>";

//CHAMAR UM ARRAY PELO JSON
$age = array("Peter" =>35, "Ben"=>37, "Paulo"=>45);
echo"<br>";
echo json_encode($age);

$ag = array("Peter" =>35, "Ben"=>37, "Paulo"=>45);
echo"<br>";
$obj= json_encode($ag);
$obj= json_decode($obj);
echo $obj -> Ben;echo"<br>";
echo $obj -> Paulo;

?>