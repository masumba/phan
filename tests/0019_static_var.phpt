--TEST--
Static var
--FILE--
<?php
function test() {
	static $var = 1+2.5;
	return $var;
}
function test2(int $arg) { }
test2(test());
--EXPECTF--
%s:7 TypeError arg#1(arg) is float but test2() takes int defined at %s:6
