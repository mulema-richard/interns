<?php
require('Districts.php');
$Wakiso_trees=[569,80003,7673643,8984];
$Kabale_trees=[69,803,7363,89];
          
$Wakiso_sum=0;
for($i=0,$n=count($Wakiso_trees);$i<$n;$i++){

	$Wakiso_sum+=$Wakiso_trees[$i];
	}
	echo'sum of trees in Wakiso district is:' .$Wakiso_sum, '<br/>';

	$Kabale_sum=0;
for($i=0,$n=count($Kabale_trees);$i<$n;$i++){

	$Kabale_sum+=$Kabale_trees[$i];
	}
	echo'sum of trees in Kabale district is:' .$Kabale_sum, '<br/>';


  $total_sum = $Wakiso_sum + $Kabale_sum;

  echo 'the total sum of trees in Wakiso and Kabale districts is: '.$total_sum;
  /*$wakiso = array(569,80003,7673643,8984);
  $kabale = array(69,803,7363,89);

  echo 'the sum of values of $wakiso is: ' .array_sum($wakiso);
  echo"<br>";

  echo 'the sum of values of $kabale is: ' .array_sum($kabale);

   $wakiso_sum = $wakiso
   $kabale_sum = $kabale;

   $total_sum = $wakiso_sum + $kabale_sum;

  echo 'the total sum of trees in Wakiso and Kabale districts is: '.$total_sum;*/

  setcookie($name= "total_sum", $value="7771523",time() +(86400*30),"/");
?>