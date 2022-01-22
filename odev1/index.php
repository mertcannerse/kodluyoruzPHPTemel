<?php
function ucgen($n)
{
  for ($i = 1; $i < $n + 1; $i++) {
    for ($j = 0; $j < $i; $j++) {
      echo "O ";
    }
    echo "<br>";
  }
}
$n = 15;
ucgen(15);
?>