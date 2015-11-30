foreach($res->Items->Item as $item){
	$title = $item->title;
    $author = $item->author;
    $image = $item->smallImageUrl;
?>
<img src="<?php $image; ?>">
<?php
	print $title;
	print "(";
	print $author;
	print "箸)";
	print "<br>";
}
?>