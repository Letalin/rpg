// seleciona o modal
var modal_map = document.getElementById('myModal');

// pega a imagem e a insere no modal
var img = document.getElementById('map');
var modalImg = document.getElementById('img01');
var captionText = document.getElementById('caption');
img.onclick = function () {
    modal_map.style.display = 'block';
    modalImg.src = this.src;
    captionText.innerHTML = this.alt;
}

// pega o span para sair do modal
var span = document.getElementsByClassName("close-map")[0];

span.onclick = function () {
    modal_map.style = "none";
}