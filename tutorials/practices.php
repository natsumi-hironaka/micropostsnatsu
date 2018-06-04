<?php
    $a = "3.14";
    $b = '15';
    echo floor ( $a * $b);
?>
    
<?php
    $a = "3.14";
    $b = '15';
    print ceil( $a * $b);
?>

<?php
    $a = 17;
    if ($a % 2 == 0) {
        print 偶数;}
    else {
        print 奇数;
    }
    
?>

<?php
    $a = 4;
    $b = 5;
    $c = $a + $b;
    print ($a."+".$b."=".$c);
?>

<?php
    $array = [0, 10, 11, 9990, 32, 1, 2, 1313, 90, 3];
    echo max ($array);
?>

<?php
     $array = [0, 10, 11, 9990, 32, 1, 2, 1313, 90, 3];
     function get_max ($array) {
     return $array;
     echo $array;
     }
?>
    