<?php

require_once 'connect.php';


?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Directory</title>
        <link rel="stylesheet" href="./Site.css" type="text/css"/>
    </head>
    <body>
        <div class="header">
            <div class="container">
                <div class="header_inner">
                    <a class="logo">Курсова робота</a>
                    <nav class="nav">
                        <a class="nav-link" href = "index.php">Головна</a>
                        <a class="nav-link" href = "directory.php">Довідник</a>
                        <a class="nav-link" href = "changedata.php">Додати/Видалити дані</a>
                    </nav>
                </div>
            </div>
        </div>

        <div class = "table">
        <div class="container">
        <h1>Інформація про абітурієнтів(abit):</h1>
        <?php
        echo "
        <table align = 'center'>
            <tr>
                <th>Id</th>
                <th>FullName</th>
                <th>Age</th>
                <th>MedRefNum</th>
                <th>CertifMark</th>
                <th>OlympMark</th>
                <th>CourseMark</th>
            </tr>
            ";

            $abits = mysqli_query($connect, "SELECT * FROM abit");
            $abits = mysqli_fetch_all($abits);

            foreach ($abits as $abit) {
                echo '
                <tr>
                <td>' . $abit[0] . '</td>
                <td>' . $abit[1] . '</td>
                <td>' . $abit[2] . '</td>
                <td>' . $abit[3] . '</td>
                <td>' . $abit[4] . '</td>
                <td>' . $abit[5] . '</td>
                <td>' . $abit[6] . '</td>
                </tr>
                ';
            }
        echo '
        </table>
        ';
        ?>
        </div>
        </div>

        <div class = "table">
        <div class="container">
        <h1>Інформація про предмети ЗНО(subjzno):</h1>
        <?php
        echo "
        <table align = 'center'>
            <tr>
                <th>Code</th>
                <th>Name</th>
            </tr>
            ";

            $subjects = mysqli_query($connect, "SELECT * FROM subjzno");
            $subjects = mysqli_fetch_all($subjects);

            foreach ($subjects as $subject) {
                echo '
                <tr>
                <td>' . $subject[0] . '</td>
                <td>' . $subject[1] . '</td>
                ';
            }
        echo '
        </table>
        ';
        ?>
        </div>
        </div>

        <div class = "table">
        <div class="container">
        <h1>Інформація про спеціальності(speciality):</h1>
        <?php
        echo "
        <table align = 'center'>
            <tr>
                <th>Code</th>
                <th>Name</th>
                <th>CoefCert</th>
                <th>LicenseVol</th>
                <th>BudgetQuant</th>
                <th>FacultyCode</th>
            </tr>
            ";

            $specs = mysqli_query($connect, "SELECT * FROM speciality");
            $specs = mysqli_fetch_all($specs);

            foreach ($specs as $spec) {
                echo '
                <tr>
                <td>' . $spec[0] . '</td>
                <td>' . $spec[1] . '</td>
                <td>' . $spec[2] . '</td>
                <td>' . $spec[3] . '</td>
                <td>' . $spec[4] . '</td>
                <td>' . $spec[5] . '</td>
                </tr>
                ';
            }
        echo '
        </table>
        ';
        ?>
        </div>
        </div>

        <div class = "table">
        <div class="container">
        <h1>Інформація про факультети(faculty):</h1>
        <?php
        echo "
        <table align = 'center'>
            <tr>
                <th>Code</th>
                <th>Name</th>
            </tr>
            ";

            $facs = mysqli_query($connect, "SELECT * FROM faculty");
            $facs = mysqli_fetch_all($facs);

            foreach ($facs as $fac) {
                echo '
                <tr>
                <td>' . $fac[0] . '</td>
                <td>' . $fac[1] . '</td>
                ';
            }
        echo '
        </table>
        ';
        ?>
        </div>
        </div>

        <div class = "table">
        <div class="container">
        <h1>Інформація про коефіцієнти предметів для спеціальностей(coefzno):</h1>
        <?php
        echo "
        <table align = 'center'>
            <tr>
                <th>Id</th>
                <th>Value</th>
                <th>MinMark</th>
                <th>SpecialityCode</th>
                <th>SubjectCode</th>
            </tr>
            ";

            $coefs = mysqli_query($connect, "SELECT * FROM coefzno");
            $coefs = mysqli_fetch_all($coefs);

            foreach ($coefs as $coef) {
                echo '
                <tr>
                <td>' . $coef[0] . '</td>
                <td>' . $coef[1] . '</td>
                <td>' . $coef[2] . '</td>
                <td>' . $coef[3] . '</td>
                <td>' . $coef[4] . '</td>
                </tr>
                ';
            }
        echo '
        </table>
        ';
        ?>
        </div>
        </div>

        <div class = "table">
        <div class="container">
        <h1>Інформація про результати ЗНО абітурієнтів(abitzno):</h1>
        <?php
        echo "
        <table align = 'center'>
            <tr>
                <th>Id</th>
                <th>Mark</th>
                <th>AbitId</th>
                <th>SubjectCode</th>
            </tr>
            ";

            $results = mysqli_query($connect, "SELECT * FROM abitzno");
            $results = mysqli_fetch_all($results);

            foreach ($results as $result) {
                echo '
                <tr>
                <td>' . $result[0] . '</td>
                <td>' . $result[1] . '</td>
                <td>' . $result[2] . '</td>
                <td>' . $result[3] . '</td>
                </tr>
                ';
            }
        echo '
        </table>
        ';
        ?>
        </div>
        </div>

        <div class = "table">
        <div class="container">
        <h1>Інформація про заяви абітурієнтів на спеціальності(statement):</h1>
        <?php
        echo "
        <table align = 'center'>
            <tr>
                <th>Number</th>
                <th>Date</th>
                <th>AbitId</th>
                <th>SpecialityCode</th>
            </tr>
            ";

            $statements = mysqli_query($connect, "SELECT * FROM statement");
            $statements = mysqli_fetch_all($statements);

            foreach ($statements as $statement) {
                echo '
                <tr>
                <td>' . $statement[0] . '</td>
                <td>' . $statement[1] . '</td>
                <td>' . $statement[2] . '</td>
                <td>' . $statement[3] . '</td>
                </tr>
                ';
            }
        echo '
        </table>
        ';
        ?>
        </div>
        </div>
    </body>
</html>