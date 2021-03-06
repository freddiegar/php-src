--TEST--
Test if bindtextdomain() returns false if path does not exist.
--SKIPIF--
<?php
if (!extension_loaded("gettext")) {
    die("skip gettext extension is not loaded.\n");
}
--FILE--
<?php
chdir(__DIR__);
var_dump(bindtextdomain('example.org', 'foobar'));
?>
--EXPECT--
bool(false)
--CREDITS--
Till Klampaeckel, till@php.net
PHP Testfest Berlin 2009-05-09
