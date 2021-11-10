function crear() {
    var actividades = ["Spining", "Yoga", "Crossfit", "KickBoxing", "Baile de salón", "Kapoeira", "BodyPump"];
    for (var i = 0; i < 6; i++) {
        actividades.forEach((dep, index) => {
            var elemento = document.createElement("td");
            var texto = document.createTextNode(dep)
            elemento.appendChild(texto);
            var ind = (index + 1).toString();
            var lista = document.getElementById("actividad" + ind);
            lista.appendChild(elemento);
        });
    }

    var fisios = ["Tania", "Juan", "Marta", "Tania", "Juan", "Marta", "Tania", "Juan", "Marta", "Francisco"];
    for (var j = 0; j < 5; j++) {
        fisios.forEach((fisio, index) => {
            var elemento = document.createElement("td");
            var texto = document.createTextNode(fisio);
            elemento.appendChild(texto);
            var ind = (index + 1).toString();
            var lista = document.getElementById("fisio" + ind);
            lista.appendChild(elemento);
        });
    }
}