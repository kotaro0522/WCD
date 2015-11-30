<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>phpの練習</title>
</head>

<body>
<?php
$queryCountry = $_POST["country"];

$country[0] = "アメリカ";
$country[1] = "イギリス";
$country[2] = "イタリア";
$country[3] = "インド";
$country[4] = "タイ" ;
$country[5] = "ドイツ";
$country[6] = "フランス";
$country[7] = "メキシコ";
$country[8] = "韓国";
$country[9] = "中国";
$country[10] = "日本";

$money[0] = "ドル";
$money[1] = "ポンド";
$money[2] = "ユーロ";
$money[3] = "ルピー";
$money[4] = "バーツ";
$money[5] = "ユーロ";
$money[6] = "ユーロ";
$money[7] = "ペソ";
$money[8] = "ウォン";
$money[9] = "人民元";
$money[10] = "円";

print $queryCountry;
print "の通貨は";
$i = 0;
$max = 11;
$flg = true;

while($i < $max){
	if($queryCountry == $country[$i]){
		print $money[$i];
		print "です。";
		$flg = false;
	}
	else if($i == ($max - 1) && $flg){
		print "わかりません。";
	}
	$i++;
}
?>
</body>
</html>