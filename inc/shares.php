<?php
//function to get the remote data
function url_get_contents ($url) {
    if (function_exists('curl_exec')){ 
        $conn = curl_init($url);
        curl_setopt($conn, CURLOPT_SSL_VERIFYPEER, true);
        curl_setopt($conn, CURLOPT_FRESH_CONNECT,  true);
        curl_setopt($conn, CURLOPT_RETURNTRANSFER, 1);
        $url_get_contents_data = (curl_exec($conn));
        curl_close($conn);
    }elseif(function_exists('file_get_contents')){
        $url_get_contents_data = file_get_contents($url);
    }elseif(function_exists('fopen') && function_exists('stream_get_contents')){
        $handle = fopen ($url, "r");
        $url_get_contents_data = stream_get_contents($handle);
    }else{
        $url_get_contents_data = false;
    }
return $url_get_contents_data;
} 
function bd_nice_number($n) {
        // first strip any formatting;
        $n = (0+str_replace(",","",$n));
        
        // is this a number?
        if(!is_numeric($n)) return false;
        
        // now filter it;
        if($n>1000000000000) return round(($n/1000000000000),1).' T';
        else if($n>1000000000) return round(($n/1000000000),1).' B';
        else if($n>1000000) return round(($n/1000000),1).' M';
        else if($n>1000) return round(($n/1000),1).' K';
        
        return number_format($n);
    }
function total_share($url){
	//Facebook

	$fb_data = url_get_contents('http://graph.facebook.com/'.$url);
	$fb_data = json_decode($fb_data, true);
	$fb = $fb_data['shares'].'<br />';

	$tw_data = url_get_contents('http://urls.api.twitter.com/1/urls/count.json?url='.$url.'&callback=?');
	$tw_data = json_decode($tw_data, true);
	$tw = $tw_data['count'].'<br />';

	return bd_nice_number($fb+$tw);
}
?>