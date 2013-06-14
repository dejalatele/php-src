--TEST--
Test DOMDocument::load() detects not-well formed XML 
--DESCRIPTION--
This test verifies the method detects an opening and ending tag mismatch 
--CREDITS--
Antonio Diaz Ruiz <dejalatele@gmail.com>
--INI--
assert.bail=true
--SKIPIF--
<?php include('skipif.inc'); ?>
--ENV--
XML_FILE=/not_well_formed.xml
ASSERT_RESULT=0
LOAD_OPTIONS=0
--FILE_EXTERNAL--
domdocumentloadXML_test_method.php
--EXPECTF--
Warning: DOMDocument::load%r(XML){0,1}%r(): Opening and ending tag mismatch: title line 5 and book %s

Warning: DOMDocument::load%r(XML){0,1}%r(): expected '>' %s

Warning: DOMDocument::load%r(XML){0,1}%r(): Premature end of data in tag books %s
