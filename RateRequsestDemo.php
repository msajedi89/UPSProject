<?php

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
    CURLOPT_POSTFIELDS =>"{\r\n   \"RateRequest\":{\r\n      \"Request\":{\r\n         \"SubVersion\":\"1703\",\r\n         \"TransactionReference\":{\r\n            \"CustomerContext\":\" \"\r\n         }\r\n      },\r\n      \"Shipment\":{\r\n         \"ShipmentRatingOptions\":{\r\n            \"UserLevelDiscountIndicator\":\"TRUE\"\r\n         },\r\n         \"Shipper\":{\r\n            \"Name\":\"Billy Blanks\",\r\n            \"ShipperNumber\":\" \",\r\n            \"Address\":{\r\n               \"City\":\"Marietta\",\r\n               \"StateProvinceCode\":\"GA\",\r\n               \"PostalCode\":\"30067\",\r\n               \"CountryCode\":\"US\"\r\n            }\r\n         },\r\n         \"ShipTo\":{\r\n            \"Name\":\"Sarita Lynn\",\r\n            \"Address\":{\r\n               \"City\":\"San Jose\",\r\n               \"StateProvinceCode\":\"CA\",\r\n               \"PostalCode\":\"95113\",\r\n               \"CountryCode\":\"US\"\r\n            }\r\n         },\r\n         \"ShipFrom\":{\r\n            \"Name\":\"Billy Blanks\",\r\n            \"Address\":{\r\n               \"AddressLine\":\"366 Robin LN SE\",\r\n               \"City\":\"Marietta\",\r\n               \"StateProvinceCode\":\"GA\",\r\n               \"PostalCode\":\"30067\",\r\n               \"CountryCode\":\"US\"\r\n            }\r\n         },\r\n         \"Service\":{\r\n            \"Code\":\"03\",\r\n            \"Description\":\"Ground\"\r\n         },\r\n         \"ShipmentTotalWeight\":{\r\n            \"UnitOfMeasurement\":{\r\n               \"Code\":\"LBS\",\r\n               \"Description\":\"Pounds\"\r\n            },\r\n            \"Weight\":\"10\"\r\n         },\r\n         \"Package\":{\r\n            \"PackagingType\":{\r\n               \"Code\":\"02\",\r\n               \"Description\":\"Package\"\r\n            },\r\n            \"Dimensions\":{\r\n               \"UnitOfMeasurement\":{\r\n                  \"Code\":\"IN\"\r\n               },\r\n               \"Length\":\"10\",\r\n               \"Width\":\"7\",\r\n               \"Height\":\"5\"\r\n            },\r\n            \"PackageWeight\":{\r\n               \"UnitOfMeasurement\":{\r\n                  \"Code\":\"LBS\"\r\n               },\r\n               \"Weight\":\"7\"\r\n            }\r\n         }\r\n      }\r\n   }\r\n}",
    CURLOPT_HTTPHEADER => array(
        "Username: DAN_Kashani",
        "Password: Shelly12",
        "AccessLicenseNumber: CD75F2E6A3485C32",
        "Content-Type: application/json"
    ),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;
