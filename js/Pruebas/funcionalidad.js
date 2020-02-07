var centro = null;
let profesores = [];
let alumnos = [];

$(document).ready(function(){
    $('#tipo').change(function () {
        var opcion = this.value;
        alert( opcion);
        switch (opcion) {
            case '1':
                $('#formalumno').css("display","block");
                $('#formprofe').css("display","none");
                break;
            case '2':
                $('#formprofe').css("display","block");
                $('#formalumno').css("display","none");
                break;
        }
        /*if(opcion == 1){
            $('#formalumno').css("display","block");

        }else{
            $('#formalumno').css("display","none");
            $('#formprofe').css("display","bock");
        }*/
    })

datosAlumno = function(){
    $(document).ready(function () {

        var direccion = $("#direccion").val();
        var especializacion = $("#especializacion").val();
        var horario =$("#horario").val();

        var nombre = $("#nombre").val();
        var apellido = $("#apellido").val();
        var sexo =$("#sexo").val();
        var curso = $("#curso").val();
        var edad = $("#edad").val();

/*
        let a1 = new Alumno(nombre,apellido,sexo,curso,edad);
*/
        alumnos[alumnos.length] = new Alumno(nombre,apellido,sexo,curso,edad);
        if (centro == null){
            centro = new Centro(direccion,especializacion,horario);
        }
/*
        centro.añadirAlumno(a1);
*/
        centro.añadirAlumno(alumnos[alumnos.length]);

       /* console.log(a1.mostrarAlumno());
        console.log(a1);*/
        console.log(centro);
        limpiar();
    })


}

datosProfe = function(){
        $(document).ready(function () {

            var direccion = $("#direccion").val();
            var especializacion = $("#especializacion").val();
            var horario =$("#horario").val();

            var nombrepro = $("#nombrepro").val();
            var apellidopro = $("#apellidopro").val();
            var sexopro =$("#sexopro").val();
            var asignatura = $("#asignatura").val();
            var numalumnos = $("#numalumnos").val();
/*
            let p1 = new Profesor(nombrepro,apellidopro,sexopro,asignatura,numalumnos);
*/profesores[profesores.length] = new Profesor(nombrepro,apellidopro,sexopro,asignatura,numalumnos);
            /*arrayprof.push(p1);*/

            if (centro == null){
                centro = new Centro(direccion,especializacion,horario);
            }
/*
            centro.añadirProfe(p1);
*/
            centro.añadirProfe(profesores[profesores.length]);


           /* centro = new Centro(direccion,especializacion,horario,arraypro=[p1]);*/

/*
            console.log(centro.mostrarCentro());
*/
            console.log(centro);



      /*      console.log(p1.mostrarProfe());
            console.log(p1);

            console.log(centro.p1);*/
            limpiar();
        })

}



limpiar = function () {
    $(document).ready(function () {
        $("#nombre").val("");
        $("#apellido").val("");
        $("#sexo").val("");
        $("#curso").val("");
        $("#edad").val("");

        $("#nombrepro").val("");
        $("#apellidopro").val("");
        $("#sexopro").val("");
        $("#asignatura").val("");
        $("#numalumnos").val("");


    })


}





    mostrarProfAlumn = function (){
        if (profesores.length > 0 && alumnos.length > 0) {

            $('#mostrar').append('<h1>Profesores</h1>')
            for (let i = 0; i < profesores.length; i++) {

                $('#mostrar').append('<p>'+ profesores[i].nombre +'</p>')
            }

            $('#mostrar').append('<h1>Alumnos</h1>')
            for (let i = 0; i < alumnos.length; i++) {

                $('#mostrar').append('<p>'+ alumnos[i].nombre +'</p>')
            }

        }else{
            alert(profesores[profesores.length -1].nombre)
        }
    }

});



