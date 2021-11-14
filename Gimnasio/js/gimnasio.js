function calcularFCM() {
    var edad = parseInt(document.getElementById('edad').value);
    var sexo = document.getElementById('sexo').value;

    if (sexo == "Hombre" || sexo == "Mujer") {
        if (edad <= 150) {
            var fcm = 220 - edad;
            document.getElementById("h2").innerHTML = "Edad: " + edad + ", Sexo: " + sexo + ", FCM: " + fcm;
            document.getElementById("1").innerHTML = ((fcm * 60) / 100) + " - " + ((fcm * 70) / 100);
            document.getElementById("2").innerHTML = ((fcm * 70) / 100) + " - " + ((fcm * 80) / 100);
            document.getElementById("3").innerHTML = ((fcm * 80) / 100) + " - " + ((fcm * 90) / 100);
            document.getElementById("4").innerHTML = ((fcm * 90) / 100) + " - " + ((fcm * 100) / 100);
        }
    } else {
        alert("Escriba una edad humana real.")
    }

}

function crearHorario() {
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

function resAct() {
    var seleccionar = [];
    var actividad = document.getElementsByName("actividad");
    var table1 = document.getElementById("tableAct");
    var celdas = table1.getElementsByTagName('td');

    for (var i = 0; i < actividad.length; i++) {
        if (actividad[i].checked == true) {
            seleccionar.push(actividad[i].value)
        }
    }

    for (var i = 0; i <= celdas.length; i++) {
        celdas[i].style.backgroundColor = "white";
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