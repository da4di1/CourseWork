<?php

require_once 'connect.php';

$table = $_POST['Table'];

if ($table == 0){
    $id = $_POST['Id'];
    $fullName = $_POST['FullName'];
    $age = $_POST['Age'];
    $medRufNum = $_POST['MedRefNum'];
    $certifMark = $_POST['CertifMark'];
    $olympMark = $_POST['OlympMark'];
    $courseMark = $_POST['CourseMark'];

    if ($id == NULL){
        mysqli_query($connect, "INSERT INTO abit (Id, FullName, Age, MedRefNum, CertifMark, OlympMark, CourseMark) VALUES (NULL, '$fullName', '$age', '$medRufNum', '$certifMark', '$olympMark', '$courseMark')");
    }
    else{
        mysqli_query($connect, "UPDATE abit SET FullName='$fullName', Age='$age', MedRefNum='$medRufNum', CertifMark='$certifMark', OlympMark='$olympMark', CourseMark='$courseMark' WHERE abit.Id = '$id'");
    }
}
else if ($table == 1){
    $id = $_POST['Code'];
    $name = $_POST['Name'];

    if ($id == NULL){
        mysqli_query($connect, "INSERT INTO subjzno (Code, Name) VALUES (NULL, '$name')");
    }
    else{
        mysqli_query($connect, "UPDATE subjzno SET Name = '$name' WHERE subjzno.Code = '$id'");
    }
}
else if ($table == 2){
    $id = $_POST['Code'];
    $name = $_POST['Name'];
    $coefCert = $_POST['CoefCert'];
    $licenseVol = $_POST['LicenseVol'];
    $budgetQuant = $_POST['BudgetQuant'];
    $facultyCode = $_POST['FacultyCode'];

    if ($id == NULL){
        mysqli_query($connect, "INSERT INTO speciality (Code, Name, CoefCert, LicenseVol, BudgetQuant, FacultyCode) VALUES (NULL, '$name', '$coefCert', '$licenseVol', '$budgetQuant', '$facultyCode')");
    }
    else{
        mysqli_query($connect, "UPDATE speciality SET Name='$name', CoefCert='$coefCert', LicenseVol='$licenseVol', BudgetQuant='$budgetQuant', FacultyCode='$facultyCode' WHERE speciality.Code = '$id'");
    }
}
else if($table == 3){
    $id = $_POST['Code'];
    $name = $_POST['Name'];

    if ($id == NULL){
        mysqli_query($connect, "INSERT INTO faculty (Code, Name) VALUES (NULL, '$name')");
    }
    else{
        mysqli_query($connect, "UPDATE faculty SET Name='$name' WHERE faculty.Code = '$id'");
    }
}
else if($table == 4){
    $id = $_POST['Id'];
    $value = $_POST['Value'];
    $minMark = $_POST['MinMark'];
    $specialityCode = $_POST['SpecialityCode'];
    $subjectCode = $_POST['SubjectCode'];

    if ($id == NULL){
        mysqli_query($connect, "INSERT INTO coefzno (Id, Value, MinMark, SpecialityCode, SubjectCode) VALUES (NULL, '$value', '$minMark', '$specialityCode', '$subjectCode')");
    }
    else{
        mysqli_query($connect, "UPDATE coefzno SET Value='$value', MinMark='$minMark', SpecialityCode='$specialityCode', SubjectCode='$subjectCode' WHERE coefzno.Id = '$id'");
    }
}
else if($table == 5){
    $id = $_POST['Id'];
    $mark = $_POST['Mark'];
    $abitId = $_POST['AbitId'];
    $subjectCode = $_POST['SubjectCode'];

    if ($id == NULL){
        mysqli_query($connect, "INSERT INTO abitzno (Id, Mark, AbitId, SubjectCode) VALUES (NULL, '$mark', '$abitId', '$subjectCode')");
    }
    else{
        mysqli_query($connect, "UPDATE abitzno SET Mark='$mark', AbitId='$abitId', SubjectCode='$subjectCode' WHERE abitzno.Id = '$id'");
    }
}
else if($table == 6){
    $id = $_POST['Number'];
    $date = $_POST['Date'];
    $abitId = $_POST['AbitId'];
    $specialityCode = $_POST['SpecialityCode'];

    if ($id == NULL){
        mysqli_query($connect, "INSERT INTO statement (Number, Date, AbitId, SpecialityCode) VALUES (NULL, '$date', '$abitId', '$specialityCode')");
    }
    else{
        mysqli_query($connect, "UPDATE statement SET Date='$date', AbitId='$abitId', SpecialityCode='$specialityCode' WHERE statement.Number = '$id'");
    }
}

header('Location: changedata.php');

?>