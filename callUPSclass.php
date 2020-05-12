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
$ups->setShipToName('Sarita Lynn');
$ups->setShipToCity('San Jose');
$ups->setShipToStateProvinceCode('CA');
$ups->setShipToPostalCode('95113');
$ups->setShipToCountryCode('US');

// Provide ShipFrom Info
$ups->setShipFromName('Mansoor');
$ups->setShipFromCity('Marietta');
$ups->setShipFromStateProvinceCode('GA');
$ups->setShipFromPostalCode('30067');
$ups->setShipFromCountryCode('US');

// Provide Service Code
$ups->setServiceCode('03');


// Set Package Info
$ups->setPackageHeight('10');
$ups->setPackageWidth('8');
$ups->setPackageLength('7');
$ups->setPackageWeight('15');


$result = $ups->processRate();

echo $result;
