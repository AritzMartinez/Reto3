class Profesor extends Persona{
    constructor(nombre, apellido, email, articulos, numSeguridadSocial){
        super(nombre, apellido, email, articulos);
        this.numSeguridadSocial = numSeguridadSocial;
    }
}