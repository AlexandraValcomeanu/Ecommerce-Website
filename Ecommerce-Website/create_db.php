<?php
   $link= mysqli_connect("localhost","root","");
   if($link === false){
    die("ERROR:Conexiune nerealizata." . mysqli_connect_error());
   }
   $sql = "CREATE DATABASE ValcomeanuAlexandra";
   if(mysqli_query($link, $sql)){
    echo "Baza de date a fost creata cu succes";
   } else{
    echo "ERROR: Nu a putut fi executat $sql." . mysqli_error($link);
   }
   mysqli_close($link);
?>