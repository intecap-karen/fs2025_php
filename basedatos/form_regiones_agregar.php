<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Regiones</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1>Nueva Región</h1>
        <!-- crud_region.php es el archivo que realizaraa los procesos crud a la base de datos -->
        <form action="crud_region.php" method="post" class="mb-4">
            <label for="txt_codigo" class="form-label">Código</label>
            <input type="number" name="txt_codigo" id="txt_codigo" class="form-control mb-4">
            <label for="txt_nombre" class="form-labels">Nombre</label>
            <input type="text" name="txt_nombre" id="txt_nombre" class="form-control mb-4">
            <label for="txt_desc" class="form-label">Descripción</label>
            <input type="text" name="txt_desc" id="txt_desc" class="form-control mb-4">
            <button type="submit" class="btn btn-primary form-control">Agregar Región</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>