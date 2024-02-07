<?php
  require 'database.php';
  
  //---------------------------------------- Condition to check that POST value is not empty.
  if (!empty($_POST)) {
    //........................................ keep track POST values
    $id = $_POST['id'];
    $voltage = $_POST['voltage'];
    //........................................
    
    //........................................ Updating the data in the table.
    $pdo = Database::connect();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "UPDATE db_monitor2 SET voltage = ? WHERE id = ?";
    $q = $pdo->prepare($sql);
    $q->execute(array($voltage,$id));
    Database::disconnect();
  }
?>