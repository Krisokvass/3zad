php<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Проверка, что все поля заполнены
    if (empty($_POST["product"]) || empty($_POST["material"]) || empty($_POST["quantity"])) {
        echo "Вы не заполнили все обязательные поля. Пожалуйста, вернитесь и исправьте.";
    } else {
        // Получение данных из формы
        $product = htmlspecialchars($_POST["product"]);
        $material = htmlspecialchars($_POST["material"]);
        $quantity = htmlspecialchars($_POST["quantity"]);
        
        // Формирование и отображение сообщения
        echo "<h1>Ваш заказ принят.</h1>";
        echo "<p>Заказано изделие: <strong>$product</strong></p>";
        echo "<p>Материал: <strong>$material</strong></p>";
        echo "<p>Количество: <strong>$quantity</strong></p>";
    }
} else {
    echo "Некорректный запрос.";
}
?>
