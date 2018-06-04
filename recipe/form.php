<!DOCTYPE html>
<html lang="ja">
    
<head>
<meta charset="UTF-8">
<title>form</title>
</head>

<body>
    レシピ特集</br>
    <form action="180601.php" method="POST">
    料理名
    <input type="text" name="recipe_name" required></br>
    
    カテゴリ
    <select name="category">
    <option value="">選択してください</<&#x2325;>
    <option value="1">和食</option>
    <option value="2">中華</option>
    <option value="3">洋食</option>
    </select></br>
    
    難易度
    <input type="radio" name="difficulty" value="1">簡単
    <input type="radio" name="difficulty" value="2" checked>普通
    <input type="radio" name="difficulty" value="3">難しい</br>
    
    作り方
    <textarea name="howto" cols="40" rows="4" maxlength="150"></textarea></br>
    
    <input type="submit" value="送信">
    </form>
    
    <ul>
        
    
</body>

</html>
    