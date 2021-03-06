<?php


class GetUPSRates
{
    // Shipper Properties
    private $shipperName;
    private $shipperNumber = "";
    private $shipperCity;
    private $shipperStateProvinceCode;
    private $shipperPostalCode;
    private $shipperCountryCode;

    // ShipTo Properties
    private $shipToName;
    private $shipToCity;
    private $shipToStateProvinceCode;
    private $shipToPostalCode;
    private $shipToCountryCode;

    // ShipFrom Properties
    private $shipFromName;
    private $shipFromCity;
    private $shipFromStateProvinceCode;
    private $shipFromPostalCode;
    private $shipFromCountryCode;

    // Service Properties
    private $serviceCode;

    // Shipment Total Weight Properties
    private $shipmentTotalWeightMeasurementCode;
    private $shipmentTotalWeight;

    // Package Properties
    private $packagingTypeCode;
    private $packageDimensionMeasurementCode;
    private $packageHeight;
    private $packageWidth;
    private $packageLength;
    private $packageWeightMeasurementCode;
    private $packageWeight;


    // ******* SHIPPER *******

    // set Shipper Name
    function setShipperName($shipperName) {
        $this->shipperName = $shipperName;
    }

    // set Shipper Number
    function setShipperNumber($shipperNumber) {
        $this->shipperNumber = $shipperNumber;
    }

    // set Shipper City
    function setShipperCity($shipperCity) {
        $this->shipperCity = $shipperCity;
    }

    // set Shipper StateProvinceCode
    function setShipperStateProvinceCode($shipperStateProvinceCode) {
        $this->shipperStateProvinceCode = $shipperStateProvinceCode;
    }

    // set Shipper PostalCode
    function setShipperPostalCode($shipperPostalCode) {
        $this->shipperPostalCode = $shipperPostalCode;
    }

    // set Shipper CountryCode
    function setShipperCountryCode($shipperCountryCode) {
        $this->shipperCountryCode = $shipperCountryCode;
    }


    // ******* SHIP TO *******

    // set ShipTo Name
    function setShipToName($shipToName) {
        $this->shipToName = $shipToName;
    }

    // set ShipTo City
    function setShipToCity($shipToCity) {
        $this->shipToCity = $shipToCity;
    }

    // set ShipTo StateProvinceCode
    function setShipToStateProvinceCode($shipToStateProvinceCode) {
        $this->shipToStateProvinceCode = $shipToStateProvinceCode;
    }

    // set ShipTo PostalCode
    function setShipToPostalCode($shipToPostalCode) {
        $this->shipToPostalCode = $shipToPostalCode;
    }

    // set ShipTo CountryCode
    function setShipToCountryCode($shipToCountryCode) {
        $this->shipToCountryCode = $shipToCountryCode;
    }


    // ******* SHIP From *******

    // set ShipFrom Name
    function setShipFromName($shipFromName) {
        $this->shipFromName = $shipFromName;
    }

    // set ShipFrom City
    function setShipFromCity($shipFromCity) {
        $this->shipFromCity = $shipFromCity;
    }

    // set ShipFrom StateProvinceCode
    function setShipFromStateProvinceCode($shipFromStateProvinceCode) {
        $this->shipFromStateProvinceCode = $shipFromStateProvinceCode;
    }

    // set ShipFrom PostalCode
    function setShipFromPostalCode($shipFromPostalCode) {
        $this->shipFromPostalCode = $shipFromPostalCode;
    }

    // set ShipFrom CountryCode
    function setShipFromCountryCode($shipFromCountryCode) {
        $this->shipFromCountryCode = $shipFromCountryCode;
    }




    // ******* SERVICE *******
    function setServiceCode($serviceCode) {
        $this->serviceCode = $serviceCode;
    }



    // ******* SHIPMENT TOTAL WEIGHT *******

    // set SHIPMENT TOTAL WEIGHT Measurement Code
    function setShipmentTotalWeightMeasurementCode($shipmentTotalWeightMeasurementCode) {
        $this->shipmentTotalWeightMeasurementCode = $shipmentTotalWeightMeasurementCode;
    }

    // set SHIPMENT TOTAL WEIGHT
    function setShipmentTotalWeight($shipmentTotalWeight) {
        $this->shipmentTotalWeight = $shipmentTotalWeight;
    }




    // ******* PACKAGE *******

    // set Package Type Code
    function setPackageTypeCode($packageTypeCode) {
        $this->packagingTypeCode = $packageTypeCode;
    }

    // set Package Dimension Measurement Code
    function setPackageDimensionMeasurementCode($packageDimensionMeasurementCode) {
        $this->packageDimensionMeasurementCode = $packageDimensionMeasurementCode;
    }

    // set Package Height
    function setPackageHeight($height) {
        $this->packageHeight = $height;
    }

    // set Package Width
    function setPackageWidth($width) {
        $this->packageWidth = $width;
    }

    // set Package Length
    function setPackageLength($length) {
        $this->packageLength = $length;
    }

    // set Package Weight Measurement Code
    function setPackageWeightMeasurementCode($packageWeightMeasurementCode) {
        $this->packageWeightMeasurementCode = $packageWeightMeasurementCode;
    }

    // set Package Weight
    function setPackageWeight($weight) {
        $this->packageWeight = $weight;
    }



    // Get the Rates for Package
    function ProcessRate() {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://onlinetools.ups.com/ship/v1/rating/Shop",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS =>"{\r\n   \"RateRequest\":{\r\n      \"Request\":{\r\n         \"SubVersion\":\"1703\",\r\n         \"TransactionReference\":{\r\n            \"CustomerContext\":\" \"\r\n         }\r\n      },\r\n      \"Shipment\":{\r\n         \"ShipmentRatingOptions\":{\r\n            \"UserLevelDiscountIndicator\":\"TRUE\"\r\n         },\r\n         \"Shipper\":{\r\n            \"Name\":\"$this->shipperName\",\r\n            \"ShipperNumber\":\"$this->shipperNumber\",\r\n            \"Address\":{\r\n               \"City\":\"$this->shipperCity\",\r\n               \"StateProvinceCode\":\"$this->shipperStateProvinceCode\",\r\n               \"PostalCode\":\"$this->shipperPostalCode\",\r\n               \"CountryCode\":\"$this->shipperCountryCode\"\r\n            }\r\n         },\r\n         \"ShipTo\":{\r\n            \"Name\":\"$this->shipToName\",\r\n            \"Address\":{\r\n               \"City\":\"$this->shipToCity\",\r\n               \"StateProvinceCode\":\"$this->shipToStateProvinceCode\",\r\n               \"PostalCode\":\"$this->shipToPostalCode\",\r\n               \"CountryCode\":\"$this->shipToCountryCode\"\r\n            }\r\n         },\r\n         \"ShipFrom\":{\r\n            \"Name\":\"$this->shipFromName\",\r\n            \"Address\":{\r\n               \"AddressLine\":\" \",\r\n               \"City\":\"$this->shipFromCity\",\r\n               \"StateProvinceCode\":\"$this->shipFromStateProvinceCode\",\r\n               \"PostalCode\":\"$this->shipFromPostalCode\",\r\n               \"CountryCode\":\"$this->shipFromCountryCode\"\r\n            }\r\n         },\r\n         \"Service\":{\r\n            \"Code\":\"$this->serviceCode\",\r\n            \"Description\":\"Ground\"\r\n         },\r\n         \"ShipmentTotalWeight\":{\r\n            \"UnitOfMeasurement\":{\r\n               \"Code\":\"$this->shipmentTotalWeightMeasurementCode\",\r\n               \"Description\":\"Pounds\"\r\n            },\r\n            \"Weight\":\"$this->shipmentTotalWeight\"\r\n         },\r\n         \"Package\":{\r\n            \"PackagingType\":{\r\n               \"Code\":\"$this->packagingTypeCode\",\r\n               \"Description\":\"Package\"\r\n            },\r\n            \"Dimensions\":{\r\n               \"UnitOfMeasurement\":{\r\n                  \"Code\":\"$this->packageDimensionMeasurementCode\"\r\n               },\r\n               \"Length\":\"$this->packageLength\",\r\n               \"Width\":\"$this->packageWidth\",\r\n               \"Height\":\"$this->packageHeight\"\r\n            },\r\n            \"PackageWeight\":{\r\n               \"UnitOfMeasurement\":{\r\n                  \"Code\":\"$this->packageWeightMeasurementCode\"\r\n               },\r\n               \"Weight\":\"$this->packageWeight\"\r\n            }\r\n         }\r\n      }\r\n   }\r\n}",
            CURLOPT_HTTPHEADER => array(
                "Username: DAN_Kashani",
                "Password: Shelly12",
                "AccessLicenseNumber: CD75F2E6A3485C32",
                "Content-Type: application/json"
            ),
        ));

        $response = curl_exec($curl);
        curl_close($curl);

        return $response;
    }

    // Get Response Status
    function getResponseStatus($result) {
        return $result['RateResponse']['Response']['ResponseStatus']['Code'];
    }

    // Pull Out Services from Response
    function getServices($result) {
        return $result['RateResponse']['RatedShipment'];
    }
}