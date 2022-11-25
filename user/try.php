<?php

// $rent_start_date="";
// $frist = strtotime($rent_start_date);  or your date as well
// $your_date = strtotime($return_date);
// $datediff = $first - $your_date;
// $nidhi = floor($datediff/(60*60*24));
// echo "$nidhi";


// function lat_long_dist_of_two_points($latitudeFrom, $longitudeFrom, $latitudeTo, $longitudeTo){ 
//     $pi = pi(); 
//     $x = sin($latitudeFrom * $pi/180) * 
//     sin($latitudeTo * $pi/180) + 
//     cos($latitudeFrom * $pi/180) * 
//     cos($latitudeTo * $pi/180) * 
//     cos(($longitudeTo * $pi/180) - ($longitudeFrom * $pi/180)); 
//     $x = atan((sqrt(1 - pow($x, 2))) / $x); 
//     return abs((1.852 * 60.0 * (($x/$pi) * 180)) / 1.609344); 
//     } 
//     Distance from New York to London
//     echo lat_long_dist_of_two_points(40.7127, 74.0059, 51.5072, 0.1275).' mi'."\n"; 


    /**
 * @function getDistance()
 * Calculates the distance between two address
 * 
 * @params
 * $addressFrom - Starting point
 * $addressTo - End point
 * $unit - Unit type
 * 
 * @author CodexWorld
 * @url https://www.codexworld.com
 *
 */

function getDistance($addressFrom, $addressTo, $unit = ''){
    // Google API key
    $apiKey = 'Your_Google_API_Key';
    
    // Change address format
    $formattedAddrFrom    = str_replace(' ', '+', $addressFrom);
    $formattedAddrTo     = str_replace(' ', '+', $addressTo);
    
    // Geocoding API request with start address
    $geocodeFrom = file_get_contents('https://maps.googleapis.com/maps/api/geocode/json?address='.$formattedAddrFrom.'&sensor=false&key='.$apiKey);
    $outputFrom = json_decode($geocodeFrom);
    if(!empty($outputFrom->error_message)){
        return $outputFrom->error_message;
    }
    
    // Geocoding API request with end address
    $geocodeTo = file_get_contents('https://maps.googleapis.com/maps/api/geocode/json?address='.$formattedAddrTo.'&sensor=false&key='.$apiKey);
    $outputTo = json_decode($geocodeTo);
    if(!empty($outputTo->error_message)){
        return $outputTo->error_message;
    }
    
    // Get latitude and longitude from the geodata
    $latitudeFrom   = $outputFrom->results[0]->geometry->location->lat;
    $longitudeFrom  = $outputFrom->results[0]->geometry->location->lng;
    $latitudeTo     = $outputTo->results[0]->geometry->location->lat;
    $longitudeTo    = $outputTo->results[0]->geometry->location->lng;
    
    // Calculate distance between latitude and longitude
    $theta   = $longitudeFrom - $longitudeTo;
    $dist    = sin(deg2rad($latitudeFrom)) * sin(deg2rad($latitudeTo)) +  cos(deg2rad($latitudeFrom)) * cos(deg2rad($latitudeTo)) * cos(deg2rad($theta));
    $dist    = acos($dist);
    $dist    = rad2deg($dist);
    $miles   = $dist * 60 * 1.1515;
    
    // Convert unit and return distance
    $unit = strtoupper($unit);
    if($unit == "K"){
        return round($miles * 1.609344, 2).' km';
    }elseif($unit == "M"){
        return round($miles * 1609.344, 2).' meters';
    }else{
        return round($miles, 2).' miles';
    }
}



$addressFrom = '35, manibag society, katargam, surat';
$addressTo   = '100, trupti society, singanpore, surat';

// Get distance in km
$distance = getDistance($addressFrom, $addressTo, "K");
