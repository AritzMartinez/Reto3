
export class  Preguntas {
    private pregunta:string;
    private respuesta1:string;
    private respuesta2:string;
    private  respuesta3:string;
    private  respuesta4:string;
    private correcta:number;

    constructor (pregunta:string,respuesta1:string,respuesta2:string,respuesta3:string,respuesta4:string,correcta:number) {
        this.pregunta = pregunta;
        this.respuesta1 = respuesta1;
        this.respuesta2 = respuesta2;
        this.respuesta3 = respuesta3;
        this.respuesta4 = respuesta4;
        this.correcta = correcta;
    }
}
