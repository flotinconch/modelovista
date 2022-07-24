function validateMatricula(e) {
    e.preventDefault();
    formulario = document.getElementById('formMatricula');
    nombre = document.getElementById('nombre');
    descripcion = document.getElementById('descripcion');
    precio = document.getElementById('precio');
    tono = document.getElementById('tono');
    patron = document.getElementById('patron');
    tipo = document.getElementById('tipo');

    lVali = true;

    if (nombre.value == "") {
        nombre.style.borderColor = "red";
        ohSnap('Ingrese la fecha de la matricula...', { color: 'red' }); // alert will have class 'alert-color'
        lVali = false;
    }
    if (descripcion.value == "") {
        descripcion.style.borderColor = "red";
        ohSnap('Ingrese el nombre del centro...', { color: 'red' }); // alert will have class 'alert-color'
        lVali = false;
    }
    if (precio.value == "") {
        precio.style.borderColor = "red";
        ohSnap('Ingrese el costo...', { color: 'red' }); // alert will have class 'alert-color'
        lVali = false;
    }
    if (tono.value == "") {
        tono.style.borderColor = "red";
        ohSnap('Ingrese el estado...', { color: 'red' }); // alert will have class 'alert-color'
        lVali = false;
    }

    if (patron.value == "") {
        patron.style.borderColor = "red";
        ohSnap('Ingrese el codigo del programa...', { color: 'red' }); // alert will have class 'alert-color'
        lVali = false;
    }
    if (tipo.value == "") {
        tipo.style.borderColor = "red";
        ohSnap('Ingrese el codigo del aprendiz...', { color: 'red' }); // alert will have class 'alert-color'
        lVali = false;
    }
    if (lVali == true) {
        formulario.submit();
    }

}

function validateMatriculaMod(e) {
    e.preventDefault();
    formulariom = document.getElementById('formMatriculam');
    nombre = document.getElementById('nombrem');
    descripcion = document.getElementById('descripcionm');
    precio = document.getElementById('preciom');
    tono = document.getElementById('tonom');
    patron = document.getElementById('patronm');
    tipo = document.getElementById('tipom');

    lValim = true;

    if (nombre.value == "") {
        nombre.style.borderColor = "red";
        ohSnap('Ingrese la fecha de la matricula...', { color: 'red' }); // alert will have class 'alert-color'
        lValim = false;
    }
    if (descripcion.value == "") {
        descripcion.style.borderColor = "red";
        ohSnap('Ingrese el nombre del centro...', { color: 'red' }); // alert will have class 'alert-color'
        lValim = false;
    }
    if (precio.value == "") {
        precio.style.borderColor = "red";
        ohSnap('Ingrese el costo...', { color: 'red' }); // alert will have class 'alert-color'
        lValim = false;
    }
    if (tono.value == "") {
        tono.style.borderColor = "red";
        ohSnap('Ingrese el estado...', { color: 'red' }); // alert will have class 'alert-color'
        lValim = false;
    }

    if (patron.value == "") {
        patron.style.borderColor = "red";
        ohSnap('Ingrese el codigo del programa...', { color: 'red' }); // alert will have class 'alert-color'
        lValim = false;
    }
    if (tipo.value == "") {
        tipo.style.borderColor = "red";
        ohSnap('Ingrese el codigo del aprendiz...', { color: 'red' }); // alert will have class 'alert-color'
        lValim = false;
    }
    if (lValim == true) {
        formulariom.submit();
    }
    

}