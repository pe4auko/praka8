<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="style.css" />
    
</head>

<body>
<?php
// Отримуємо значення змінних $a і $b з адресного рядка
$a = isset($_GET['a']) ? $_GET['a'] : '';
$b = isset($_GET['b']) ? $_GET['b'] : '';

// Перевіряємо, чи введені значення є числами
if (is_numeric($a) && is_numeric($b)) {
    // Виконуємо математичні операції
    $sum = $a + $b;
    $product = $a * $b;
    $difference = $a - $b;
    $quotient = $b != 0 ? $a / $b : "Ділення на нуль неможливе";

    // Виводимо форму для введення значень змінних
    echo '<form method="GET" action="">';
    echo 'Число a: <input type="text" name="a" value="' . $a . '"><br>';
    echo 'Число b: <input type="text" name="b" value="' . $b . '"><br>';
    echo '<input type="submit" value="Обчислити">';
    echo '</form>';

    // Виводимо результати
    echo "Сума: " . $sum . "<br>";
    echo "Добуток: " . $product . "<br>";
    echo "Різниця: " . $difference . "<br>";
    echo "Частка: " . $quotient . "<br>";
} else {
    // Виводимо форму для введення значень змінних
    echo '<form method="GET" action="">';
    echo 'Число a: <input type="text" name="a" value="' . $a . '"><br>';
    echo 'Число b: <input type="text" name="b" value="' . $b . '"><br>';
    echo '<input type="submit" value="Обчислити">';
    echo '</form>';

    echo "Введені значення повинні бути числами.";
}
?>

    <div class="link">
        <a href="index.html">вибір завдань</a>
    </div>
</body>

</html>