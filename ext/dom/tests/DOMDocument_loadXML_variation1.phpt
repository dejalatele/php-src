--TEST--
Test DOMDocument::load() with LIBXML_DTDLOAD option
--DESCRIPTION--
This test verifies the right behaviour of the LIBXML_DTDLOAD constant
--CREDITS--
Antonio Diaz Ruiz <dejalatele@gmail.com>
--INI--
assert.bail=true
--SKIPIF--
<?php include('skipif.inc'); ?>
--ENV--
XML_FILE=/book_with_dtd.xml
ASSERT_RESULT=1
LOAD_OPTIONS=LIBXML_DTDLOAD
--FILE_EXTERNAL--
domdocumentloadXML_test_method.php
--EXPECT--
