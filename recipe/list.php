<?php
    $username = 'root';
    $password = '';
    
try {
    $database = new PDO('mysql:host=localhost;dbname=recipelist;charset=UTF8;', $username, $password);
    $sql = "SELECT * FROM recipes"; 
    $statement = $database->query($sql);
    $result = $statement->fetchAll(PDO::FETCH_ASSOC);
    
        echo "<table>\n";
        echo "<tr>\n";
        echo "<th>料理名</th><th>カテゴリ</th><th>難易度</th>\n";
        echo "</tr>\n";
    
    foreach ($result as $row) {
        echo "<tr>\n";
        echo "<td>" . htmlspecialchars($row['recipename']) . "</td>\n";
        echo "<td>" . htmlspecialchars($row['category']) . "</td>\n";
        echo "<td>" . htmlspecialchars($row['difficulty']) . "</td>\n";
        echo "</td>\n";
    }
    
    echo "</table>\n";
    $database = null;
}
catch (Exception $e) {
    echo "エラー発生" . htmlspecialcharts($e->getMessage(), ENT_QUOTES, 'UTF-8') . "<br>";
    die();
    
}



?>