<?php
$i = range(1,10);

for ($i = 1; $i <= 10; $i++){

echo $i . ":" ;

if ($i%2 != 0) {
echo "Romeo, I love you." . PHP_EOL;}

if ($i%2 == 0) {
echo "Juliet, I love you." . PHP_EOL;}
}

?>
