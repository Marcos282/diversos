<?php
$con = new PDO("pgsql:host=localhost;dbname=mjailton", "postgres", "mariola123"); 

$rs = $con->query("SELECT *  FROM funcionario");
while($row = $rs->fetch(PDO::FETCH_OBJ)){
  echo $row->nome . "<br />";
  echo $row->email . "<br />";
}
