function mostrarElementos() {
    var elementosExtras = document.getElementById("elementosExtras");
    if (elementosExtras.style.display === "none") {
        elementosExtras.style.display = "block";
        console.log("ENTROU AQUI");
    } else {
        elementosExtras.style.display = "none";
        console.log("PASSOU ALI AQUI");
    }
}
function mostrarIcones() {
    var divIcones = document.getElementById('icones');
    var todosIcones = "";
    for(let i = 1; i <= 300; i++){
        todosIcones += "<img class='icone' src='../../static/SVG icons/dev-icon-" + i +".svg'>";
    }
    divIcones.innerHTML = todosIcones;
}
document.addEventListener('DOMContentLoaded', mostrarIcones);

