<?php
$domOBJ = new DOMDocument();
$domOBJ->load("http://xmllll.herokuapp.com/");

$content = $domOBJ->getElementsByTagName("item");

foreach ($content as $data) {

    $name = $data->getElementsByTagName("name")->item(0)->nodeValue;
    $gende = $data->getElementsByTagName("gender")->item(0)->nodeValue;
    $age = $data->getElementsByTagName("age")->item(0)->nodeValue;
    $fav = $data->getElementsByTagName("favorite No")->item(0)->nodeValue;

    echo "
    <ul>
    <li>name: <strong>$name</strong></li>
    <li>gender: <strong>$gender</strong></li>
    <li>age: <strong>$age</strong></li>
    <li>fav: <strong>$fav</strong></li>
    </ul>";
}
