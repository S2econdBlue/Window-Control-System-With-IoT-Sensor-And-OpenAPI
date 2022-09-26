<?php
    $url = 'https://www.cnbc.com/quotes/.SPX';
    $ch = curl_init();
    
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HEADER, false);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
    $res = curl_exec($ch);
    curl_close($ch);

    //<span class="QuoteStrip-lastPrice">4,189.32</span>
    $res = strstr($res, "div");
    $res = strstr($res, "class=");
    $res = strstr($res, "QuoteStrip-lastPriceStripContainer");
    $res = strstr($res, "span");
    $res = strstr($res, "class=");
    $res = strstr($res, "QuoteStrip-lastPrice");
    $res = strstr($res, ">");
    $res = substr($res, 1);
    $res = strstr($res, "<", true);

    echo $res;
?>