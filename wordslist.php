<?php
    // MySQLサーバ接続に必要な値を変数に代入
    $username = 'root';
    $password = '';

    // PDO のインスタンスを生成して、MySQLサーバに接続
    $database = new PDO('mysql:host=localhost;dbname=wordslist;charset=UTF8;', $username, $password);

    // フォームから書籍タイトルが送信されていればデータベースに保存する
    if ($_POST['words']) {
        // 実行するSQLを作成
        $sql = 'INSERT INTO words (words) VALUES(:words)';
        // ユーザ入力に依存するSQLを実行するので、セキュリティ対策をする
        $statement = $database->prepare($sql);
        // ユーザ入力データ($_POST['book_title'])をVALUES(?)の?の部分に代入する
        $statement->bindParam(':words', $_POST['words']);
        // SQL文を実行する
        $statement->execute();
        // ステートメントを破棄する
        $statement = null;
    }

    // 実行するSQLを作成
    $sql = 'SELECT * FROM words ORDER BY created_at DESC';
    // SQL を実行する直前のステートメントを取得する
    $statement = $database->query($sql);
    // ステートメントから SQL を実行し、レコードを取得する
    $records = $statement->fetchAll();

    // ステートメントを破棄する
    $statement = null;
    // MySQLを使った処理が終わると、接続は不要なので切断する
    $database = null;
?>
<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>

        <h1><a href="wordslist.php">Wordslist</a></h1>
        <h2>WORDS LIST</h2>
        <form action="wordslist.php" method="post">
            <input type="text" name="words" placeholder="Type words" required>
            <input type="submit" name="submit_add_words" value="Register">
        </form>
        <h2>REGISTEREDWORDS</h2>
        <ul>
<?php
            if ($records) {
                foreach ($records as $record) {
                    $words = $record['words'];
?>
                    <li><?php print htmlspecialchars($words, ENT_QUOTES, 'UTF-8'); ?></li>
<?php
                }
            }
?>
        </ul>
    </body>
</html>