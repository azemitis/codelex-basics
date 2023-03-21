<?php
/**
 Foreach loop that sets $fruit
 */

$fruits = ['orange', 'apple', 'banana'];

$param = '';
foreach ($fruits as $fruit) {
    $param .= $fruit.' ';
}

return $param;
