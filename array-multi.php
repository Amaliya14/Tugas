<?php
$data = array(
    "web-prog" => array(
        "isna" => 7,
        "aldi" => 8,
        "eko" => 6
    ),
    "kalkulus" => array(
        "eko" => 9,
        "aldi" => 8,
        "isna" => 5
    )
);
echo "Nilai web-prog untuk Aldi : " 
  .$data["web-prog"]["aldi"] . "<br>";
echo "Nilai Kalkulus untuk Isna : " 
   .$data["kalkulus"]["isna"];
?>