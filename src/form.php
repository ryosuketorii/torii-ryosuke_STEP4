<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h1>フォーム入力</h1>
<form action="conform.php" method="post">
    <label for="name">名前:</label>
    <input type="text" id="name" name="name"><br><br>

    <label for="age">年齢:</label>
    <input type="text" id="age" name="age"><br><br>

    <label for="phone">電話番号:</label>
    <input type="text" id="phone" name="phone"><br><br>

    <label for="email">メールアドレス:</label>
    <input type="text" id="email" name="email"><br><br>

    <label for="address">住所:</label>
    <input type="text" id="address" name="address"><br><br>
    
    <label for="question">質問:</label>
    <input type="text" id="question" name="question"><br><br>
    
    <label for="sex">性別:</label>
    <select id="sex" name="sex">
        <option value="male" selected>男性</option>
        <option value="female">女性</option>
        <option value="other">その他</option>
</select>
<br><br>
    
    <button type="submit">送信</button>
</form>
</body>
</html>