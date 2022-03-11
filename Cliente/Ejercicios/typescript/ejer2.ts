class Persona{
    ciudad:String;
    constructor(ciudad:String){
        this.ciudad=ciudad;
    }
    decirCiudad(){
        alert("Hola, tu ciudad es "+ this.ciudad);
    }
}

var persona1=new Persona("Zaragoza");
persona1.decirCiudad();

class Coche{
    modelo:String;
    anio:number;
    constructor(modelo:string,anio:number){
        this.modelo=modelo;
        this.anio=anio;
    }
    decirCaracteristicas(){
        alert(""+this.modelo);
    }
}