<?php
     $array = [0, 10, 11, 9990, 32, 1, 2, 1313, 90, 3];
     function get_max ($array) {
     return $array;
     echo $array;
     }
?>

<?php
    $hensuu = "some data";
    print $hensuu;
?>

<?php
    $str1 = 'テキスト';
    $str2 = "テキスト";
    var_dump($str1);
    var_dump($str2);
?>

<?php
    $t = true;
    $f = false;
    var_dump($t);
    var_dump($f);
?>

<?php
     $array = ['リンゴ', 'バナナ', 'オレンジ'];
     print_r($array);
     
     $fruits = [
        'apple' => 'リンゴ',
        'banana' => 'バナナ',
        'orange' => 'オレンジ',
    ];
    print_r($fruits);
?>
    
<?php
    $result = 1 < 2;
    var_dump($result);

    $result = 1 == 2;
    var_dump($result);
?>

<?php
    $num = 10 + "20";       // $num is 30; "20" is a string, but it can be treated as a number and so it is
    print $num;
?>

<?php
    // 10 > 5 is true, so this becomes if (true), and {...} is run
    if (10 > 5) {
        print 'ここだけ表示される' . PHP_EOL;
    }

    // 10 <= 5 is false, so this becomes if (false), and {...} is not run
    if (10 <= 5) {
        print 'ここには絶対来ない' . PHP_EOL;
    }
?>

<?php
    $number = mt_rand() % 16;

    if ($number < 5) {
        print $number . 'は5より小さい数' . PHP_EOL;
    }
    else {
        print $number . 'は5以上の数' . PHP_EOL;
    }
?>