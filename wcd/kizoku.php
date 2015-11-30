<!doctype html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>貴族の食卓</title>
<!--[if lt IE 9]>
<script type="text/javascript" src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-70707698-2', 'auto');
  ga('send', 'pageview');

</script>
<link href="kizoku.css" rel="stylesheet" type="text/css">
</head>

<body>

<article id="title">
<h1>貴族の食卓</h1>
</article>

<article>
<h1>about</h1>
<p>クッ○パッドは非常に優れたレシピサイトであるが、果たして(独身)貴族の食事として相応しいかというと答えはNOだ。
貴族の食事として求められるものは圧倒的な手軽さとコストパフォーマンスである。
また、貴族は自宅よりも外で食事を楽しむことが多く、何日も外食を続けてしまい結果買っていた食材を駄目にしてしまうということは日常茶飯事である。
そこでこのサイトでは上記3つの点で優れている食材、レシピ、そして外食の情報を提供することを目的としている。
貴族の食生活に幸あらんことを。</p>
</article>
 
 <article>
 <h1>food</h1>
 <!--
 https://app.rakuten.co.jp/services/api/Recipe/CategoryList/20121121?applicationId=1029509196922718397&categoryType=small
 もやし https://app.rakuten.co.jp/services/api/Recipe/CategoryRanking/20121121?applicationId=1029509196922718397&categoryId=12-99-318
 きゅうり https://app.rakuten.co.jp/services/api/Recipe/CategoryRanking/20121121?applicationId=1029509196922718397&categoryId=12-450-1521
 きゃべつ https://app.rakuten.co.jp/services/api/Recipe/CategoryRanking/20121121?applicationId=1029509196922718397&categoryId=12-98-1
 たまねぎ https://app.rakuten.co.jp/services/api/Recipe/CategoryRanking/20121121?applicationId=1029509196922718397&categoryId=12-96-7
 豆腐 https://app.rakuten.co.jp/services/api/Recipe/CategoryRanking/20121121?applicationId=1029509196922718397&categoryId=35-471-1614
 納豆 https://app.rakuten.co.jp/services/api/Recipe/CategoryRanking/20121121?applicationId=1029509196922718397&categoryId=35-468-1611
 うどん https://app.rakuten.co.jp/services/api/Recipe/CategoryRanking/20121121?applicationId=1029509196922718397&categoryId=16-152
 やきそば https://app.rakuten.co.jp/services/api/Recipe/CategoryRanking/20121121?applicationId=1029509196922718397&categoryId=16-155
 うまかっちゃん
 胸肉 https://app.rakuten.co.jp/services/api/Recipe/CategoryRanking/20121121?applicationId=1029509196922718397&categoryId=10-277-1119
 胸肉(冷凍) https://app.rakuten.co.jp/services/api/Recipe/CategoryRanking/20121121?applicationId=1029509196922718397&categoryId=10-277-1119
 -->
 <!--<form action="moyashi.php" method="post" enctype="application/x-www-form-urlencoded">
<input type=hidden name=x1 value=v1>
</form>-->

<!-- フォーム部分 -->
<form action="recipe.php" method="post" enctype="application/x-www-form-urlencoded">
<input type="hidden" name="category" value="12-99-318"> 
</form>
<form action="recipe.php" method="post" enctype="application/x-www-form-urlencoded">
<input type="hidden" name="category" value="12-450-1521"> 
</form>
<form action="recipe.php" method="post" enctype="application/x-www-form-urlencoded">
<input type="hidden" name="category" value="12-98-1"> 
</form>
<form action="recipe.php" method="post" enctype="application/x-www-form-urlencoded">
<input type="hidden" name="category" value="12-96-7"> 
</form>
<form action="recipe.php" method="post" enctype="application/x-www-form-urlencoded">
<input type="hidden" name="category" value="35-471-1614"> 
</form>
<form action="recipe.php" method="post" enctype="application/x-www-form-urlencoded">
<input type="hidden" name="category" value="35-468-1611"> 
</form>
<!-- ここまでフォーム部分 -->

 <table>
  <tr>
    <td><a href="javascript:document.forms[0].submit();">もやし</a></td>
    <td>安い！</td>
    <td>押しも押されもせぬ野菜界の王者。うまかっちゃんと組み合わせることでお手軽にらーめん大気分が味わえる。</td>
  </tr>
  <tr>
    <td><a href="javascript:document.forms[1].submit();">きゅうり</a></td>
    <td>うまい！</td>
    <td>ごたくはいらない。マヨネーズをつけてそのままかじればいい。</td>
  </tr>
  <tr>
    <td><a href="javascript:document.forms[2].submit();">きゃべつ</a></td>
    <td>安い！</td>
    <td>切っちゃ駄目。外側から一枚ずつ手でちぎっていくとかなり長持ちする。</td>
  </tr>
  <tr>
    <td><a href="javascript:document.forms[3].submit();">たまねぎ</a></td>
    <td>うまい！</td>
    <td>かなり長期保存可能。ただし放置しすぎるといつの間にかネギが生えている。</td>
  </tr>
  <tr>
    <td><a href="javascript:document.forms[4].submit();">豆腐</a></td>
    <td>安い！</td>
    <td>一パックまるごとめんつゆぶっかけて食べよう！かなりお腹いっぱいになる。</td>
  </tr>
  <tr>
    <td><a href="javascript:document.forms[5].submit();">納豆</a></td>
    <td>うまい！</td>
    <td>賞"味"期限はあっても消"費"期限はない。多少乾燥してくるけど大丈夫。</td>
  </tr>
</table>
 </article>
 
 <article>
 <h1>restraunt</h1>
 <!--
 らーめん屋と牛丼屋(吉野家、すき家、なか卯、松屋)
 -->
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

$sql = "SELECT * FROM restraunt"; //実行するSQLの設定
$result = $mysqli->query($sql); //sqlの実行結果は$resultに入る
if ($result ==FALSE) { //実行が成功したかをチェック
  //失敗した場合
  print "SQLを実行する際にエラーが発生しました";
  die($mysqli-> error); //エラーメッセージを出力して終了
} else {
    // 連想配列を取得
    echo "<table>";
	echo "<tr>";
    echo "<td>店名</td><td>並盛り価格</td><td>おすすめ度</td><td>地図</td>";
	echo "</tr>";
    while ($row = $result->fetch_assoc()) {
		echo "<tr>";
        echo "<td>" . $row["name"] . "</td>" . "<td>(" . $row["price"] . "円)</td><td>"  . $row["rank"] . "</td>";
		?>
        <td><a href="<?php echo $row["url"]; ?>">地図</a></td>
        <?php
		echo "</tr>";
    }
	echo "</table>";
    // 結果セットを閉じる
    $result->close();
}

// データベース接続を閉じる
$mysqli->close();
?>
 </article>
 
<svg version="1.1" xmlns="http://www.w3.org/2000/svg">
 <filter id="blur">
   <fegaussianblur stdDeviation="6" />
   </filter>
</svg>

</body>
</html>
