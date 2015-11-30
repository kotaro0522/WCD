<?php
$title = $_POST["title"];
$author = $_POST["author"];
$base = "https://app.rakuten.co.jp/services/api/BooksBook/Search/20130522";
$applicationId = "fb523d6520f632654bbd1229fecd076e";

$URL = $base ."?applicationId=" .$applicationId;
if($title){
	$URL = $URL ."&title=" .$title;
}
if($author){
	$URL = $URL ."&author=" .$author;
}

//print $URL;

$json = file_get_contents($URL);
$res = json_decode($json,true);
?>
<table>
	<tr>
    	<td>画像</td>
        <td>タイトル</td>
        <td>著者</td>
    </tr>
<?php
foreach($res["Items"] as $Item){
?>
	<tr>
    	<td><img src="<?php print $Item["Item"]["smallImageUrl"]; ?>"></td>
        <td><a href="<?php print $Item["Item"]["itemUrl"]; ?>"><?php print $Item["Item"]["title"]; ?></a></td>
        <td><?php print $Item["Item"]["author"]; ?></td>
    </tr>
<?php
}
?>
</table>