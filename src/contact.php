<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>データ移動サンプル</title>
</head>
<body>
    <h1>名前を入力してください</h1>
    <form action="display.php" method="post">
        <label for="name">名前:</label>
        <input type="text" id="name" name="name" required>
        <button type="submit">送信</button>
</form>
</body>
</html>