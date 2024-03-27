<?php
if ($_GET) {
    // Получаем данные из GET-запроса
    $textInput1 = $_GET['textInput1'] ?? '';
    $textInput2 = $_GET['textInput2'] ?? '';
    $select1 = $_GET['select1'] ?? '';

    // Формируем массив с полученными данными
    $response = array(
        'textInput1' => $textInput1,
        'textInput2' => $textInput2,
        'select1' => $select1
    );

    // Возвращаем данные в формате JSON
    header('Content-Type: application/json');
    echo json_encode($response);
} else {
    echo "Ошибка: Данные не были переданы";
}
?>
