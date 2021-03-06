<!doctype html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>課題1-2</title>
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

$sql = "SELECT name, age, bloodtype FROM person"; //実行するSQLの設定
$result = $mysqli->query($sql); //sqlの実行結果は$resultに入る
if ($result ==FALSE) { //実行が成功したかをチェック
  //失敗した場合
  print "SQLを実行する際にエラーが発生しました";
  die($mysqli-> error); //エラーメッセージを出力して終了
} else {
    // 連想配列を取得
    echo "<table>";
    while ($row = $result->fetch_assoc()) {
		echo "<tr>";
        echo "<td>" . $row["name"] . "</td>" . "<td>(" . $row["age"] . ")</td><td>"  . $row["bloodtype"] . "</td>";
		echo "</tr>";
    }
	echo "</table>";
    // 結果セットを閉じる
    $result->close();
}

// データベース接続を閉じる
$mysqli->close();
?>
</body>
</html>