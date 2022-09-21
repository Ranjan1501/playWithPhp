<?php
$v = 1;

echo $r = '1' === $v ? 'Yes' : 'No'; // $r is set to 'Yes'
echo "\n";
echo $r = 3 === $v ? 'Yes' : 'No'; // $r is set to 'No'
echo 'Output';
$v = 'Ranjan';
echo $r = $v ?: 'No Value';
echo "\n";
$v = '';
echo $v ?: 'No Value';
?>
