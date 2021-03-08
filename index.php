<?php  
  include "FindSubset.php";

  $set = [1,2,3];
  // $set = ["SAYA","SUKA","DIA"];
  $tes = getSubsets2($set);

  echo "ARRAY: ".implode(" ", $set)."<br><br>";
  echo "ALL SUBSET:";
  for ($i = 0; $i < count($tes); $i++) {
    echo "<pre>";
    echo implode(",", $tes[$i]);
    echo "</pre>";
  }
?>