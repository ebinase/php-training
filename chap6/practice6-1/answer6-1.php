<?php
function diamond(float $diagonal1, float $diagonal2): float {
    return $diagonal1 * $diagonal2 / 2;
}

$area = diamond(6, 9);
print "菱形の面積は{$area}です。";