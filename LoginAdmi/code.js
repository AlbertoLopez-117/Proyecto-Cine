function confirmarEliminacion(ID) {
    Swal.fire({
        title: 'ELIMINAR PELICULA!',
        showCancelButton: true,
        confirmButtonText: `ELIMINAR`,
        cancelButtonText: "CANCELAR",

    }).then((result) => {
        if (result.isConfirmed) {
            location.href = "eliminar.php?id=" + ID;
        }
    })
}