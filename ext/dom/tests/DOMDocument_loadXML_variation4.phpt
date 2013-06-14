--TEST--
Test DOMDocument::load() with LIBXML_DTDATTR, LIBXML_NOCDATA, LIBXML_NOENT, LIBXML_NOBLANKS
--DESCRIPTION--
This test verifies the right behaviour of the following constants:
LIBXML_DTDATTR, LIBXML_NOCDATA, LIBXML_NOENT and LIBXML_NOBLANKS
--CREDITS--
Antonio Diaz Ruiz <dejalatele@gmail.com>
--INI--
assert.bail=true
--SKIPIF--
<?php include('skipif.inc'); ?>
--ENV--
XML_FILE=/book_with_dtd.xml
ASSERT_RESULT=1
LOAD_OPTIONS=LIBXML_DTDATTR | LIBXML_NOCDATA | LIBXML_NOENT | LIBXML_NOBLANKS
SAVE_XML=1
--FILE_EXTERNAL--
domdocumentloadXML_test_method.php
--EXPECT--
<?xml version="1.0" encoding="UTF-8"?>
<!DOCTYPE books SYSTEM "books.dtd">
<books><book><title default="default title">The Grapes of Wrath</title><author>John Steinbeck</author></book><book><title default="default title">The Pearl</title><author>John Steinbeck</author></book><book><title default="default title">entity is only for test purposes</title><author>data for test</author></book></books>
