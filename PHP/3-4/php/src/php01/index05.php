<?php
// ー【for 文】ーーーーーーーーーーーーーーーーーーーーーー

for ($i = 0; $i < 4; $i++) {
  echo $i;
}


// ー【Q】ーーーーーーーーーーーーーーーーーーーーーーーー

for ($i = 1; $i <= 5; $i++) {
  echo $i * 2 . '<br />';
}


// ー【while 文】ーーーーーーーーーーーーーーーーーーーーー

$i = 0;

while ($i < 3) {
  echo 'i = ' . $i . '<br />';
  $i += 1;
}


// ー【Q】ーーーーーーーーーーーーーーーーーーーーーーーーー

$count = 0;

while ($count < 20) {
  $count += 1;
  echo $count . '<br />';
}


// ー【breakの使い方】ーーーーーーーーーーーーーーーーーー

$i = 0;
while ($i < 10) {
  if ($i == 5) {
    break;
    // $iが5の時、ループから抜ける。
  }
  echo $i;
  $i++;
}


// ー【continueの使い方】ーーーーーーーーーーーーーーーーー

$i = 0;
while ($i < 10) {
  if ($i == 5) {
    $i++;
    continue;
    // $iが5の時、$iに1を足す処理をし、スキップをする。
  }
  echo $i;
  $i++;
}


// ー【Q】ーーーーーーーーーーーーーーーーーーーーーーーー

$count = 0;

while ($count <= 100) {
  if ($count === 20) {
    break;
  }
  if ($count % 3 === 0) {
    $count++;
    continue;
  }
  echo $count . '<br />';
  $count++;
}


// ー【do...while 文】ーーーーーーーーーーーーーーーーーー

$i = 0;
do {
  echo $i . '<br />';
  $i++;
} while ($i < 5);


// ー【Q】ーーーーーーーーーーーーーーーーーーーーーーーー

$num = 0;

do {
  echo 'num = ' . $num . '<br />';
  $num += 1;
} while ($num < 3);


// ー【応用問題】ーーーーーーーーーーーーーーーーーーーーー

$Fizz = "Fizz";
$Buzz = "Buzz";
$FizzBuzz = "FizzBuzz";

for ($i = 1; $i <= 50; $i++) {
  if ($i % 15 == 0) {
    echo $FizzBuzz;
  } else if ($i % 3 == 0) {
    echo $Fizz;
  } else if ($i % 5 == 0) {
    echo $Buzz;
  } else {
    echo $i;
  }
}


// ー【Q】ーーーーーーーーーーーーーーーーーーーーーーーー

for ($i = 1; $i < 6; $i++) {
  for ($j = 1; $j < 6; $j++) {
    echo "●";
  }
  echo "<br />";
}


