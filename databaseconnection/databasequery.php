<?php 
  include("database.php");
  $sql = "SELECT * FROM users";
  $result =  mysqli_query($connect, $sql);
  if(mysqli_num_rows($result)> 0){
    while($row = mysqli_fetch_assoc($result)){

        echo $row["id"] . "<br>";
        echo $row["user"]. "<br>";
        echo $row["password"]. "<br>";
        echo $row["registration_date"]. "<br>";
    }
  }
  else{
    echo " No user found";

  }
  mysqli_close($connect);
?>






