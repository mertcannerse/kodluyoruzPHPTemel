<?php
abstract class Sekil
{
  public $kenar;
  public $yukseklik;
  public $cevre;
  public $alan;
  abstract function cevrehesap();
  abstract function alanhesap();

  public function sonuc()
  {
    echo $this->cevre . "<br>" . $this->alan;
  }
}

class Ucgen extends Sekil
{
  public function __construct($kenar, $yukseklik)
  {
    $this->kenar = $kenar;
    $this->yukseklik = $yukseklik;
  }

  function cevrehesap()
  {
    $this->cevre = $this->kenar[0] + $this->kenar[1] + $this->kenar[2];
    return $this;
  }

  function alanhesap()
  {
    $this->alan = ($this->kenar[0] * $this->yukseklik) / 2;
    return $this;
  }
}

class Kare extends Sekil
{
  public function __construct($kenar)
  {
    $this->kenar = $kenar;
  }
  function cevrehesap()
  {
    $this->cevre =
      $this->kenar[0] + $this->kenar[1] + $this->kenar[2] + $this->kenar[3];
    return $this;
  }

  function alanhesap()
  {
    $this->alan = $this->kenar[0] * $this->kenar[1];
    return $this;
  }
}

class Dikdortgen extends Kare
{
}

echo "Dikdörtgen(çevre,alan)" . "<br>";
$dikdortgen = new Kare([1, 2, 1, 2]);
$dikdortgen
  ->cevrehesap()
  ->alanhesap()
  ->sonuc();
echo "<br>";
echo "Üçgen(çevre,alan)" . "<br>";
$ucgen = new Ucgen([1, 2, 5], 3);
$ucgen
  ->cevrehesap()
  ->alanhesap()
  ->sonuc();
echo "<br>";
echo "Kare(çevre,alan)". "<br>";
$kare = new Kare([2,2,2,2]);
$kare
  ->cevrehesap()
  ->alanhesap()
  ->sonuc();
?>
