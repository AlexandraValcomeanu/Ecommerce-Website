<?php
   $link= mysqli_connect("localhost","root","","ValcomeanuAlexandra");
   if($link === false){
    die("ERROR:Conexiune nerealizata." . mysqli_connect_error());
   }
   $sql = "SELECT * FROM clienti";
   if($result=mysqli_query($link, $sql)){
      if(mysqli_num_rows($result) > 0){
        echo"<table>";
          echo"<tr>";
            echo"<th>id</th>";
            echo"<th>first_name</th>";
            echo"<th>last_name</th>";
            echo"<th>email</th>";
          echo"</tr>";
        while($row = mysqli_fetch_array($result)){
            echo"<tr>";
            echo"<td>" . $row['id'] . "</td>";
            echo"<td>" . $row['first_name'] . "</td>";
            echo"<td>" . $row['last_name'] . "</td>";
            echo"<td>" . $row['email'] . "</td>";
          echo"</tr>";
        } echo"</table>";
        mysqli_free_result($result);
      }else{
        echo"Nu au fost gasite inregistrari.";
      }
   } else{
     echo"ERROR: Nu a putut fi executat $sql." . mysqli_error($link);
   }
  
  mysqli_close($link);
   
?>