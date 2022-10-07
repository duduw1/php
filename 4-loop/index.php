<?php 

$i = 0;
$q=10;
echo '<br>While: <br>';
while ($i<=10){
    if( $i %2 == 1)
    echo $i, ' é impa<br>';
    else {
        echo $i, ' é par<br>';   
    }
    $i++;
}

echo '<br>Do While: <br>';
do{
    if( $q %2 == 1)
    echo $q, ' é impa<br>';
    else {
        echo $q, ' é par<br>';   
    }
    $q--;
}while ($q>=0);

echo '<br>For: <br>';
for ( $b=0; $b<10; $b++){
    echo $b;
}

echo '<br>Foreach<br>';  // vai percorrer um array listando seus dados
$n = [0,1,2,3,4,5,6,7,8,9];

foreach ($n as $m){
    echo $m;
}
