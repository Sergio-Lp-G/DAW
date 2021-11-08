function crear() {
    var deportes = ["Aerobic", "Ciclismo", "Yoga", "KickBoxing", "Crossfit", "Karate", "Sgrima"];
    for (var a = 1; a < 8; a++) {
        for (var i = 0; i < 6; i++) {
            var elemento = document.createElement("td");
            var texto = document.createTextNode(deportes[a - 1])
            elemento.appendChild(texto);
            var lista = document.getElementById("deporte" + a);
            lista.appendChild(elemento);
        }
    }

    var fisios = ["Alfredo", "Alfredo", "Maria", "Maria", "Sonia", "Sonia", "Alberto", "Alberto", "Sergio", "Sergio"];
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