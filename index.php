<?php

require 'vendor/autoload.php';
require 'src/GeometryClass.php';

use Geometry\Vector;
use Geometry\Point;

$t1 = new Point(2, 2);
$v1 = new Vector(4 , 3);
$v2 = new Vector(0, 0);
$v3 = new Vector(-6, 8);

echo $v1->length(), PHP_EOL;
echo $v2->length(), PHP_EOL;
echo $v3->length(), PHP_EOL;
if ($v1->is_perpendicular($v3))
    echo "True \n";
else
    echo "False \n";
$t1->move(4, 3);
echo $t1;