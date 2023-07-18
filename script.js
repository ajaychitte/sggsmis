function getContent(url, containerId) {
    var container = document.getElementById(containerId);
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function () {
        if (xhr.readyState == 4 && xhr.status == 200) {
            container.innerHTML = xhr.responseText;
        }
    };
    xhr.open('GET', url, true);
    xhr.send();
}

