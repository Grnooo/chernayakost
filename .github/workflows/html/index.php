<?php
$fname = $_POST["fname"];
$lname = $_POST["lname"];
$phone = $_POST["phone"];
$date = $_POST["date"];
$service = $_POST["service"];

// Здесь вам нужно подключиться к вашей базе данных.

// SQL запрос на вставку данных в таблицу
$sql = "INSERT INTO bookings (first_name, last_name, phone, date, service) VALUES ('$fname', '$lname', '$phone', '$date', '$service')";

// Запустить код SQL
if (mysqli_query($conn, $sql)) {
  echo "Ваша запись успешно добавлена";
} else {
  echo "Ошибка: " . $sql . "<br>" . mysqli_error($conn);
}

// Закрыть соединение с базой данных.
mysqli_close($conn);
?>
