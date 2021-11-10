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
    // actividades.forEach((dep, index) => {
    //     var elemento = document.createElement("tinput type='checkbox'");
    //     var texto = document.createTextNode(dep)
    //     elemento.appendChild(texto);
    //     var ind = (index + 1).toString();
    //     var lista = document.getElementById("actividad" + ind);
    //     lista.appendChild(elemento);
    // });

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

function resAct() {
    var seleccionar = [];
    seleccionar.pop();
    var actividad = document.getElementsByName("actividad");
    var table1 = document.getElementById("tableAct");
    var celdas = table1.getElementsByTagName('td');

    for (var i = 0; i < actividad.length; i++) {
        if (actividad[i].checked == true) {
            seleccionar.push(actividad[i].value)
        }
    }
    
    for (var i = 0; i <= celdas.length; i++) {
        for (var j = 0; j <= seleccionar.length; j++) {
            if (celdas[i].innerHTML == seleccionar[j]) {
                celdas[i].style.backgroundColor = "grey";
            }
        }
    }
}

function resFisio() {
    var seleccion = "";
    var fisio = document.getElementsByName("fisio");
    var table2 = document.getElementById("tableFis");
    var celdas = table2.getElementsByTagName('td');

    for (var i = 0; i < fisio.length; i++) {
        if (fisio[i].checked == true) {
            seleccion = fisio[i].value;
        }
    }

    for (var i = 0; i < 5; i++) {
        for (var j = 0; j < celdas.length; j++) {
            if (celdas[j].innerHTML == seleccion) {
                celdas[j].style.backgroundColor = "pink";
            } else {
                celdas[j].style.backgroundColor = "white";
            }
        }
    }
}