<!doctype html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>レシピ</title>
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
<link href="recipe.css" rel="stylesheet" type="text/css">
</head>

<body>

<?php
$categoryId = $_POST["category"];
//$categoryId = "12-99-318";
$base = "https://app.rakuten.co.jp/services/api/Recipe/CategoryRanking/20121121";
$applicationId = "1029509196922718397";

$URL = $base ."?applicationId=" .$applicationId;
if($categoryId){
	$URL = $URL ."&categoryId=" .$categoryId;
}

//print $URL;

$json = file_get_contents($URL);
$res = json_decode($json,true);
?>
<table>
	<tr>
    	<td>画像</td>
        <td>料理名</td>
        <td>所要時間</td>
        <td>コスト</td>
    </tr>
<?php
foreach($res["result"] as $Item){
?>
	<tr>
    	<td><img src="<?php print $Item["foodImageUrl"]; ?>"></td>
        <td><a href="<?php print $Item["recipeUrl"]; ?>"><?php print $Item["recipeTitle"]; ?></a></td>
        <td><?php print $Item["recipeIndication"]; ?></td>
        <td><?php print $Item["recipeCost"]; ?></td>
    </tr>
<?php
}
?>
</table>

</body>

</html>