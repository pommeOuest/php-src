--TEST--
assert() - basic - check  that assert can be switched off
--INI--
assert.active = 0
assert.warning = 0
assert.callback = f1
assert.bail = 0
assert.quiet_eval = 0
--FILE--
<?php
function f1() 
{
	echo "f1 called\n";
}

//String assert
$sa = "0 != 0";
var_dump($r2=assert($sa));
$sa = "0 == 0";
var_dump($r2=assert($sa));

//Non string assert 
var_dump($r2=assert(0));
var_dump($r2=assert(1));
--EXPECTF--
bool(true)
bool(true)
bool(true)
bool(true)
