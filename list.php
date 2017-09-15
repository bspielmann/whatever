<?php

$x = ['first' => ['key' => 'key', 'value' => 'value'], 'second' => ['key' => 'key2']];

list('first' => $first, 'second' => $second) = $x;
var_dump($first);
var_dump($second);

list('key' => $key, 'value' => $value) = $first;
var_dump($key);
var_dump($value);

list('key' => $key, 'value' => $value) = $second;
var_dump($key);
var_dump($value);
