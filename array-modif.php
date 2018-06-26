<?php
$data = array(
    "nama" => "isna",
    "usia" => 20,
    "jomblo" => false,
    0.1 => 5
);
echo "NAMA : " . $data["nama"] . "<br>";
echo "USIA : " . $data["usia"] . "<br>";
echo "STATUS JOMBLO : " . $data["jomblo"] . "<br>";
echo "data lain : " . $data[0.1];
?>