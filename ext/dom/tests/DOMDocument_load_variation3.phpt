--TEST--
Test DOMDocument::load() with LIBXML_DTDVALID and LIBXML_NOERROR options
--DESCRIPTION--
This test vrifies the right behaviour of the LIBXML_NOERROR constant
which avoids the display of the warning message
--CREDITS--
Antonio Diaz Ruiz <dejalatele@gmail.com>
--INI--
assert.bail=true
--SKIPIF--
<?php include('skipif.inc'); ?>
--ENV--
XML_FILE=/wrong_book_with_dtd.xml
ASSERT_RESULT=1
LOAD_OPTIONS=LIBXML_DTDVALID | LIBXML_NOERROR
--FILE_EXTERNAL--
domdocumentload_test_method.php
--EXPECT--
