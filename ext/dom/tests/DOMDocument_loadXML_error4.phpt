--TEST--
Test DOMDocument::load() detects not-well formed XML 
--DESCRIPTION--
This test verifies the method detects and opening and ending tag mismatch 
--CREDITS--
Antonio Diaz Ruiz <dejalatele@gmail.com>
--INI--
assert.bail=true
--SKIPIF--
<?php include('skipif.inc'); ?>
--FILE--
<?php
$xml_file = dirname(__FILE__) . "/not_well_formed4.xml";

$dom = new DOMDocument();
$doc = $dom->load(dirname(__FILE__) . "/not_well_formed4.xml");
assert('$doc === false');
?>
--EXPECTF--
Warning: DOMDocument::load%r(XML){0,1}%r(): Unsupported version '3.1' %s
