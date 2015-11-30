<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>よんたく</title>
</head>
<body bgcolor="#FFFFFF">

<?php
$yontaku_x = $_POST["yontaku_x"];
$yontaku_y = $_POST["yontaku_y"];
?>

<img src="pointout.php?x=<?php print "$yontaku_x"?>&y=<?php print "$yontaku_y"?>">
<br>

得られた座標は次のとおりです。

<ul>
<li> x座標は <?PHP print "$yontaku_x"?>　です。
<li> y座標は <?PHP print "$yontaku_y"?>　です。
</ul>

<P>
<?php
   if ($yontaku_x > 100 && $yontaku_y < 100) 
   {
       print "×が押されました";
   }
   else if ($yontaku_x <= 100 && $yontaku_y < 100)
   {
	   print "◯が押されました";
   }
   else if ($yontaku_x > 100 && $yontaku_y >= 100){
	   print "□が押されました";
   }
   else {
	   print "△がおされました";       
   }
?>
</body>
</html>