var xhr = new XMLHttpRequest();
xhr.open("POST", "https://refer.kilho.net/analytics.json");
xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
xhr.send("agent=" + encodeURIComponent(navigator.userAgent) + "&refer=" + encodeURIComponent(document.referrer));