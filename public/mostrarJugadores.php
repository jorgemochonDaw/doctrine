<?php
$entityManager = getEntityManager();
$jugadores = $entityManager->getRepository("Jugador")->findAll();
?>
<h1>Jugadores de la Premier</h1>
<?php
for ($i = 0; $i < count($jugadores); $i++) {
?>

    <table border="1">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Edad</th>
                <th>Equipo</th>
                <th>Eliminar</th>
                <th>Actualizar</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $jugadores[$i]->nombre ?></td>
                <td><?php echo $jugadores[$i]->apellidos ?></td>
                <td><?php echo $jugadores[$i]->edad ?></td>
                <td><?php echo $jugadores[$i]->equipo ?></td>

                <td>
                    <form action="index.php" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="id" value="<?php echo $jugadores[$i]->id ?>">
                        <input type="submit" name="eliminarJugador" value="Eliminar jugador">
                    </form>
                </td>
                <td>
                    <form action="index.php" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="id" value="<?php echo $jugadores[$i]->id ?>">
                        <label for="nombre">Nombre</label>
                        <input name="nombre" id="nombre" type="text" value="<?php echo $jugadores[$i]->nombre ?>" class="form-control"><br>
                        <label for="apellido">Apellido</label>
                        <input name="apellido" id="apellido" type="text" value="<?php echo $jugadores[$i]->apellidos ?>" class="form-control"><br>
                        <label for="edad">Edad</label>
                        <input name="edad" id="edad" type="numeric" value="<?php echo $jugadores[$i]->edad ?>" class="form-control"><br>
                        <label for="equipo">Equipo</label>
                        <input name="equipo" id="equipo" type="text" value="<?php echo $jugadores[$i]->equipo ?>" class="form-control"><br>
                        <input type="submit" name="actualizarJugador" value="Actualizar jugador" class="mt-3 btn btn-success">
                    </form>
                </td>
            </tr>
        </tbody>
    </table>
    <br>
<?php
}
