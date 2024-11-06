<?php

$variable = 'Kasım YÜKSEL & Eren CENNETKUŞU';
$args1    = 20;
$args2    = '20';

if ($args1 === $args2) {
    print 'eşittir.';
} else if ($args1 > $args2) {
    print $args1 . ' : büyüktür.';
} else if ($args1 < $args2) {
    print $args1 . ' Küçüktür ' . $args;
} else {
    print 'koşul dışı...';
}
