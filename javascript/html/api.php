<!DOCTYPE html>
<html>

<body>
<?php
/* PHP 샘플 코드 */


$ch = curl_init();
$url = 'http://apis.data.go.kr/1360000/VilageFcstInfoService/getUltraSrtNcst'; /*URL*/
$queryParams = '?' . urlencode('ServiceKey') . '=MZVaUPWHOFbsrQMtZXU8n5rCRvizs2l%2FkejesIzGvC%2FTdgCs8iRrgK%2B5%2FgMoCKrH9%2BZzIiPO5S0WlGnNAdki4A%3D%3D'; /*Service Key*/
$queryParams .= '&' . urlencode('pageNo') . '=' . urlencode('1'); /**/
$queryParams .= '&' . urlencode('numOfRows') . '=' . urlencode('8'); /**/
$queryParams .= '&' . urlencode('dataType') . '=' . urlencode('JSON'); /**/
$queryParams .= '&' . urlencode('base_date') . '=' . urlencode('20151201'); /**/
$queryParams .= '&' . urlencode('base_time') . '=' . urlencode('0100'); /**/
$queryParams .= '&' . urlencode('nx') . '=' . urlencode('88'); /**/
$queryParams .= '&' . urlencode('ny') . '=' . urlencode('89'); /**/

$url1 = 'https://mdn.github.io/learning-area/javascript/oojs/json/superheroes.json';


//curl_setopt($ch, CURLOPT_URL, $url . $queryParams);
curl_setopt($ch, CURLOPT_URL, $url1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);

curl_setopt($ch, CURLOPT_HEADER, FALSE);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
$response = curl_exec($ch);
//print_r($response);
curl_close($ch);

var_dump($response);
?>
</body>

</html>