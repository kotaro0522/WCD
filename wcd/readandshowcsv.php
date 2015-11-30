<?PHP
$file = "file.txt";

if ( !($fp = fopen ("$file", "r"))) {
  　　　die("ファイルが開けません。");
 }

while ( $ret_csv = fgetcsv( $fp, 256 )) {
	for($i = 0; $i < count( $ret_csv ); ++$i ) {
		if($i == 0) {
			echo("1st=".$ret_csv[$i]);
			echo("<br />");
		}
		else if($i == 1) {
			echo("2nd=".$ret_csv[$i]);
			echo("<br />");
		}
		else if($i == 2) {
			echo("3rd=".$ret_csv[$i]);
			echo("<br />");
		}
		else {
			echo(($i+1)."th=".$ret_csv[$i]);
			echo("<br />");
		}
	} 
 }

fclose ($fp);

echo "End of File Read";

?>