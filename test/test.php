
<?php
$str = 'drinking giving jogging 喝 喝 passing 制图 giving 跑步 吃'; 

    ('/[a-zA-Z]+/', $str, $matches);
$english_words = $matches[0];

preg_match_all('/[\x{3040}-\x{309F}\x{30A0}-\x{30FF}\x{31F0}-\x{31FF}]+/u', $str, $matches);
$japanese_words = $matches[0];

print_r($english_words);
print_r($japanese_words);

