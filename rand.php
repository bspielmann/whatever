<?php

srand(time());

echo mt_rand(1,10) . PHP_EOL;
echo mt_rand(1,10) . PHP_EOL;


srand(time() + 1000);
echo mt_rand(1,10) . PHP_EOL;
echo mt_rand(1,10) . PHP_EOL;
