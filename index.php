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

use App\Employee, App\Student, App\Rectangle;

echo "<pre>",
"
    1.	Самостійно, не підглядаючи в мій код, реалізуйте такий самий абстрактний клас User,
    а також класи Employee і Student, що успадковують від нього.
",
"</pre>";

//create an instance of the class Employee
$employee = new Employee();
$employee->setSalary(3333);
echo "Employee salary = " . $employee->getSalary() . "<br />";
//create an instance of the class Student
$student = new Student();
$student->setScholarship(777);
echo "Student Scholarship = " . $student->getScholarship();

echo "<hr />";

echo "<pre>",
"
    2.	Додайте у ваш клас User такий же абстрактний метод increaseRevenue. Напишіть реалізацію цього у класах 
    Employee і Student.
",
"</pre>";

//use the increaseRevenue() method to increase the salary
$employee->increaseRevenue(500);
echo "Employee salary after increase = " . $employee->getSalary() . "<br />";
//use the increaseRevenue() method to increase the scholarship
$student->increaseRevenue(200);
echo "Student scholarship after increase = " . $student->getScholarship();

echo "<hr />";

echo "<pre>",
"
    3.	Додайте також у ваш клас User абстрактний метод decreaseRevenue (зменшити зарплату). Напишіть реалізацію цього
    у класах Employee і Student.
",
"</pre>";

//use the decreaseRevenue() method to decrease the salary
$employee->decreaseRevenue(1200);
echo "Employee salary after reduction = " . $employee->getSalary() . "<br />";
//use the decreaseRevenue() method to decrease the scholarship
$student->decreaseRevenue(350);
echo "Student scholarship after reduction = " . $student->getScholarship();

echo "<hr />";

echo "<pre>",
"
    4.	Зробіть аналогічний клас Rectangle (прямокутник), який має дві приватні властивості: $ a для ширини і $ b для 
    довжини. Цей клас також повинен успадковувати від класу Figure та реалізовувати його методи.
",
"</pre>";

//create an instance of the class Rectangle
$rectangle = new Rectangle(50, 30);
echo "Perimeter of the rectangle = " . $rectangle->getPerimeter() . "<br />";
echo "Square of the rectangle = " . $rectangle->getSquare() . "<br />";
echo "Ratio of the area of the rectangle to the perimeter of the rectangle = " . $rectangle->getRatio() . "<br />";

echo "<hr />";
echo "<pre>",
"
    5.	Додайте в клас Figure метод getSquarePerimeterSum, який знаходитиме суму площі та периметра.
",
"</pre>";

//use the getSquarePerimeterSum() method to get the sum of the perimeter and area of the rectangle
echo "The sum of the area of the rectangle and the perimeter of the rectangle = " . $rectangle->getSquarePerimeterSum() . "<br />";

echo "<hr />";
?>
</body>
</html>