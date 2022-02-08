<?php
$entityManager = getEntityManager();
$equipos = $entityManager->getRepository("Equipo")->findAll();
?>
<h1>Equipos de la Premier</h1>
<?php
for ($i = 0; $i < count($equipos); $i++) {
?>
    <table border="1">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Fundacion</th>
                <th>Socios</th>
                <th>Ciudad</th>
                <th>Borrar</th>
                <th>Actualizar</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $equipos[$i]->nombre ?></td>
                <td><?php echo $equipos[$i]->fundacion ?></td>
                <td><?php echo $equipos[$i]->socios ?></td>
                <td><?php echo $equipos[$i]->ciudad ?></td>
                <td>

                    <?php
                    var_dump($equipos);

                    ?>

                </td>
                <td>
                    <form action="index.php" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="id" value="<?php echo $equipos[$i]->id ?>">
                        <label for="nombre">Nombre</label>
                        <input name="nombre" id="nombre" type="text" value="<?php echo $equipos[$i]->nombre ?>" class="form-control"><br>
                        <label for="fundacion">Fundacion</label>
                        <input name="fundacion" id="fundacion" type="text" value="<?php echo $equipos[$i]->fundacion ?>" class="form-control"><br>
                        <label for="socios">Socios</label>
                        <input name="socios" id="socios" type="numeric" value="<?php echo $equipos[$i]->socios ?>" class="form-control"><br>
                        <label for="ciudad">Ciudad</label>
                        <input name="ciudad" id="ciudad" type="text" value="<?php echo $equipos[$i]->ciudad ?>" class="form-control"><br>
                        <input type="submit" name="actualizarEquipo" value="Actualizar equipo" class="mt-3 btn btn-success">
                    </form>
                </td>
            </tr>
        </tbody>
    </table>
    <br>
<?php
}
