<!DOCTYPE html>
<html lang="en">
<head>
  <title>UGC Passed Studnet Input</title>
  <meta charset="UTF-8">
    <meta name="description" content="UGC Final Report">
    <meta name="keywords" content="UGC">
  <meta name="Mousumi" content="UGC">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <!-- <meta http-equiv="refresh" content="30"> -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet"  href="../css/style.css">
  
</head>
<body>
  
   <form method="post">
      <div class="form-group">
          <label id="pasteLabel" for="submitInputTextArea">Paste Your Input According to the Pre Defined Formet</label>
          
    <p><a href="UniversityPreDefainedFormat">Visit Pre Defined</a></p>
        <textarea class="form-control" rows="15" id="submitInputTextArea" name="submitInputTextArea"></textarea>
        </div>
        <input id="submitButton" name="submitButton" type="submit" value="Submit">
    </form>

  <?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "";
  
  $conn = mysqli_connect($servername, $username, $password, $dbname);

  // Create database --------------------------------------------------------
  $sql = "CREATE DATABASE IF NOT EXISTS UGC";

  if (mysqli_query($conn, $sql)) {
      echo "Database created successfully 2<br>";
  } else {
      echo "Error creating database: " . mysqli_error($conn) . "<br>";
  }

  $dbname = 'UGC';
  mysqli_select_db ( $conn , $dbname);

  if (!$conn) {
      die("select UGC connection failed: " . mysqli_connect_error());
  }

  //create accelaration table --------------------------------------------------
  $sql = "CREATE TABLE IF NOT EXISTS `EXPENSE` (
    `UniversityID` INT NOT NULL AUTO_INCREMENT,
    `UniversityName` VARCHAR(50) NOT NULL,
    `EducationExpense` INT(10) NOT NULL,
    `ResearchExpense` INT(10) NOT NULL,
    `SalaryExpense` INT(10) NOT NULL,
    `ScholarshipExpense` INT(10) NOT NULL,
    `TransportExpense` INT(10) NOT NULL,
    `ElectricityExpense` INT(10) NOT NULL,
    `InfrastructureExpense` INT(10) NOT NULL,
    `MedicalExpense` INT(10) NOT NULL,
    `MusicExpense` INT(10) NOT NULL,

    PRIMARY KEY (`UniversityID`))";

  if(mysqli_query($conn, $sql)){
      echo "Table accelaration created successfully 2<br>";
  } else {
      echo "Error creating accelaration table: " . mysqli_error($conn). "<br>";
  }

  if(isset($_POST["submitButton"]))
  {
    
    //$str=$_POST['submitInputTextArea']; 
  
    $UniversityData = $_REQUEST["submitInputTextArea"]; 
    $UniversityDataReplaced = str_replace("\n",",",$UniversityData);
    $pieces = explode(",",$UniversityDataReplaced);
    //echo $pieces[0]; // piece1
    //echo $pieces[1]; // piece2
    //echo "in sunmit button";

    //$query = "INSERT INTO UNIVERSITY (UniversityID,UniversityName, UniversityLand,UniversityOwnLand,UniversityRentLand) VALUES
    //  ('$pieces[0]','$pieces[1]','$pieces[2]','$pieces[3]','$pieces[4]')";

    //  if(mysqli_query($conn, $query)){
  //  echo "Records inserted successfully.";
//} else{
 //   echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
//}




  $result = sizeof($pieces);
  for($i=0;$i<$result;$i++)
  {
    $value1 = $i;
    $value2 = $i+1;
    $value3 = $i+2;
    $value4 = $i+3;
    $value5 = $i+4;
    $value6 = $i+5;
    $value7 = $i+6;
    $value8 = $i+7;
    $value9 = $i+8;
    $value10 = $i+9;
    $value11 = $i+10;

    $query = "INSERT INTO EXPENSE (UniversityID,UniversityName,EducationExpense, ResearchExpense,SalaryExpense,ScholarshipExpense,TransportExpense,ElectricityExpense,InfrastructureExpense,MedicalExpense,MusicExpense) VALUES
      ('$pieces[$value1]','$pieces[$value2]','$pieces[$value3]','$pieces[$value4]','$pieces[$value5]','$pieces[$value6]','$pieces[$value7]','$pieces[$value8]','$pieces[$value9]','$pieces[$value10]','$pieces[$value11]')";
      $i=$value11;

      if(mysqli_query($conn, $query)){
    echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
  }

  echo "\n";
    

    
    

} 

  

      
  //$query = "INSERT INTO UNIVERSITY (University ID,University Name, University Land,University Own Land,University Rent Land) VALUES
  //('1', '2'), ('4', '5') ,('3', '5'),('6', '7'),('2', '4'),('0', '3'),('3', '2')";
  
  //$conn->query($query);




  mysqli_close($conn);
?>


<a href="univesityExpenceChartRepresentation.php">Show Chart</a









  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>

  

  


</body>
</html>