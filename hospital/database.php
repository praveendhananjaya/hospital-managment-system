<!DOCTYPE html>
<html>
<body>
<?php
      $servername = "localhost" ;
      $username   = "root" ;
      $password   = "praveen" ;
      $database   = "Project" ;
      // creat connection
      $conn = new mysqli( $servername , $username , $password , $database );
      // cheach connection
      if( !$conn ){
        die("Connection failed: " . $conn->connect_error);
      }
      $sql = " USE Project ; " ;
      mysqli_query( $conn , $sql ) ;
?>
</body> 
</html>