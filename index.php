<?php
#Exercise1
    // Affichage des Temperatures moyennes
    $month_temp = "78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 81, 76, 73,
    68, 72, 73, 75, 65, 74, 63, 67, 65, 64, 68, 73, 75, 79, 73";

    $temptab = explode(",", $month_temp);
    $petitetemp = $temptab[0];
    $grandetemp = $temptab[0];

    foreach ($temptab as $value) {
        $petitetemp = $value < $petitetemp ? $value : $petitetemp;
        $grandetemp = $value > $grandetemp ? $value : $grandetemp;
    }

    // Temperatures moyennes
    $moyenTemp = (($petitetemp+$grandetemp) / 2);

    // filtre du tableau
    sort($temptab);

    // 5 petite temperatures
    $petitetempcinq = array_splice($temptab, 0, 5);
    var_dump($petitetempcinq);

    // 5 grandes temperatures
    $grandetempcinq  = array_splice($temptab, 20, 5);
    var_dump($grandetempcinq);
    
?>

<?php
#Exercise2
    $str = 'Techstudy - the Debugging Solution website';
    $replace= str_replace("the", "best", $str);

    echo $replace;

?>

<?php
#Exercise3
    $my_array = array("bmw","jeep","dastun","ferrari","Honda");
    $newarray = array_map('strlen',$my_array);
    echo "la taille de chaine  la plus courte est:". min($newarray);
   echo "La taille de chaine la plus longue est :".max($newarray);    

?>
