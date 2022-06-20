<?php

require_once 'connect.php';

$table = $_POST['Table'];

if ($table == 0){
    $id = $_POST['Id'];

    mysqli_query($connect, "DELETE FROM abit WHERE abit.Id = '$id'");
}
else if ($table == 1){
    $id = $_POST['Code'];
    
    mysqli_query($connect, "DELETE FROM subjzno WHERE subjzno.Code = '$id'");
}
else if ($table == 2){
    $id = $_POST['Code'];
    
    mysqli_query($connect, "DELETE FROM speciality WHERE speciality.Code = '$id'");
}
else if($table == 3){
    $id = $_POST['Code'];
    
    mysqli_query($connect, "DELETE FROM faculty WHERE faculty.Code = '$id'");
}
else if($table == 4){
    $id = $_POST['Id'];
    
    mysqli_query($connect, "DELETE FROM coefzno WHERE coefzno.Id = '$id'");
}
else if($table == 5){
    $id = $_POST['Id'];
   
    mysqli_query($connect, "DELETE FROM abitzno WHERE abitzno.Id = '$id'");
}
else if($table == 6){
    $id = $_POST['Number'];
    
    mysqli_query($connect, "DELETE FROM statement WHERE statement.Number = '$id'");
}

header('Location: changedata.php');

?>