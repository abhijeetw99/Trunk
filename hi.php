<?php
$a;
echo 'empty=';
echo empty($a);
echo '--------<br>';
if( true == isset($a) && false == empty($a) ) {
	echo 'defined';
} else {
	echo 'not defined';
}
?>