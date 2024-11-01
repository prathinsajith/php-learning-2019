<?php



$fruits = array("lemon", "orange", "banana", "apple");
sort($fruits);
foreach ($fruits as $key => $val) {
    echo "fruits[" . $key . "] = " . $val . "\n";
}
?>
<br/>
<?php
rsort($fruits);
foreach ($fruits as $key => $val) {
    echo "fruits[" . $key . "] = " . $val . "\n";
}
?>
<br/>
<?php

$people = array(
    
        'id' => 12345,
        'first_name' => 'Joe',
        'surname' => 'Bloggs',
        'age' => 23,
        'sex' => 'm'
    );
asort($people);
foreach ($people as $key => $val) {
    echo "people[" . $key . "] = " . $val . "\n";
}
?>
<br/>
<?php
arsort($people);
foreach ($people as $key => $val) {
    echo "people[" . $key . "] = " . $val . "\n";
}
?>
<br/>
<?php
ksort($people);
foreach ($people as $key => $val) {
    echo "people[" . $key . "] = " . $val . "\n";
}
?>
<br/>
<?php
krsort($people);
foreach ($people as $key => $val) {
    echo "people[" . $key . "] = " . $val . "\n";
}
?>