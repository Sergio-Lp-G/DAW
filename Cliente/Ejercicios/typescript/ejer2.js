var Persona = /** @class */ (function () {
    function Persona(ciudad) {
        this.ciudad = ciudad;
    }
    Persona.prototype.decirCiudad = function () {
        alert("Hola, tu ciudad es " + this.ciudad);
    };
    return Persona;
}());
var persona1 = new Persona("Zaragoza");
persona1.decirCiudad();
var Coche = /** @class */ (function () {
    function Coche(modelo, anio) {
        this.modelo = modelo;
        this.anio = anio;
    }
    Coche.prototype.decirCaracteristicas = function () {
        alert("" + this.modelo);
    };
    return Coche;
}());
