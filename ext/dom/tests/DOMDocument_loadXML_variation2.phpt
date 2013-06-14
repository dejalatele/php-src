--TEST--
Test DOMDocument::load() with LIBXML_DTDVALID option
--DESCRIPTION--
This test vrifies the right behaviour of the LIBXML_DTDLOAD constant
--CREDITS--
Antonio Diaz Ruiz <dejalatele@gmail.com>
--INI--
assert.bail=true
--SKIPIF--
<?php include('skipif.inc'); ?>
--ENV--
XML_FILE=/wrong_book_with_dtd.xml
ASSERT_RESULT=1
LOAD_OPTIONS=LIBXML_DTDVALID
--FILE_EXTERNAL--
domdocumentloadXML_test_method.php
--EXPECTF--
Warning: DOMDocument::load%r(XML){0,1}%r(): Element book content does not follow the DTD, expecting (title , author), got (title author author ) %s
