<?php
   $link= mysqli_connect("localhost","root","","ValcomeanuAlexandra");
   if($link === false){
    die("ERROR:Conexiune nerealizata." . mysqli_connect_error());
   }
   $sql = "INSERT INTO clienti (first_name,last_name,email,password) VALUES(?,?,?,?)";
   if($stmt = mysqli_prepare($link, $sql)){
    mysqli_stmt_bind_param($stmt, "ssss",$first_name, $last_name, $email,$password);
    $first_name = $_REQUEST['first_name'];
    $last_name = $_REQUEST['last_name'];
    $email = $_REQUEST['email'];
    $password = $_REQUEST['password'];

    if(mysqli_stmt_execute($stmt)){
        echo("Datele au fost salvate.");
        header("Location:login.php");
    } else{
        echo"ERROR:Nu a putut fi executat: $sql." . mysqli_error($link);
    }
   } else {
      echo"ERROR:Nu a putut fi pregatit: $sql." . mysqli_error($link);
   }
  mysqli_stmt_close($stmt);
  mysqli_close($link);
   
?>