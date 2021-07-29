<?php
session_start()
          
?>

<!DOCTYPE html>
<html>

<body>

	<?php



require('Districts.php');
$Wakiso_masabu_trees=8984;
$Kabale_masabu_trees=89;

$masabu_total=$Wakiso_masabu_trees+$Kabale_masabu_trees;

echo "the total sum of masabu trees in wakiso and kabale is: " .$masabu_total, "<br>";

$_SESSION['masabu_total'] = $masabu_total;
echo "session variable is set to:" .$masabu_total;

	?>

</body>
</html>