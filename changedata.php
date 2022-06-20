<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Changing data</title>
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

        <div class="changer">
            <div class="container">
                <div class="changer_inner">
                <h1>Інформація про абітурієнтів(abit):</h1>
                <form method="post" autocomplete="off" action="add.php">
                    <h2 style="color:orangered; margin-bottom:-10px; margin-top:10px;">Додавання та оновлення даних:</h2>
                    <p><b>Вказувати лише для зміни існуючих даних</b> - Id: <input type="text" name="Id"></p>
                    <p>FullName: <input type="text" name="FullName" required></p>
                    <p>Age: <input type="text" name="Age" required></p>
                    <p>MedRefNum: <input type="text" name="MedRefNum" required></p>
                    <p>CertifMark: <input type="text" name="CertifMark" required></p>
                    <p>OlympMark: <input type="text" name="OlympMark" required></p>
                    <p>CourseMark: <input type="text" name="CourseMark" required></p>
                    <input type = "checkbox" value = "0" name = "Table" required><span style="font-size: 18px;">Я підтверджую додавання/зміну даних.</span><br/>
                    <input title="Додати або оновити(у разі вказання номеру) рядок даних таблиці abit" type="submit" value="Додати/Змінити">
                </form>
                <form style="margin-top:30px;" method="post" autocomplete="off" action="delete.php">
                    <h2 style="color:orangered;">Видалення даних:</h2>
                    <span style="font-size: 18px">Id даних для видалення:</span> <input style="margin-right:10px;" type="text" name="Id" required><br/>
                    <input type = "checkbox" value = "0" name = "Table" required><span style="font-size: 18px;">Я підтверджую видалення даних.</span><br/>
                    <input title="Видалити рядок з вказаним номером з таблиці abit" type="submit" value="Видалити">
                </form>
                </div>
            </div>
        </div>

        <hr/>

        <div class="changer">
            <div class="container">
                <div class="changer_inner">
                <h1>Інформація про предмети ЗНО(subjzno):</h1>
                <form method="post" autocomplete="off" action="add.php">
                    <h2 style="color:orangered; margin-bottom:-10px; margin-top:10px;">Додавання та оновлення даних:</h2>
                    <p><b>Вказувати лише для зміни існуючих даних</b> - Code: <input type="text" name="Code"></p>
                    <p>Name: <input type="text" name="Name" required></p>
                    <input type = "checkbox" value = "1" name = "Table" required><span style="font-size: 18px;">Я підтверджую додавання/зміну даних.</span><br/>
                    <input title="Додати або оновити(у разі вказання номеру) рядок даних таблиці subjzno" type="submit" value="Додати/Змінити">
                </form>
                <form style="margin-top:30px;" method="post" autocomplete="off" action="delete.php">
                    <h2 style="color:orangered;">Видалення даних:</h2>
                    <span style="font-size: 18px">Code даних для видалення:</span> <input style="margin-right:10px;" type="text" name="Code" required><br/>
                    <input type = "checkbox" value = "1" name = "Table" required><span style="font-size: 18px;">Я підтверджую видалення даних.</span><br/>
                    <input title="Видалити рядок з вказаним номером з таблиці subjzno" type="submit" value="Видалити">
                </form>
                </div>
            </div>
        </div>

        <hr/>

        <div class="changer">
            <div class="container">
                <div class="changer_inner">
                <h1>Інформація про спеціальності(speciality):</h1>
                <form method="post" autocomplete="off" action="add.php">
                    <h2 style="color:orangered; margin-bottom:-10px; margin-top:10px;">Додавання та оновлення даних:</h2>
                    <p><b>Вказувати лише для зміни існуючих даних</b> - Code: <input type="text" name="Code"></p>
                    <p>Name: <input type="text" name="Name" required></p>
                    <p>CoefCert: <input type="text" name="CoefCert" required></p>
                    <p>LicenseVol: <input type="text" name="LicenseVol" required></p>
                    <p>BudgetQuant: <input type="text" name="BudgetQuant" required></p>
                    <p>FacultyCode: <input type="text" name="FacultyCode" required></p>
                    <input type = "checkbox" value = "2" name = "Table" required><span style="font-size: 18px;">Я підтверджую додавання/зміну даних.</span><br/>
                    <input title="Додати або оновити(у разі вказання номеру) рядок даних таблиці speciality" type="submit" value="Додати/Змінити">
                </form>
                <form style="margin-top:30px;" method="post" autocomplete="off" action="delete.php">
                    <h2 style="color:orangered;">Видалення даних:</h2>
                    <span style="font-size: 18px">Code даних для видалення:</span> <input style="margin-right:10px;" type="text" name="Code" required><br/>
                    <input type = "checkbox" value = "2" name = "Table" required><span style="font-size: 18px;">Я підтверджую видалення даних.</span><br/>
                    <input title="Видалити рядок з вказаним номером з таблиці speciality" type="submit" value="Видалити">
                </form>
                </div>
            </div>
        </div>

        <hr/>

        <div class="changer">
            <div class="container">
                <div class="changer_inner">
                <h1>Інформація про факультети(faculty):</h1>
                <form method="post" autocomplete="off" action="add.php">
                    <h2 style="color:orangered; margin-bottom:-10px; margin-top:10px;">Додавання та оновлення даних:</h2>
                    <p><b>Вказувати лише для зміни існуючих даних</b> - Code: <input type="text" name="Code"></p>
                    <p>Name: <input type="text" name="Name" required></p>
                    <input type = "checkbox" value = "3" name = "Table" required><span style="font-size: 18px;">Я підтверджую додавання/зміну даних.</span><br/>
                    <input title="Додати або оновити(у разі вказання номеру) рядок даних таблиці faculty" type="submit" value="Додати/Змінити">
                </form>
                <form style="margin-top:30px;" method="post" autocomplete="off" action="delete.php">
                    <h2 style="color:orangered;">Видалення даних:</h2>
                    <span style="font-size: 18px">Code даних для видалення:</span> <input style="margin-right:10px;" type="text" name="Code" required><br/>
                    <input type = "checkbox" value = "3" name = "Table" required><span style="font-size: 18px;">Я підтверджую видалення даних.</span><br/>
                    <input title="Видалити рядок з вказаним номером з таблиці faculty" type="submit" value="Видалити">
                </form>
                </div>
            </div>
        </div>

        <hr/>

        <div class="changer">
            <div class="container">
                <div class="changer_inner">
                <h1>Інформація про коефіцієнти предметів для спеціальностей(coefzno):</h1>
                <form method="post" autocomplete="off" action="add.php">
                    <h2 style="color:orangered; margin-bottom:-10px; margin-top:10px;">Додавання та оновлення даних:</h2>
                    <p><b>Вказувати лише для зміни існуючих даних</b> - Id: <input type="text" name="Id"></p>
                    <p>Value: <input type="text" name="Value" required></p>
                    <p>MinMark: <input type="text" name="MinMark" required></p>
                    <p>SpecialityCode: <input type="text" name="SpecialityCode" required></p>
                    <p>SubjectCode: <input type="text" name="SubjectCode" required></p>
                    <input type = "checkbox" value = "4" name = "Table" required><span style="font-size: 18px;">Я підтверджую додавання/зміну даних.</span><br/>
                    <input title="Додати або оновити(у разі вказання номеру) рядок даних таблиці coefzno" type="submit" value="Додати/Змінити">
                </form>
                <form style="margin-top:30px;" method="post" autocomplete="off" action="delete.php">
                    <h2 style="color:orangered;">Видалення даних:</h2>
                    <span style="font-size: 18px">Id даних для видалення:</span> <input style="margin-right:10px;" type="text" name="Id" required><br/>
                    <input type = "checkbox" value = "4" name = "Table" required><span style="font-size: 18px;">Я підтверджую видалення даних.</span><br/>
                    <input title="Видалити рядок з вказаним номером з таблиці coefzno" type="submit" value="Видалити">
                </form>
                </div>
            </div>
        </div>

        <hr/>

        <div class="changer">
            <div class="container">
                <div class="changer_inner">
                <h1>Інформація про результати ЗНО абітурієнтів(abitzno):</h1>
                <form method="post" autocomplete="off" action="add.php">
                    <h2 style="color:orangered; margin-bottom:-10px; margin-top:10px;">Додавання та оновлення даних:</h2>
                    <p><b>Вказувати лише для зміни існуючих даних</b> - Id: <input type="text" name="Id"></p>
                    <p>Mark: <input type="text" name="Mark" required></p>
                    <p>AbitId: <input type="text" name="AbitId" required></p>
                    <p>SubjectCode: <input type="text" name="SubjectCode" required></p>
                    <input type = "checkbox" value = "5" name = "Table" required><span style="font-size: 18px;">Я підтверджую додавання/зміну даних.</span><br/>
                    <input title="Додати або оновити(у разі вказання номеру) рядок даних таблиці abitzno" type="submit" value="Додати/Змінити">
                </form>
                <form style="margin-top:30px;" method="post" autocomplete="off" action="delete.php">
                    <h2 style="color:orangered;">Видалення даних:</h2>
                    <span style="font-size: 18px">Id даних для видалення:</span> <input style="margin-right:10px;" type="text" name="Id" required><br/>
                    <input type = "checkbox" value = "5" name = "Table" required><span style="font-size: 18px;">Я підтверджую видалення даних.</span><br/>
                    <input title="Видалити рядок з вказаним номером з таблиці abitzno" type="submit" value="Видалити">
                </form>
                </div>
            </div>
        </div>

        <hr/>

        <div class="changer">
            <div class="container">
                <div class="changer_inner">
                <h1>Інформація про заяви абітурієнтів на спеціальності(statement):</h1>
                <form method="post" autocomplete="off" action="add.php">
                    <h2 style="color:orangered; margin-bottom:-10px; margin-top:10px;">Додавання та оновлення даних:</h2>
                    <p><b>Вказувати лише для зміни існуючих даних</b> - Number: <input type="text" name="Number"></p>
                    <p>Date: <input type="date" name="Date" required></p>
                    <p>AbitId: <input type="text" name="AbitId" required></p>
                    <p>SpecialityCode: <input type="text" name="SpecialityCode" required></p>
                    <input type = "checkbox" value = "6" name = "Table" required><span style="font-size: 18px;">Я підтверджую додавання/зміну даних.</span><br/>
                    <input title="Додати або оновити(у разі вказання номеру) рядок даних таблиці statement" type="submit" value="Додати/Змінити">
                </form>
                <form style="margin-top:30px;" method="post" autocomplete="off" action="delete.php">
                    <h2 style="color:orangered;">Видалення даних:</h2>
                    <span style="font-size: 18px">Number даних для видалення:</span> <input style="margin-right:10px;" type="text" name="Number" required><br/>
                    <input type = "checkbox" value = "6" name = "Table" required><span style="font-size: 18px;">Я підтверджую видалення даних.</span><br/>
                    <input title="Видалити рядок з вказаним номером з таблиці statement" type="submit" value="Видалити">
                </form>
                </div>
            </div>
        </div>
    </body>
</html>