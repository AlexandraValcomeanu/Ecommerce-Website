<?php
   $link= mysqli_connect("localhost","root","","ValcomeanuAlexandra");
   if($link === false){
    die("ERROR:Conexiune nerealizata." . mysqli_connect_error());
   }
   $sql = "CREATE TABLE clienti(
      id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
      first_name VARCHAR(30) NOT NULL,
      last_name VARCHAR(30) NOT NULL,
      email VARCHAR(70) NOT NULL UNIQUE,
      password VARCHAR(70) NOT NULL
   )";

   if(mysqli_query($link, $sql)){
    echo "Tabela a fost creata cu succes";
   } else{
    echo "ERROR: Nu a putut fi executat $sql." . mysqli_error($link);
   }
   mysqli_close($link);
?>