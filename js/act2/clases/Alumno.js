class Alumno extends Persona{
    constructor(nombre, apellido, email, articulos, numCarnet){
        super(nombre, apellido, email, articulos);
        this.numCarnet = numCarnet;
    }
}