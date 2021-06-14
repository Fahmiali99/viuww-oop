<?php

    $almari = array(
            array("arr"=>"paman", "umur" => 35, "psg" => "35/2"),
            array("arr"=>"bibi", "umur" => 37, "psg" => "37/2"),
            array("arr"=>"sepupu", "umur" => 23, "psg" => "23/2"),
    );

    foreach($almari as $key){
        echo "saya punya " . $key["arr"] .', '. $key["arr"] . " yang berumur " . $key["umur"].
            " dan pasangan " . $key["arr"] . " umurnya adalah "  . $key["psg"]."<br>";
    }
?>