<?php
$doc = new DOMDocument();

/*
$defined_constants = get_defined_constants(true);
$env_array = explode('|', getenv('LOAD_OPTIONS'));
$libxml_constants = array_intersect_key($defined_constants['libxml'], array_flip($env_array));

$sum = 0;
foreach($libxml_constants as $value) { 
    $sum = $sum|$value;
}
*/

$result = $doc->load(dirname(__FILE__) . getenv('XML_FILE'), $sum);

$expectedResult2 = (bool) getenv('ASSERT_RESULT');
assert('$result === $expectedResult');

if (getenv('SAVE_XML') == "1") {
    echo $doc->saveXML();
}
?>
