<?php
if (!empty($_POST)) {
 $x = (int)(!empty($_POST['x']) ? $_POST['x'] : '');
 $y = (int)(!empty($_POST['y']) ? $_POST['y'] : '');
 $operation = !empty($_POST['operation']) ?
 $_POST['operation']
 : '';
 if (!is_int($x) || !is_int($y)) {
 echo 'Неверный тип данных';
 } else {
 switch ($operation) {
 case 'sum':
 $result = $x. '+' .$y. '=' .($x + $y);
 break;
 case 'diff':
 $result = $x. '-' .$y. '=' .($x - $y);
 break;
 case 'del':
  if ($y == 0)
 	$result = 'На ноль делить нельзя';
  else
 $result = $x. '/' .$y. '=' .($x / $y);
 break;
 case 'multiply':
 $result = $x. '*' .$y. '=' .($x * $y);
 break;
 default:
 $result = 'Передан неизвестный тип операции';
 }
 echo $result;
 }
}

#При вводе данных в форму они передаются текстом, поэтому is_int, предназначенная для определения целых чисел не видит числа потому что передаётся текст
#Для этого можно переконвертировать входящие данные в int, тогда он увидит все числа, в том числе и 0.