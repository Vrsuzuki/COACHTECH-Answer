<?php
// ー【演算子】ーーーーーーーーーーーーーーーーーーーーー
// ー【算術演算子】ーーーーーーーーーーーーーーーーーーー
$a = 15;
$b = 3;
$c = 10;

$answer1 = $a + $b;
$answer2 = $a - $b;
$answer3 = $a * $b;
$answer4 = $a / $b;
$answer5 = $a % $c;

echo $answer1;
echo "<br />";
echo $answer2;
echo "<br />";
echo $answer3;
echo "<br />";
echo $answer4;
echo "<br />";
echo $answer5;


// ー【代入演算子と複合演算子】ーーーーーーーーーーーーー

$a = 15;
$b = 3;
$c = 10;
$d = 5;

$a = $b;
$c += $d;

echo $a;
echo "<br />";
echo $c;
echo "<br />";


// ー【比較演算子】ーーーーーーーーーーーーーーーーーーー

$a = 20;
$b = 5;

echo ($a > $b);
echo "<br />";


// ー【論理演算子】ーーーーーーーーーーーーーーーーーーー

$a = 20;
$b = 5;

echo ($a > 10 && $a < 30);
echo "<br />";


// ー【加算子と減算子】ーーーーーーーーーーーーーーーーー

$a = $b = 10;
$c = $d = 5;

echo ++$a;
echo "<br />";
echo $b++;
echo "<br />";
echo --$c;
echo "<br />";
echo $d--;

