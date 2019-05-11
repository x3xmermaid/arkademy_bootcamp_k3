<?php
$dataAbjad = array(
    array('v', 'a', 'g', 'b', 'f'),
    array('s', 'j', 'z', 'f', 'w'),
    array('f', 's', 'y')
);

print_r($dataAbjad);
function sort_array($dataAbjad){
    foreach($dataAbjad as $data){
        
        $dataAbjadNew[] = max($data);
    }
    return $dataAbjadNew;
}

print_r(sort_array($dataAbjad));
?>