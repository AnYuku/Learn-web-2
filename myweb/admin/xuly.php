<?php
    $txtKQ = 0;
    $a = $_POST['soA'] ?? 0;
    $b = $_POST['soB'] ?? 0;
    $selector = $_POST['taskOption'];
    switch($selector){
        case "Plus":
            $txtKQ = $a + $b;
            break;
        case "Minus":
            $txtKQ = $a - $b;
            break;
        case "Multi":
            $txtKQ = $a * $b;
            break;
        case "Divide":
            $txtKQ = $a / $b;
            break;
    }
    echo $txtKQ;
?>
