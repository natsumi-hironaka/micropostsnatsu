<!DOCTYPE html>
<html lang="ja">
    
    <head>
        <meta charset = "UTF-8">
        <title>タイトル</title>
    <body>
    <p>New seating will be...</p>
    
    <?php
    $array = ['Shiki', 'Tomo', 'Aya', 'Yusuke', 'Natsu'];
    shuffle($array);
    $count = count($array);         
    for ($i = 0; $i < $count; $i++) {
      print 'seat' . $i  . ':' . ''.  $array[$i] . PHP_EOL;
    }
    ?>
    
    </body>
    
</html>