// Obtenha os elementos
var modal = document.getElementById("meuModal");
var modalImg = document.getElementById("imagemExpandida");
var span = document.getElementsByClassName("fechar")[0];

// Obtenha todas as imagens com a classe "imagemPequena"
var imagens = document.getElementsByClassName("imagemPequena");

// Adicione um evento de clique para cada imagem
for (var i = 0; i < imagens.length; i++) {
    imagens[i].onclick = function() {
        modal.style.display = "block";
        modalImg.src = this.src;
    }
}

// Quando o usuário clicar no botão de fechar, feche o modal
span.onclick = function() {
    modal.style.display = "none";
}

// Quando o usuário clicar fora da imagem expandida, feche o modal
modal.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
