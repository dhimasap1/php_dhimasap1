<?php


$jml = $_GET['jml'];
$total = 0;
$s = 0;
$tes = [];
$d = 0;

echo "<table border=1>\n";


for ($a = $jml; $a > 0; $a--) {
  $total += $a;
  for ($i = $a; $i > 0; $i--) {
    $s += $i;
    $tes = array($s);
    $jumlah = $s - 4;
  }

  // foreach ($tes as $key => $value) {
  //   $sa = $value;
  //   var_dump($tes);
  // }
  echo "<tr>\n";
  echo "<td colspan=$jml>Total = $s</td>";
  echo "</tr>\n";

  echo "<tr>\n";
  for ($b = $a; $b > 0; $b--) {
    echo "<td>$b</td>";
  }
  echo "</tr>\n";
}

echo "</table>";
