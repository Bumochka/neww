<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $age = htmlspecialchars($_POST['age']);
    $feedback = htmlspecialchars($_POST['feedback']);

    $data = "Имя: $name\nВозраст: $age\nОтзыв: $feedback\n\n";

    file_put_contents('responses.txt', $data, FILE_APPEND);

    echo "Спасибо за ваш отзыв!";
} else {
    echo "Ошибка: некорректный запрос.";
}
?>
