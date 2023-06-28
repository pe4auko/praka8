

<!DOCTYPE html>
<html>
<head>
    <title>Математичні обчислення</title>
</head>
<body>
    <h1>Математичні обчислення</h1>
    
    <form method="POST" action="">
        <label for="c">Змінна c:</label>
        <input type="number" name="c" id="c"><br>

        <label for="d">Змінна d:</label>
        <input type="number" name="d" id="d"><br>

        <input type="submit" value="Обчислити">
    </form>

    <?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Отримання значень змінних $c і $d з форми
    $c = $_POST['c'];
    $d = $_POST['d'];

    // Виконання математичних обчислень
    $sum = $c + $d;
    $product = $c * $d;
    $difference = $c - $d;
    $quotient = $c / $d;

    // Виведення результатів
    echo "Сума: " . $sum . "<br>";
    echo "Добуток: " . $product . "<br>";
    echo "Різниця: " . $difference . "<br>";
    echo "Частка: " . $quotient . "<br>";
}
?>
    
    <div class="link">
        <a href="index.html">вибір завдань</a>
    </div>
</body>

</html>