<?php

include 'GetUPSRates.php';

$ups = new GetUPSRates();

// Provide Shipper Info
$ups->setShipperName('Mansoor');
$ups->setShipperNumber('');
$ups->setShipperCity('Marietta');
$ups->setShipperStateProvinceCode('GA');
$ups->setShipperPostalCode('30067');
$ups->setShipperCountryCode('US');

// Provide ShipTo Info
$ups->setShipToName('Mansoor');
$ups->setShipToCity('Marietta');
$ups->setShipToStateProvinceCode('GA');
$ups->setShipToPostalCode('30067');
$ups->setShipToCountryCode('US');


// Set Package Info
$ups->setPackageHeight('10');
$ups->setPackageWidth('8');
$ups->setPackageLength('7');
$ups->setPackageWeight('15');


$result = $ups->processRate();

echo $result;
