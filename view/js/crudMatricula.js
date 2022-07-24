function eraseMat(obj) {
    let id = obj.children[0].innerHTML;

    const swalWithBootstrapButtons = Swal.mixin({
        customClass: {
            confirmButton: 'btn btn-success',
            cancelButton: 'btn btn-danger'
        },
        buttonsStyling: false
    })

    swalWithBootstrapButtons.fire({
        title: 'Estas seguro?',
        text: "No podras revertir esto!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Si, eliminar!',
        cancelButtonText: 'No, cancelar!',
        reverseButtons: true
    }).then((result) => {
        if (result.isConfirmed) {
            window.location = "index.php?ruta=eraseMatricula&codigo=" + id;

            /*swalWithBootstrapButtons.fire(
                'Eliminado!',
                'El registro ha sido eliminado.',
                'success'
            )*/
        } else if (
            /* Read more about handling dismissals below */
            result.dismiss === Swal.DismissReason.cancel
        ) {
            swalWithBootstrapButtons.fire(
                'Cancelado',
                'El registro esta a salvo :)',
                'error'
            )
        }
    })
}

function getDataMat(obj) {
    let id = obj.children[0].innerHTML;
    let nombre = obj.children[1].innerHTML;
    let descripcion = obj.children[2].innerHTML;
    let precio = obj.children[3].innerHTML;
    let tono = obj.children[4].innerHTML;
    let patron = obj.children[5].innerHTML;
    let tipo = obj.children[6].innerHTML;


    document.getElementById('idm').value = id;
    document.getElementById('nombrem').value = nombre;
    document.getElementById('descripcionm').value = descripcion;
    document.getElementById('preciom').value = precio;
    document.getElementById('tonom').value = tono;
    document.getElementById('patronm').value = patron;
    document.getElementById('tipom').value = tipo;
    
}

function getGenerarReporteMatricula(e) {
    e.preventDefault();
    window.open('view/module/allmatricula.php', '_blank');
}