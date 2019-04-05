var modal_map = document.getElementById('myModal');
var img = document.getElementById('map');
var modalImg = document.getElementById('img01');
var captionText = document.getElementById('caption');
img.onclick = function () {
    modal_map.style.display = 'block';
    modalImg.src = this.src;
    captionText.innerHTML = this.alt;
}

var span = document.getElementsByClassName("close-map")[0];

span.onclick = function () {
    modal_map.style = "none";
}