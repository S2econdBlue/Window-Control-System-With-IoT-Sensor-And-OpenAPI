<?php
    $url = 'http://192.168.48.129';
    $ch = curl_init();
    
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
    curl_setopt($ch, CURLOPT_HEADER, FALSE);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
    $res = curl_exec($ch);
    curl_close($ch);
    $cut_fir = strpos($res,"{\"response\":");
    $cut_end = strpos($res, "</pre>");
    $res = substr($res, $cut_fir, $cut_end-$cut_fir);
    
    echo $res;
?>