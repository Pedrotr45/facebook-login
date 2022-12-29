<?php

$servidor = "localhost";
$usuario = "root";
$senha = "";
$dbname= "login";

 $conexao=mysqli_connect($servidor,$usuario,$senha);

  if(!$conexao) {
    die("houve um erro".mysqli_connect_errno());

  }else{
    echo'';
  }

  ?>