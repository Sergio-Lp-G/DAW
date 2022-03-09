class Persona{
    ciudad:String;
    constructor(ciudad:String){
        this.ciudad=ciudad;
    }
    decirCiudad(){
        alert("Hola, tu ciudad es "+ this.ciudad);
    }
}

var persona1=new Persona("Teruel");
persona1.decirCiudad();