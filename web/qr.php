<?php
header("Content-type: image/png");
$str=stripslashes($_GET['str']);
if(preg_match('/^[0-9A-Za-z]{1,50}$/',$str)) {
	passthru("qrencode '$str' -o -");
}
?>
