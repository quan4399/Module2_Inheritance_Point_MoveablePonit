<?php
include_once "Point.php";
include_once "MoveablePoint.php";

$point =new Point(1,2);
echo $point->toString()."\n";

$movePoint = new MoveablePoint(1,2,3,4);
echo  $movePoint->toString();
