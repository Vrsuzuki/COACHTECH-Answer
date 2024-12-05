<?php
// ー【条件分岐】ーーーーーーーーーーーーーーーーーーーーー
// ー【if 文】ーーーーーーーーーーーーーーーーーーーーーー

$a = 5;

if ($a === 5) {
echo "\$aは5です";
}


// ー【Q】ーーーーーーーーーーーーーーーーーーーーーーーー

$a = 7;

if ($a === 5) {
echo "\$aは5です";
}else{
echo "\$aは5以外です";
}


// ー【Q】ーーーーーーーーーーーーーーーーーーーーーーーー

$a = 7;

if ($a === 5) {
echo "\$aは5です";
}elseif ($a === 7){
echo "\$aは7です";
}else{
echo "\$aは5と7以外です";
}


// ー【switch 文】ーーーーーーーーーーーーーーーーーーーー

$people = "Saburo";

switch ($people) {
case "Taro":
echo "太郎です";
break;
case "Jiro":
echo "次郎です";
break;
case "Saburo":
echo "三郎です";
break;
}


// ー【三項演算子】ーーーーーーーーーーーーーーーーーーーー

$a = 7;
$b = ($a > 5) ? "TRUE" : "FALSE";
echo $b;



