    <?php
    function OpenCon()
     {
     $dbhost = "localhost";
     $dbuser = "root";
     $dbpass = "";
     $db = "dbTest";
     $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
     echo "Connected Successfully 1";
     
     return $conn;
     }
     
    function CloseCon($conn)
     {
     $conn -> close();
     }
       
    ?>