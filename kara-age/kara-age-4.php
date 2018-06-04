<?php
    $members = array('Shiki', 'Aya', 'Tomo', 'Yusuke', 'Natsu');
    $keys = array_rand($members, 5);
    shuffle($keys);
    foreach ($keys as $key) {
    echo $members[$key];
    }
?>
