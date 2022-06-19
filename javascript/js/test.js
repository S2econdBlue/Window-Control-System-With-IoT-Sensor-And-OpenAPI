// const fetch = require("node-fetch");
// fetch("http://apis.data.go.kr/1360000/VilageFcstInfoService/getUltraSrtNcst?serviceKey=MZVaUPWHOFbsrQMtZXU8n5rCRvizs2l%2FkejesIzGvC%2FTdgCs8iRrgK%2B5%2FgMoCKrH9%2BZzIiPO5S0WlGnNAdki4A%3D%3D&pageNo=1&numOfRows=8&dataType=JSON&base_date=20210429&base_time=1600&nx=88&ny=89")
// .then(res => {
//     console.log(res);
//     return res.json();
// })
const fetch = require("node-fetch");
// const serviceKey = 'MZVaUPWHOFbsrQMtZXU8n5rCRvizs2l%2FkejesIzGvC%2FTdgCs8iRrgK%2B5%2FgMoCKrH9%2BZzIiPO5S0WlGnNAdki4A%3D%3D';



// const url = 'http://apis.data.go.kr/1360000/VilageFcstInfoService/getUltraSrtNcst?';
const url = 'http://apis.data.go.kr/1360000/VilageFcstInfoService/getUltraSrtNcst?serviceKey=MZVaUPWHOFbsrQMtZXU8n5rCRvizs2l%2FkejesIzGvC%2FTdgCs8iRrgK%2B5%2FgMoCKrH9%2BZzIiPO5S0WlGnNAdki4A%3D%3D&pageNo=1&numOfRows=8&dataType=JSON&base_date=20210429&base_time=1600&nx=88&ny=89';
// var queryParams = encodeURIComponent('ServiceKey') + '=' + serviceKey
// queryParams += '&' + encodeURIComponent('pageNo') + '=' + encodeURIComponent('1');
// queryParams += '&' + encodeURIComponent('numOfRows') + '=' + encodeURIComponent('8');
// queryParams += '&' + encodeURIComponent('dataType') + '=' + encodeURIComponent('JSON');
// queryParams += '&' + encodeURIComponent('base_date') + '=' + encodeURIComponent('20210429');
// queryParams += '&' + encodeURIComponent('base_time') + '=' + encodeURIComponent('1600');
// queryParams += '&' + encodeURIComponent('nx') + '=' + encodeURIComponent('88');
// queryParams += '&' + encodeURIComponent('ny') + '=' + encodeURIComponent('89');
//Plain text or HTML
console.log('Plain text or HTML');
// fetch(url)
//     .then(res => res.text())
//     .then(body =>console.log(body))
// fetch(url)
//     .then((response)=>{
//         console.log(response);
//     });

//JSON
console.log('JSON');
fetch(url)
    .then(res => res.json())
    .then(json => json.response.body.items)
    .then(items => {console.log(items)
    .then(item => console.log(item.category))
    });

