function validateMatricula(e) {
    e.preventDefault();
    formulario = document.getElementById('formMatricula');
    nombre = document.getElementById('nombre');
    descripcion = document.getElementById('descripcion');
    precio = document.getElementById('precio');
    tono = document.getElementById('tono');
    

    lVali = true;

    if (nombre.value == "") {
        nombre.style.borderColor = "red";
        ohSnap('Ingrese el nombre...', { color: 'red' }); // alert will have class 'alert-color'
        lVali = false;
    }
    if (descripcion.value == "") {
        descripcion.style.borderColor = "red";
        ohSnap('Ingrese la descripcion...', { color: 'red' }); // alert will have class 'alert-color'
        lVali = false;
    }
    if (precio.value == "") {
        precio.style.borderColor = "red";
        ohSnap('Ingrese el precio...', { color: 'red' }); // alert will have class 'alert-color'
        lVali = false;
    }
    if (tono.value == "") {
        tono.style.borderColor = "red";
        ohSnap('Ingrese el tono...', { color: 'red' }); // alert will have class 'alert-color'
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
    

    lValim = true;

    if (nombre.value == "") {
        nombre.style.borderColor = "red";
        ohSnap('Ingrese el nombre...', { color: 'red' }); // alert will have class 'alert-color'
        lValim = false;
    }
    if (descripcion.value == "") {
        descripcion.style.borderColor = "red";
        ohSnap('Ingrese la descripcion...', { color: 'red' }); // alert will have class 'alert-color'
        lValim = false;
    }
    if (precio.value == "") {
        precio.style.borderColor = "red";
        ohSnap('Ingrese el precio...', { color: 'red' }); // alert will have class 'alert-color'
        lValim = false;
    }
    if (tono.value == "") {
        tono.style.borderColor = "red";
        ohSnap('Ingrese el tono...', { color: 'red' }); // alert will have class 'alert-color'
        lValim = false;
    }

    if (lValim == true) {
        formulariom.submit();
    }
    

}