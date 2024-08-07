<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario con AJAX</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="form-container">
        <h2>Contacto</h2>
        <form id="miFormulario">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            <input type="submit" value="Enviar">
        </form>
        <div class="respuesta" id="respuesta"></div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#miFormulario').submit(function(e) {
                e.preventDefault(); //EVITAR QUE EL FORMULARIO SE ENVIE DE LA MANERA TRADICIONAL

                var datos = $(this).serialize(); 

                $.ajax({
                    type: 'POST',
                    url: 'procesar_formulario.php',
                    data: datos,
                    success: function(response) {
                        $('#respuesta').html('<p>' + response + '</p>');
                    },
                    error: function(xhr, status, error) {
                        $('#respuesta').html('<p style="color: red;">Error: ' + error + '</p>');
                    }
                });
            });
        });
    </script>
</body>
</html>
