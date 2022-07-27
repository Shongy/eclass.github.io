<?php
//function RandomString()
//{

$length = 6;
       // function generateRandomString($length = 10) {
    $characters = 'CHRISTIANTAMPUSIT99';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
//    return $randomString;
//}
//}
//RandomString();
echo "CLS".$randomString; ?>