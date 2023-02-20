<?php
  $nome=$_GET["nome"];
  $sexo=$_GET["sexo"];
  $linguagem=$_GET["linguagem"];
  $estado=$_GET["estado"];
  $imagem=$_GET["imagem"];

  echo "Nome:      $nome <br>";
  echo "Sexo:      $sexo <br>";
  echo "Estado:    $estado <br>";
  echo "Imagem:    $imagem <br>";
  echo "Linguagem: <br>";
    if (isset ($linguagem)) {
      foreach ($linguagem as $selected) {
        if ($selected=="java")
           echo "Java <br>";
        if ($selected=="php")
           echo "PHP <br>"; 
      }
    }
?>
