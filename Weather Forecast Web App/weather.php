<?php 
         $address=$_GET["address"];
         $city=$_GET["city"];
         $state=$_GET["state"];
         $degree=$_GET["degree"];
         $info=$address.",".$city.",".$state;

         $url="https://maps.google.com/maps/api/geocode/xml?address=".urlencode($info)."&key=AIzaSyANPUq6NcreNxIFTc4_ljgkodoPBUD5wc4";
         $xml=simplexml_load_file($url);
         
         if($xml->status!="ZERO_RESULTS"){
         $latitude=$xml->result->geometry->location->lat;
         $longitude=$xml->result->geometry->location->lng;

$URL="https://api.forecast.io/forecast/75896c13f6d9276afb45d5a63b772be7/".rawurlencode($latitude.",".$longitude)."?units=".$degree."&exclude=flags";

        $json = file_get_contents($URL);
        echo $json;
        }

        else{
        echo "The address you entered is not valid!";
        }
?>