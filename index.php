<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home Work for Lesson 17</title>
    <style>
        body {
            color: darkblue;
        }

        pre {
            color: black;
        }

        hr {
            background-color: crimson;
        }
    </style>
</head>
<body>
<h5>Заняття 17. Поліморфізм в ООП на PHP. Абстрактні класи в ООП на PHP </h5>
<hr>

<?php
require_once __DIR__ . '/vendor/autoload.php';

use App\User, App\Employee,  App\Student, App\Rectangle, App\Figure;

echo "<pre>",
"
    1.	Самостійно, не підглядаючи в мій код, реалізуйте такий самий абстрактний клас User,
    а також класи Employee і Student, що успадковують від нього.
",
"</pre>";

//create an instance of the class User
$user1 = new User("First");
$user2 = new User("Second");



echo "<hr />";

echo "<pre>",
"
    2.	Додайте у ваш клас User такий же абстрактний метод increaseRevenue. Напишіть реалізацію цього у класах 
    Employee і Student.
",
"</pre>";





echo "<hr />";

echo "<pre>",
"
    3.	Додайте також у ваш клас User абстрактний метод decreaseRevenue (зменшити зарплату). Напишіть реалізацію цього
    у класах Employee і Student.
",
"</pre>";





echo "<hr />";

echo "<pre>",
"
    4.	Зробіть аналогічний клас Rectangle (прямокутник), який має дві приватні властивості: $a для ширини і $b для 
    довжини. Цей клас також повинен успадковувати від класу Figure та реалізовувати його методи.
",
"</pre>";





echo "<hr />";
echo "<pre>",
"
    5.	Додайте в клас Figure метод getSquarePerimeterSum, який знаходитиме суму площі та периметра.
",
"</pre>";





echo "<hr />";
?>
</body>
</html>