<?php
$doc = new DOMDocument();

$result = $doc->loadXML(file_get_contents(dirname(__FILE__) . getenv('XML_FILE')), $sum);

$expectedResult2 = (bool) getenv('ASSERT_RESULT');
assert('$result === $expectedResult');

if (getenv('SAVE_XML') == "1") {
    echo $doc->saveXML();
}
?>
