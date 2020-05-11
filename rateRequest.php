<?php

$url = "https://onlinetools.ups.com/ship/v1/rating/Shop";

$key =  '{
   "UPSSecurity":{
      "UsernameToken":{
         "Username":"DAN_Kashani",
         "Password":"Shelly12"
      },
      "ServiceAccessToken":{
         "AccessLicenseNumber":"CD75F2E6A3485C32"
      }
   },
   "RateRequest":{
      "Request":{
         "SubVersion":"1703",
         "TransactionReference":{
            "CustomerContext":" "
         }
      },
      "Shipment":{
         "ShipmentRatingOptions":{
            "UserLevelDiscountIndicator":"TRUE"
         },
         "Shipper":{
            "Name":"Billy Blanks",
            "ShipperNumber":" ",
            "Address":{
               "City":"Marietta",
               "StateProvinceCode":"GA",
               "PostalCode":"30067",
               "CountryCode":"US"
            }
         },
         "ShipTo":{
            "Name":"Sarita Lynn",
            "Address":{
               "City":"San Jose",
               "StateProvinceCode":"CA",
               "PostalCode":"95113",
               "CountryCode":"US"
            }
         },
         "ShipFrom":{
            "Name":"Billy Blanks",
            "Address":{
               "AddressLine":"366 Robin LN SE",
               "City":"Marietta",
               "StateProvinceCode":"GA",
               "PostalCode":"30067",
               "CountryCode":"US"
            }
         },
         "Service":{
            "Code":"03",
            "Description":"Ground"
         },
         "ShipmentTotalWeight":{
            "UnitOfMeasurement":{
               "Code":"LBS",
               "Description":"Pounds"
            },
            "Weight":"10"
         },
         "Package":{
            "PackagingType":{
               "Code":"02",
               "Description":"Package"
            },
            "Dimensions":{
               "UnitOfMeasurement":{
                  "Code":"IN"
               },
               "Length":"10",
               "Width":"7",
               "Height":"5"
            },
            "PackageWeight":{
               "UnitOfMeasurement":{
                  "Code":"LBS"
               },
               "Weight":"7"
            }
         }
      }
   }
}';

$ch = curl_init($url);


//Encode the array into JSON.
$jsonDataEncoded = $key;

//Tell cURL that we want to send a POST request.
curl_setopt($ch, CURLOPT_POST, 1);

//Attach our encoded JSON string to the POST fields.
curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonDataEncoded);

//Set the content type to application/json
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));

//Execute the request
$result = curl_exec($ch);


//echo print_r($result);

echo json_encode($result);

//	echo 'result:<br>'; print_r( $ch);
//	echo 'decode:<br>';  $fo=json_decode($key);  print_r($fo, false);

//	echo '<p>print_r( $result):</p>'; print_r( $result);

?>