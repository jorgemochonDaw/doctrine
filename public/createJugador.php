<h1>Añadir jugador</h1>
<form action="index.php" method="post" enctype="multipart/form-data">
    <label for="nombre">Nombre</label>
    <input name="nombre" id="nombre" type="text" class="form-control"><br>
    <label for="apellido">Apellido</label>
    <input name="apellido" id="apellido" type="numeric" class="form-control"><br>
    <label for="edad">Edad</label>
    <input name="edad" id="edad" type="numeric" class="form-control"><br>
    <label for="equipo">Equipo</label>
    <input name="equipo" id="equipo" type="text" class="form-control"><br>
    <input type="submit" name="crearJugador" value="Añadir jugador" class="mt-3 btn btn-success">
</form>