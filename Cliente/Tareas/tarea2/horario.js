function crear() {
    var deportes = ["Spining", "Yoga", "Crossfit", "KickBoxing", "Baile de salón", "Kapoeira", "BodyPump"];
    deportes.forEach(dep => {

        for (var i = 0; i < 6; i++) {
            var elemento = document.createElement("td");
            var texto = document.createTextNode(dep)
            elemento.appendChild(texto);
            var lista = document.getElementById("deporte" + dep);
            lista.appendChild(elemento);
        }
    });
    //for (var a = 1; a < 8; a++) {}

    var fisios = ["Tania", "Juan", "Marta", "Tania", "Juan", "Marta", "Tania", "Juan", "Marta", "Francisco"];
    for (var b = 1; b < 11; b++) {
        for (var j = 0; j < 5; j++) {
            var elemento = document.createElement("td");
            var texto = document.createTextNode(fisios[(b - 1)])
            elemento.appendChild(texto);
            var lista = document.getElementById("fisio" + b);
            lista.appendChild(elemento);
        }
    }
}