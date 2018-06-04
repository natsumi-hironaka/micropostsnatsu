<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset = "UTF-8">
        <title>タイトル</title>
    <body>
        <form action="kara-age-2.php" method="POST">
        <input type ="text" name="namae1"><br>
        <input type ="text" name="namae2"><br>
        <input type ="text" name="namae3"><br>
        <input type ="text" name="namae4"><br>
        <input type ="text" name="namae5"><br>
        <input type ="submit" value="SUBMIT">
        </form>
        <p><?php echo $_POST["namae1"]?>***You are assigned to a Seat A!</p>
        <p><?php echo $_POST["namae2"]?>***You are assigned to a Seat B!</p>
        <p><?php echo $_POST["namae3"]?>***You are assigned to a Seat C!</p>
        <p><?php echo $_POST["namae4"]?>***You are assigned to a Seat D!</p>
        <p><?php echo $_POST["namae5"]?>***You are assigned to a Seat E!</p>
    </body>
    </head>
</html>