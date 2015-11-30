<!DOCTYPE html>
<html>
<HEAD>
<meta charset="utf-8">
<TITLE>Simple BBS</TITLE>
</HEAD>

<BODY>

<H3>Simple BBS</H3>

<HR width=90%>

<H5>メッセージ登録</H5>

<FORM METHOD=POST ACTION="simplebbs.php">
氏名<INPUT TYPE=TEXT NAME="my_name" SIZE=20><BR>
本文<TEXTAREA NAME="my_message" ROWS=5 COLS=50></TEXTAREA><BR><BR>
<INPUT TYPE=SUBMIT VALUE="登録"><BR>
</FORM>
<HR width=90%>
<H5>メッセージ一覧</H5>
<?php 
if (isset($_POST['my_name'])){ //値がPOSTされているかのチェック
    $my_name = $_POST['my_name'];// POSTされている場合
} else {
    $my_name = ""; //されていない場合
}
if (isset($_POST['my_message'])) {
    $my_message = $_POST['my_message'];
} else {
    $my_message = "";
}

$mysqli = new mysqli('localhost', 'w13193','13193','w13193');
if ($mysqli == FALSE) { die($mysqli->error); }

/* メッセージの登録 */
if ( $my_name != "" && $my_message != "") {
  /* データベースに登録 */

    $query = "INSERT INTO bbs(name, message) VALUES ('$my_name', '$my_message')";
    $result = $mysqli->query($query);

  /* 登録が成功したかチェック */

    if ($mysqli->connect_error) {
        echo "登録に失敗しました<BR>";  die($mysqli->connect_error);
    }
}

/* 登録されたメッセージの表示 */
/* メッセージの検索 */

$query = "SELECT id, name, message FROM bbs ORDER BY id DESC";
$result = $mysqli->query($query);

/* 検索が成功したかをチェック */

if ($result ==FALSE) {
  echo "データベースの検索に失敗しました<BR>";
  die(mysql_error());
 }

/* 登録されたメッセージの総数 */
$whole = $result->num_rows;

if ($whole == 0) {
  echo "登録されたメッセージはありません\n";
} else{
  while($row = $result->fetch_assoc()) {
    $id      = $row["id"];
    $name    = htmlspecialchars($row["name"]);
    $message = htmlspecialchars($row["message"]);
    /* データの表示 */
    echo "<P>\n";
    echo "<FONT COLOR=red>[No. $id ]</FONT>\n";
    echo "<FONT COLOR=blue> 投稿者:$name </FONT><BR>\n";
    echo "<PRE>$message</PRE>\n";
        echo "</P>\n";
      }
}
?>

</BODY>
</HTML>