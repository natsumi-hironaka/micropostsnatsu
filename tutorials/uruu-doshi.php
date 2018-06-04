<?php

    $hensuu = $_POST['year'] ;
  
    if ($hensuu%400 == 0){
    echo "true" ;}
    
    elseif ($hensuu%100 == 0)
    {echo "false" ;}
    
    elseif ($hensuu%4 == 0)
    {echo "true" ;}
    
    else {echo "false" ;}
?>
    
<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>taitle</title>
    </head>
    <body>
        <form action="uruu-doshi.php" method="POST">
        <label>YEAR: <input type="text" name="year"></label>
        <input type="submit" value="submit">
        </form>
    </body>
</html>