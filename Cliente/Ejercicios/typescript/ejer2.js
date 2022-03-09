var Persona = /** @class */ (function () {
    function Persona(ciudad) {
        this.ciudad = ciudad;
    }
    Persona.prototype.decirCiudad = function () {
        alert("Hola, tu ciudad es " + this.ciudad);
    };
    return Persona;
}());
var persona1 = new Persona("Teruel");
persona1.decirCiudad();
