<?php
$Year = (int)date("Y");
$Month = (int)date("m");
$Day = (int)date("d");
$YYYYMMDD = $Year . $Month . $Day;
$Hour = (int)date("H");
$Minute = (int)date("i");
$JSONorXML = 'JSON'; /*JSON과 XML 중 선택 */
$Time = 0;

if ($Minute < 10)
    $Minute = "0" . $Minute;

if ($Hour == 0) { //시간이 00시일 때
    if ($Minute < 30) {
        $Time = "2300";
        if ($Day == 1) {
            if ($Month == 1) {
                $Month = 12;
                $Year -= 1;
                $Day = 31;
            } else if ($Month == 5 || $Month == 7 || $Month == 10 || $Month == 12) {
                $Month -= 1;
                $Day = 30;
            } else if ($Month == 2 || $Month == 4 || $Month == 6 || $Month == 8 || $Month == 9 || $Month == 11) {
                $Month -= 1;
                $Day = 31;
            } else if ($Month == 3) {
                $Month -= 1;
                $Day = 28;
            }
        } else {
            $Day -= 1;
        }
    } else {
        if ($Hour < 10) {
            $Time = "0" . (string)($Hour) . $Minute; //Str로 변환
        } else {
            $Time = (string)$Hour - 1 . $Minute;
        }
    }
}
else if($Hour < 10){
    if ($Minute < 30) {
        $Time = "0" . (string)($Hour-1) . $Minute; //Str로 변환
    }
    else{
        $Time = "0" . (string)$Hour . $Minute; //Str로 변환
    }
}
else if($Hour >= 10){
    if ($Minute < 30) {
        $Time = (string)($Hour-1) . $Minute; //Str로 변환
    }
    else{
        $Time = (string)$Hour . $Minute; //Str로 변환
    }
}

if ($Month < 10)
    $Month = "0" . (string)$Month;
if ($Day < 10)
    $Day = "0" . (string)$Day;

$YYYYMMDD = (string)$Year . $Month . $Day;


$ch = curl_init();
$url = 'http://apis.data.go.kr/1360000/VilageFcstInfoService/getUltraSrtNcst';
$queryParams = '?' . urlencode('ServiceKey') . '=' . 'MZVaUPWHOFbsrQMtZXU8n5rCRvizs2l%2FkejesIzGvC%2FTdgCs8iRrgK%2B5%2FgMoCKrH9%2BZzIiPO5S0WlGnNAdki4A%3D%3D'; /*Service Key*/
$queryParams .= '&' . urlencode('pageNo') . '=' . urlencode('1');
$queryParams .= '&' . urlencode('numOfRows') . '=' . urlencode('8');
$queryParams .= '&' . urlencode('dataType') . '=' . urlencode($JSONorXML);
$queryParams .= '&' . urlencode('base_date') . '=' . urlencode($YYYYMMDD);
$queryParams .= '&' . urlencode('base_time') . '=' . urlencode($Time);
$queryParams .= '&' . urlencode('nx') . '=' . urlencode('88');
$queryParams .= '&' . urlencode('ny') . '=' . urlencode('89');

curl_setopt($ch, CURLOPT_URL, $url . $queryParams);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_HEADER, FALSE);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
$response = curl_exec($ch);
curl_close($ch);

echo $response;
?>