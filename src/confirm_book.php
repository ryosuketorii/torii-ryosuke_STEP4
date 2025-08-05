<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="style_confirm.css">
</head>
<body>
<h1>申請内容の確認</h1>
<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST["username"];
    $booktitle = $_POST["booktitle"];
    $bookcode = $_POST["bookcode"];
    $period = $_POST["period"];
    $note = $_POST["note"];

if (!preg_match("/^[あ-んア-ヶー一-龠a-zA-Z\s]+$/u", $username)) {
echo "<p>利用者名は日本語または英字のみで入力ください。</p>";
} elseif (!preg_match("/^[a-zA-Z0-9]{1,10}$/",$bookcode)){
    echo "<p>図書コードは英数字のみで10文字以内にしてください。</p>";
} elseif (!is_numeric($period)||$period<1||$period>30){
    echo "<p>貸出期間は１日～３０日の間で入力してください。</p>";
}else{
    echo "<p>利用者名:" .htmlspecialchars($username, ENT_QUOTES, 'UTF-8')."</p>";
    echo "<p>書籍タイトル:" .htmlspecialchars($booktitle, ENT_QUOTES, 'UTF-8')."</p>";
    echo "<p>図書コード: {$bookcode}</p>";
    echo "<p>貸出期間: {$period}日</p>";
    echo "<p>備考:" . nl2br(htmlspecialchars($note, ENT_QUOTES,'UTF-8')) . "</p>";
}
}else {
    echo "<p>データが送信されていません。</p>";
}
?>
</body>
</html>