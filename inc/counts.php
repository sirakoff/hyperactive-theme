<?php
//Twitter Followers Count Code

function twitter_user_info($screen_name){

    $data = file_get_contents("https://cdn.api.twitter.com/1/users/lookup.json?screen_name=" . $screen_name);
    $data = json_decode($data, true);
    return $data[0];
}

// $twitter = twitter_user_info("hyperactive_gh");

// //Instagram Followed By Code
// //
// $url = 'https://api.instagram.com/v1/users/919725852/?access_token=376496019.f59def8.f8b3e43b500d4c8aa6051fe467d961ed';
// $api_response = file_get_contents($url);
// $instagram = json_decode($api_response);

// //Youtube Subscriber Count

// $data = file_get_contents('http://gdata.youtube.com/feeds/api/users/UC2AByG3WRPXcyRoUPdzI7GA');

// $xml = new SimpleXMLElement($data);
// $stats_data = (array)$xml->children('yt', true)->statistics->attributes();
// $stats_data = $stats_data['@attributes'];

// /********* OR **********/

// $data = file_get_contents('http://gdata.youtube.com/feeds/api/users/UC2AByG3WRPXcyRoUPdzI7GA?alt=json');
// $data = json_decode($data, true);
// $stats_data = $data['entry']['yt$statistics'];
?>