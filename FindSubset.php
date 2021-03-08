<?php  
  function getSubsets2($set){
    $allsubsets = [];
    $max        = 1 << count($set);
    
    for ($k = 0; $k < $max; $k++) {
      $subset       = convertIntToSet($k, $set);
      $allsubsets[] = $subset;
    }
    return $allsubsets;
  }
  function convertIntToSet($x, $set){
    $subset = [];
    $index  = 0;
    for ($k = $x; $k > 0 ; $k >>= 1) {
      if( ($k & 1) == 1){
        $subset[] = $set[$index];
      }
      $index++;
    }
    return $subset;
  }
?>