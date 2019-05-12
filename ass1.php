<?php
$arrGiven = array(10,20,10);
$arrCounts = array();

for($i=0;$i<count($arrGiven);$i++) {
	if( false == isset($arrCounts[$arrGiven[$i]]) ) {
		$arrCounts[$arrGiven[$i]] = 1;
	} else {
		$arrCounts[$arrGiven[$i]]++;
	}
}
echo '<pre>';
print_r($arrCounts);
?>