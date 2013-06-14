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
--ENV--
XML_FILE=/not_well_formed5.xml
ASSERT_RESULT=0
LOAD_OPTIONS=0
--FILE_EXTERNAL--
bla.php
--EXPECTF--
Warning: DOMDocument::load()%r(XML){0,1}%r: Extra content at the end of the document %s
