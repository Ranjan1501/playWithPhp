<?php
$data = ['ranjan', 'Abhi', 'Deepak', 'ujjwal', 'Divesh', 'Chetan'];
function printData($data)
{
    $count = 0;
    $res = [];

    foreach ($data as $i) {
        $count++;
        array_push($res, [
            'id' => $count,
            'name' => $i,
        ]);
    }
    return $res;
}
$result = printData($data);
print_r($result);
var_dump($result);

?>
