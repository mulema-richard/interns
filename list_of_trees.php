

<?php
require('Districts.php');
$Wakiso_trees=[569,80003,7673643,8984];
$Kabale_trees=[69,803,7363,89];
$kibale_trees=[90,703,763,29];
          
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

	$kibale_sum=0;
for($i=0,$n=count($kibale_trees);$i<$n;$i++){

	$kibale_sum+=$kibale_trees[$i];
	}
	echo'sum of trees in kibale district is:' .$kibale_sum, '<br/>';



	
?>
