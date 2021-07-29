<html>

<body>

<?php


$Trees =array(
    "Wakiso"=>array("Muvule"=>569,"Eucaliptus"=>80003,"Musizi"=>767363,"Musabu"=>8984),

    "Kabale"=>array(
    	"Muvule"=>69,"Eucaliptus"=>803,"Musizi"=>7363,"Musabu"=>89
    ),

    "Kibale"=>array(
    	"Muvule"=>90,"Eucaliptus"=>703,"Musizi"=>763,"Musabu"=>29
    )
);
/*
echo "Trees in Wakiso:";
echo $Trees['Wakiso']['Muvule'] . "<br/>";

echo "Trees in Kabale:";
echo $Trees['Kabale']['Muvule'] ."<br/>";

echo "Trees in Kibale:";
echo $Trees['Kibale']['Muvule'] ."<br/>";*/

$keys = array_keys($Trees);
for($i =0; $i<3; $i++){
    echo $keys[$i] ."{<br>";
    foreach($Trees[$keys[$i]] as $key => $value){
        echo $key .":" . $value . "<br>";
    }

   echo "}<br>";
}



?>

</body>
</html>