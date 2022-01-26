<?php

$planets = [
  "Mercury" => 1,
  "Venus" => 2,
  "Earth" => 3,
  "Mars" => 4,
  "Jupiter" => 5,
  "Saturn" => 6,
  "Uranus" => 7,
  "Neptune" => 8,
  "" => 9,
  "" => 10,
  null => 11,
];

print_r(sizinFonksiyonunuz($planets, 2));
print_r(sizinFonksiyonunuz($planets, 3));
print_r(sizinFonksiyonunuz($planets, 2));
print_r(sizinFonksiyonunuz($planets, 4));
print_r(sizinFonksiyonunuz($planets, 5));

function sizinFonksiyonunuz($planets, $num)
{
  echo "<pre>";
  $result = array_map(function ($planet) {
    if ($planet != "") {
      return $planet;
    }
  }, $planets);
  $result = array_filter($planets, "strlen");
  $result = array_rand($planets, 3);
  var_dump($result);
}
?>