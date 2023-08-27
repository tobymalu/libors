<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div id="inicio">
    <form action="../php/registroli.php" method="POST" class="formulario">
        <h2 class="info_form">Registrar Libro</h2>
        <input type="text" class="formula" require placeholder="&#128113; nombre del libro "name="nombre">
        <input type="text" class="formula" require placeholder="&#128113; nombre del Autor"name="autor">
        <input type="value" class="formula" require placeholder="&#128113; anioPublicado "name="anioPublicacion">
        <input type="text" class="formula" require placeholder="&#128113; editorial "name="editorial">
        <input type="text" class="formula" require placeholder="&#128113; precio "name="precio">
        <input type="submit" class="formula_enviar" name="registrar">
</form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
   
</body>
</html>