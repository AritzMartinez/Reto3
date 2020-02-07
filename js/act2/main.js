window.onload = function () {

    let arrayAutores = [];
    let tipo = $('#tipo');

    tipo.on('change', function () {
        if(tipo.val() === 'Alumno'){
            $('#ssLabel').css('display', 'none');
            $('#ss').css('display', 'none');
            $('#carnetLabel').css('display', 'inline');
            $('#carnet').css('display', 'inline');
        }
        else if(tipo.val() === 'Profesor'){
            $('#carnetLabel').css('display', 'none');
            $('#carnet').css('display', 'none');
            $('#ssLabel').css('display', 'inline');
            $('#ss').css('display', 'inline');
        }
    });

    $('#enviar').on('click', function () {
        let articulo = crearArticulo();

        if(tipo.val() === 'Alumno'){
            let alumno = crearPersona(new Alumno());
            alumno.numCarnet = $('#carnet').val();
            arrayAutores.push(alumno);
            console.log(arrayAutores)
        }
        else if(tipo.val() === 'Profesor'){
            let profesor = crearPersona(new Profesor());
            profesor.numSeguridadSocial = $('#ss').val();
            arrayAutores.push(profesor);
            console.log(arrayAutores)
        }
    });

    function crearArticulo() {
        return new Articulo($('#titulo').val(), $('#paginas').val());
    }

    function crearPersona(oPersona) {
        oPersona.nombre = $('#nombre').val();
        oPersona.apellido = $('#apellido').val();
        oPersona.email = $('#email').val();

        return oPersona;
    }

};