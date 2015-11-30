<?php
//$categoryId = $_POST["category"];
$categoryId = "12-450-1521";
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