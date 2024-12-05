<?php
// ー【配列のルール】ーーーーーーーーーーーーーーーーーーー

$people = array('Taro', 'Jiro', 'Saburo');

var_dump($people);


// ー【配列の番号】ーーーーーーーーーーーーーーーーーーーー

echo $people[0];


// ー【連想配列とは？】ーーーーーーーーーーーーーーーーーー

$people = array(
  'person1' => 'Taro',
  'person2'  => 'Jiro',
  'person3'  => 'Saburo'
);

var_dump($people);


// ー【多次元配列】ーーーーーーーーーーーーーーーーーーーー

$people = [
  [
    "last_name" => "山田",
    "first_name" => "太郎",
    "age" => 29,
    "gender" => "男性"
  ],
  [
    "last_name" => "鈴木",
    "first_name" => "次郎",
    "age" => 25,
    "gender" => "男性"
  ],
  [
    "last_name" => "佐藤",
    "first_name" => "花子",
    "age" => 20,
    "gender" => "女性"
  ]
];

echo $people[0]["last_name"];


// ー【foreach 文】ーーーーーーーーーーーーーーーーーーー

$people = array('Taro', 'Jiro', 'Saburo');

foreach ($people as $person) {
  echo $person;
  echo '<br />';
}


$people = array(
    'person1' => 'Taro',
    'person2'  => 'Jiro',
    'person3'  => 'Saburo'
  );
  
  foreach ($people as $person => $name) {
    print $person . "は" . $name . "です" . '<br />';
  }


// ー【Q】ーーーーーーーーーーーーーーーーーーーーーーーー

$people = [
  ['Taro', 25, 'men'],
  ['Jiro', 20, 'men'],
  ['hanako', 16, 'women']
];

foreach ($people as $person) {
  echo $person[0] . '(' . $person[1] . '歳' . $person[2] . ')'. '<br />';
}


