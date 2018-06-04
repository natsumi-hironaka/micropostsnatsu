<?php
    function sum() {
    $result = 0;
    for ($i = 9; $i <= 50; $i++) {
    $result = $result + $i;
    print $result;
    }
}
    if (sum() > 900) {
        print "900より大きい";
        
    }
    else {
        print "900より小さい";
    }

?>