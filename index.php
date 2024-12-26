<?php

echo "<br><h2>using break</h2><br>";

// break .................................................

for ($i = 0; $i < 10; $i++){
    echo "Outer list- $i<br>";
    for ($y = 1; $y <= 3; $y++) {
        echo "----------Inner list- $y<br>";
        if ($i == 4 && $y == 2){
            // break; // ekahne just vitorer loop theke break korbe; jodi ami chai doita loop thekei ber hote tahole break and last loop er number ta bolte hoeb.
            break 2; // eikhae 2 hocche shesh theke uporer diker loop er number.
        }
        
    }
}

echo "<br><h2>using goto</h2><br>";


// goto ........................................ 

for ($a = 0; $a < 10; $a++){
    echo "Outer list- $a<br>";
    for ($b = 1; $b <= 3; $b++) {
        echo "----------Inner list- $b<br>";
        if ($a == 4 && $b == 2){
            goto outside; // eikhane eshei lafmere bookmark kora outside er kache chole jabe.
        }
        
    }
}
outside: // outsede bookmark kora hoyeche



$name1 = "Mamun1";
echo $name1;

goto come_here;

$name2 = "Mamun2";
echo $name2;

come_here:

$name3 = "Mamun3";
echo $name3;











?>


<?php
echo "I am first";

goto jump;
echo "I am second";

jump:
echo "I am third";

?>