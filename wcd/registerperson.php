<!doctype html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>登録処理をするページ</title>
</head>
<body>
<?php
// musqliクラスのオブジェクトを生成（データベースに接続)
$mysqli = new mysqli('localhost', 'w13193','13193','w13193');
if ($mysqli->connect_error) { //接続状況をチェック
    //SQL実行でエラーが出ていた場合
    die('Connect Error: ' . $mysqli->connect_error);
} else {
  //接続に成功した場合
  $mysqli->set_charset("utf8"); //文字コードをutf8に設定
}

//変数の受け取り
$person_name = $_POST["person_name"];
$person_age = $_POST["person_age"];
$person_bloodtype = $_POST["person_bloodtype"];

$sql = "insert into person values ('" . $person_name . "','" . $person_age . "','" . $person_bloodtype . "')"; //実行するSQLの設定

$result = $mysqli->query($sql); //sqlの実行結果は$resultに入る
if ($result ==FALSE) { //実行が成功したかをチェック
  //失敗した場合
  print "SQLを実行する際にエラーが発生しました";
  die($mysqli-> error); //エラーメッセージを出力して終了
} else {
    echo "無事登録されました<br>";
}

// データベース接続を閉じる
$mysqli->close();
?>
<a href="http://wcd.aid.design.kyushu-u.ac.jp/~w13193/inputdatabase.html">戻る</a>
</body>
</html>