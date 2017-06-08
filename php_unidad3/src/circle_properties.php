<?php

$radius=4;
$diameter = $radius * 2;
$circunference = M_PI * $diameter;
$area= M_PI * pow($radius, 2);

echo "This circle has ...<br/>";
echo "A radius of ". $radius . "<br/>";
echo "A diameter of ". $diameter . "<br/>";
echo "A Circunference of" . $circunference. "<br/>";
echo "An area of ". $area . "<br/>";

?>