<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="styles.css" />
    <title>Суперглобальні змінні PHP</title>
    <style>
        table {
            border-collapse: collapse;
        }

        th,
        td {
            border: 1px solid black;
            padding: 5px;
        }
    </style>
</head>

<body>
    <h1>Суперглобальні змінні PHP</h1>

    <table>
        <tr>
            <th>Змінна</th>
            <th>Характеристика</th>
            <th>Значення</th>
        </tr>
        <tr>
            <td>GEY_INFO</td>
            <td>Масив, що містить посилання на всі глобальні змінні у скрипті</td>
            <td><?php var_dump($GLOBALS); ?></td>
        </tr>
        <tr>
            <td>_SERVER</td>
            <td>Масив, що містить інформацію про сервер та виконання скрипта</td>
            <td><?php var_dump($_SERVER); ?></td>
        </tr>
        <tr>
            <td>_GET</td>
            <td>Масив, що містить дані, передані методом GET</td>
            <td><?php var_dump($_GET); ?></td>
        </tr>
        <tr>
            <td>_POST</td>
            <td>Масив, що містить дані, передані методом POST</td>
            <td><?php var_dump($_POST); ?></td>
        </tr>
        <tr>
            <td>_FILES</td>
            <td>Масив, що містить інформацію про завантажені файли</td>
            <td><?php var_dump($_FILES); ?></td>
        </tr>
        <tr>
            <td>_COOKIE</td>
            <td>Масив, що містить значення кукі-файлів</td>
            <td><?php var_dump($_COOKIE); ?></td>
        </tr>
        <tr>
            <td>_SESSION</td>
            <td>Масив, що містить дані сесії</td>
            <td><?php var_dump($_SESSION); ?></td>
        </tr>
        <tr>
            <td>_REQUEST</td>
            <td>Масив, що містить дані, передані методом GET, POST або COOKIE</td>
            <td><?php var_dump($_REQUEST); ?></td>
        </tr>
        <tr>
            <td>_ENV</td>
            <td>Масив, що містить інформацію про середовище</td>
            <td><?php var_dump($_ENV); ?></td>
        </tr>
    </table>
    <div class="linker">
        <a href="index.html">вибір завдань</a>
    </div>
</body>

</html>