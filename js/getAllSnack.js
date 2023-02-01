const xhr = new XMLHttpRequest();
xhr.open('GET', 'https://sysbird.jp/webapi/?apikey=guest&format=json', true);
xhr.send();
xhr.onreadystatechange = () => {
    if (xhr.readyState == 4) {
        if (xhr.status == 200) {
            const data = xhr.responseText;
            console.log(data);
        }
    }
}
