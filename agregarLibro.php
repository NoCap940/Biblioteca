<script>
    const form = document.querySelector('#formulario_agregar_libro');

    form.addEventListener('submit', function(event) {
        event.preventDefault(); // Evita que el formulario se envíe por defecto

        const formData = new FormData(form); // Crea un objeto FormData con los datos del formulario

        fetch('formularioAgregarLibro.php', {
            method: 'POST',
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            const mensajeDiv = document.querySelector('#mensaje');
            mensajeDiv.textContent = data.mensaje;

            if (data.exito) {
                mensajeDiv.classList.add('exito');
            } else {
                mensajeDiv.classList.add('error');
            }
        })
        .catch(error => console.error(error));
    });
</script>
