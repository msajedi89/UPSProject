<?php

include 'GetUPSRates.php';

$ups = new GetUPSRates();

$ups->setPackageHeight('10');
$ups->setPackageWidth('8');
$ups->setPackageLength('7');
$ups->setPackageWeight('15');
$ups->setShipperName('Mansoor');

$ups->processRate();


