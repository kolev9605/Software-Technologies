<?php

printRow([1,1,1,1,1]);
printRow([1,0,0,0,0]);
printRow([1,0,0,0,0]);
printRow([1,0,0,0,0]);
printRow([1,1,1,1,1]);
printRow([0,0,0,0,1]);
printRow([0,0,0,0,1]);
printRow([0,0,0,0,1]);
printRow([1,1,1,1,1]);

function printRow($array)
{
    for ($i = 0; $i < 5; $i++) {
        if($array[$i] == 1) {
            echo "<button style='background-color: blue'>1</button>";
        } else {
            echo "<button>0</button>";
        }
    }

    echo "<br>";
}

?>