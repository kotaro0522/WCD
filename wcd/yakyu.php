<!doctype html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>PHPからの簡単なクエリの実行</title>
</head>
<body>

<?php
// musqliクラスのオブジェクトを生成（データベースに接続)
$mysqli = new mysqli('localhost', 'w13000','13000','baseball');
if ($mysqli->connect_error) { //接続状況をチェック
    //SQL実行でエラーが出ていた場合
    die('Connect Error: ' . $mysqli->connect_error);
} else {
  //接続に成功した場合
  $mysqli->set_charset("utf8"); //文字コードをutf8に設定
}

$sql = "SELECT player, team, hit FROM batter order by hit desc"; //実行するSQLの設定
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
        echo "<td>" . $row["player"] . "</td>" . "<td>(" . $row["team"] . ")</td><td>"  . $row["hit"] . "安打</td>";
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