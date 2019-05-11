<?php
$name = "Try Satria Amanatullah";
$address = "Jl Teluk air RT01/RW01";
$hobbies = array("jalan2", "makan", "musik");
$is_married = false;
$school = [
    'highschool' => 'SMAN 1 Karimun',
    'university' => 'amikom'
];

$skills = [
    'name' => ['php', 'android studio', 'html', 'css'],
    'score' => ['50', '80', '90', '100'],
];

function dataBio ($name, $address, $hobbies, $is_married, $school, $skills){
    $biodata['name'] = $name;
    $biodata['address'] = $address;
    $biodata['hobbies'] = $hobbies;
    $biodata['is_married'] = $is_married;
    $biodata['school'] = $school;
    $biodata['skills'] = $skills;

    return json_encode($biodata, JSON_PRETTY_PRINT);
}

echo dataBio($name, $address, $hobbies, $is_married, $school, $skills);
?>