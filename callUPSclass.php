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

// Provide Shipment Total Weight
$ups->setShipmentTotalWeightMeasurementCode('LBS');
$ups->setShipmentTotalWeight('10');


// Set Package Info
$ups->setPackageTypeCode('02');
$ups->setPackageDimensionMeasurementCode('IN');
$ups->setPackageLength('10');
$ups->setPackageWidth('7');
$ups->setPackageHeight('5');
$ups->setPackageWeightMeasurementCode('LBS');
$ups->setPackageWeight('15');


// Send the Request to UPS API
$result = $ups->processRate();

$result2 = array();
$result2 = json_decode($result, true);

echo '<h3>Response Status:</h3>';
echo $result2['RateResponse']['Response']['ResponseStatus']['Code'];

echo '<h3>Services:</h3>';
echo '<p>First Service:</p>';
echo $result2['RateResponse']['RatedShipment'][0]['Service']['Code'];
echo '<p>Second Service:</p>';
echo $result2['RateResponse']['RatedShipment'][1]['Service']['Code'];
