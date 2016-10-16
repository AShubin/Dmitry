<?php
$test="admin";
echo $test;

function test (&$test) {

   $test=111;

}
echo '<br>';
test ($test);
echo $test;
