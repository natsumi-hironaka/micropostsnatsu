<?php
    $array = ['Shiki', 'Tomo', 'Aya', 'Yusuke', 'Natsu'];
    shuffle($array);
    $count = count($array);         // assign the number of items in the array to $count
    for ($i = 0; $i < $count; $i++) {
        print $i . '番: ' . $array[$i] . PHP_EOL;
    }
?>

<!DOCTYPE html>
<html lang = "ja">
    <head>
        <meta charset = "UTF-8">
        <title>タイトル</title>
    </head>
    <body>
        <h1>SEND YOUR NAME</h1>
        <form action = "seki-gae.php" method = "post">
            <input type = "text" name="comment"><br>
            <input type = "submit" value = "send">
        </form>
    </body>
</html>