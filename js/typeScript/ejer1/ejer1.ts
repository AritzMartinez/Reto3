import {Preguntas} from "./objPreguntas";
let arraaypreguntas:Preguntas[];
let numpreguntas:number =0;
function verPreguntas() {
    let div: any;

    div = document.getElementById("divPreguntas");

    if (div.style.display == 'none') {
        div.style.display = 'block';
    } else {
        div.style.display = 'none';
    }


}
function enviar() {
    let pregunta;
    let respuesta1;
    let respuesta2;
    let respuesta3;
    let respuesta4;
    let rad;

    pregunta = <HTMLInputElement>document.getElementById("pregunta");

    respuesta1 = <HTMLInputElement>document.getElementById("respu1");
    respuesta2 = <HTMLInputElement>document.getElementById("respu2");
    respuesta3 = <HTMLInputElement>document.getElementById("respu3");
    respuesta4 = <HTMLInputElement>document.getElementById("respu4");

     rad = $('input[name="rad"]:checked').val();

    console.log(pregunta.value);
    console.log(respuesta1.value);
    console.log(respuesta2.value);
    console.log(respuesta3.value);
    console.log(respuesta4.value);
    console.log(rad);



        arraaypreguntas[numpreguntas] = new Preguntas(pregunta.value,respuesta1.value,respuesta2.value,respuesta3.value,respuesta4.value,rad);
        numpreguntas++;
        console.log(arraaypreguntas);
      /*  limpiarCamposPregun();*/

    /*
        preguntas[numpregunta] = new Preguntas(pregunta, respuesta1, respuesta2, respuesta3, respuesta4, rad);
    */
}

/*function limpiarCamposPregun() {
    let pregunta: string;
    let respuesta1: string;
    let respuesta2: string;
    let respuesta3: string;
    let respuesta4: string;

    pregunta  = $("#pregunta").val= " ";

    respuesta1  = $("#respuesta1").val = " ";
    respuesta2  = $("#respuesta2").val= " ";
    respuesta3  = $("#respuesta3").val= " ";
    respuesta4  = $("#respuesta4").val= " ";

}*/






function validacion(pregu, respu1, respu2, respu3, respu4, rad) {
    let msj = "";
    let vali = true;
    console.log(pregu.value);
    if (pregu.length == "") {
        // Si no se cumple la condicion...
        msj = "Introduce una pregunta \n";
        vali=false;
    }
    if (respu1.length == "") {
        // Si no se cumple la condicion...
        msj = msj + "Introduce la primera respuesta \n"
        vali=false;
    }
    if (respu2.length == "") {
        // Si no se cumple la condicion...
        msj = msj + "Introduce la segunda respuesta \n"
        vali=false;
    }
    if (respu3.length == "") {
        // Si no se cumple la condicion...
        msj = msj + "Introduce la tercera respuesta \n"
        vali=false;
    }
    if (respu4.length == "") {
        // Si no se cumple la condicion...
        msj = msj + "Introduce la cuarta respuesta \n"
        vali=false;
    }
    if (rad == undefined) {
        // Si no se cumple la condicion...
        msj = msj + "Selecciona la respuesta correcta \n"
        vali=false;
    }
    if(msj != ""){
        alert(msj);
    }
    return vali;
}