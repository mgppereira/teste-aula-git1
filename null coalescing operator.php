<?php

$a = null;

print $a ?? 'b'; // b
print "\n";

print $a ?: 'b'; // b
print "\n";

print $c ?? 'a'; // a
print "\n";

print $c ?: 'a'; // Notice: Undefined variable: c in /in/apAIb on line 14
print "\n";

$b = array('a' => null);

print $b['a'] ?? 'd'; // d
print "\n";

print $b['a'] ?: 'd'; // d
print "\n";

print $b['c'] ?? 'e'; // e
print "\n";

print $b['c'] ?: 'e'; // Notice: Undefined index: c in /in/apAIb on line 33
print "\n";