

var xhr = new XMLHttpRequest();
var url = 'http://apis.data.go.kr/1360000/VilageFcstInfoService/getUltraSrtNcst'; /*URL*/
var queryParams = '?' + encodeURIComponent('ServiceKey') + '='+'서비스키'; /*Service Key*/
queryParams += '&' + encodeURIComponent('pageNo') + '=' + encodeURIComponent('1'); /**/
queryParams += '&' + encodeURIComponent('numOfRows') + '=' + encodeURIComponent('10'); /**/
queryParams += '&' + encodeURIComponent('dataType') + '=' + encodeURIComponent('XML'); /**/
queryParams += '&' + encodeURIComponent('base_date') + '=' + encodeURIComponent('20151201'); /**/
queryParams += '&' + encodeURIComponent('base_time') + '=' + encodeURIComponent('0600'); /**/
queryParams += '&' + encodeURIComponent('nx') + '=' + encodeURIComponent('18'); /**/
queryParams += '&' + encodeURIComponent('ny') + '=' + encodeURIComponent('1'); /**/
xhr.open('GET', 'http://apis.data.go.kr/1360000/VilageFcstInfoService/getUltraSrtNcst?ServiceKey=MZVaUPWHOFbsrQMtZXU8n5rCRvizs2l%2FkejesIzGvC%2FTdgCs8iRrgK%2B5%2FgMoCKrH9%2BZzIiPO5S0WlGnNAdki4A%3D%3D&pageNo=1&numOfRows=8&dataType=JSON&base_date=20210502&base_time=0000&nx=88&ny=89');
xhr.onreadystatechange = function () {
    if (this.readyState == 4) {
        alert('Status: '+this.status+'nHeaders: '+JSON.stringify(this.getAllResponseHeaders())+'nBody: '+this.responseText);
    }
};

xhr.send('');

// request.onload = function () {
//     const rowJsonData = request.response;
//     //populateHeader(rowJsonData);
//     currentWeather(rowJsonData);
//     var all = document.createElement('p');
//     all.textContent = rowJsonData.response.body.items.item[0].obsrValue;
//     footer.appendChild(all);
//   }
