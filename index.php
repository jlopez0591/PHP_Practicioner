<?php

$person = [
    'age' => 31,
    'hair' => "Black",
    'career' => 'Web Developer'
];

$person['name'] = "Jose";

unset($person['age']);

die(var_dump($person));

require 'index.view.php';