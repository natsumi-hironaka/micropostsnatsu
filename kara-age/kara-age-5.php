<?php

		// 100までの範囲の整数値を配列に入れる
		$random = range( 0, 5);

		// その配列をランダムに並び替える
		shuffle( $random );

		// 表示したい数分、配列の要素の値を取ってくる
		for( $i=0; $i<5; $i++ ){
			$array = ['Shiki', 'Tomo', 'Aya', 'Yusuke', 'Natsu'];
		}
?>

<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset = "UTF-8">
        <title>タイトル</title>
    </head>
    <body>
		
	<p><?php
	    print_r($array[0]."\n"). "will be assigned seatA!";
	    print_r($array[1]."\n"). "will be assigned seatB!"; 
	    print_r($array[2]."\n"). "will be assigned seatC!"; 
     print_r($array[3]."\n"). "will be assigned seatD!"; 
	    print_r($array[4]."\n"). "will be assigned seatE!"; 
	    ?>
	    </p>
    </body>
