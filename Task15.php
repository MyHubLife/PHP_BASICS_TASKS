<?php
echo "Tasks 15 <br>"; //Написать калькулятор. Переменная $a = изменяемое число. Переменная $b = изменяемое число. Переменная $operator = ‘+’ или ‘-’ или ‘/’ или ‘*’ или '%' (остаток от деления).
//На экран выводить результат в зависимости от значений этих переменных. Не забудьте про деление на 0, если надо - выдавать ошибку что на 0 делить нельзя.
$a = 2;
echo "A = ".$a,"<br>";
$b = 0;
echo "B = ".$b,"<br>";
$operator = "%";
echo "Operator = ( ".$operator." )<br>";
$result;
if ($b==0 && $operator=='/' || $operator=='%'){
	echo "На 0 делить нельзя";
}else{
	if ($operator=="+"){
	($result = $a+$b);
	}
	if ($operator=="-"){
	($result = $a-$b);
	}
	if ($operator=="/"){
	($result = $a/$b);
	}
	if ($operator=="*"){
	($result = $a*$b);
	}
	if ($operator=="%"){
	($result = $a%$b);
	}
	echo $a.$operator.$b,'=', $result,"<br>";
};
?>