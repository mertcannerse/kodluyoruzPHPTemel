<?php
error_reporting(E_ALL);

if ($_SERVER["REQUEST_METHOD"] === "POST") {
  if (empty($_POST["num"])) {
    echo "Lütfen bir numara giriniz.";
  } else {
    echo "Girilen sayı: " . $_POST["num"] . "<br>";
    $result = checkMod($_POST["num"]);
    if ($result !== 0) {
      echo "Girdiğiniz sayı 3'e bölünemez. Bölünebilecek ilk sayı: " .
        ($_POST["num"] + (3 - $result)) .
        "'dır";
    }
  }
}

function checkMod($number)
{
  if ($number % 3 == 0) {
    return 0;
  } else {
    return $number % 3;
  }
}

?>