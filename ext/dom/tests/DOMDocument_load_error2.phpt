--TEST--
Test DOMDocument::load() detects not-well formed XML 
--DESCRIPTION--
This test verifies the method detects attributes values not closed between " or '
--CREDITS--
Antonio Diaz Ruiz <dejalatele@gmail.com>
--INI--
assert.bail=true
--SKIPIF--
<?php include('skipif.inc'); ?>
--ENV--
XML_FILE=/not_well_formed2.xml
ASSERT_RESULT=0
LOAD_OPTIONS=0
--FILE_EXTERNAL--
domdocumentload_test_method.php
--EXPECTF--
Warning: DOMDocument::load%r(XML){0,1}%r(): AttValue: " or ' expected %s

Warning: DOMDocument::load%r(XML){0,1}%r(): attributes construct error %s

Warning: DOMDocument::load%r(XML){0,1}%r(): Couldn't find end of Start Tag book %s

Warning: DOMDocument::load%r(XML){0,1}%r(): Opening and ending tag mismatch: books %s

Warning: DOMDocument::load%r(XML){0,1}%r(): Extra content at the end of the document %s
