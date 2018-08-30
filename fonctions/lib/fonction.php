<?php

function hello($p) {
    echo "Bonjour $p";
}

function carre($n) {
    $r = $n*$n;
    return $r;
}

function menu() {
    echo '<ul>
            <li><a href="exe1.php">Selection 1</li></a>
            <li><a href="exe2.php">Selection 2</li></a>
            <li><a href="exe3.php">Selection 3</li></a>
            <li><a href="exe4.php">Selection 4</li></a>
            <li><a href="exe5.php">Selection 5</li></a>
         </ul>';
}

?>