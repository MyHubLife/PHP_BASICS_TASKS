<?php
echo "Tasks 20-22 <br>"; //Приведите число 20, 0 и -20 к типу boolean. Объясните результат.</p>
$a=(boolean)20;
var_dump($a);
echo "<br>";
$b=(boolean)0;
var_dump($b);
echo "<br>";
$c=(boolean)-20;
var_dump($c);
echo "<br>";
// Результат False - пустая строка или 0, все остальное True
?>