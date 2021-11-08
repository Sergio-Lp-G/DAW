function calcular() {
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