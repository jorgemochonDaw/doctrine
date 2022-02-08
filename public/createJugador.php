<?php
session_start();
require_once(__DIR__ . '/../bootstrap.php');
$entityManager = getEntityManager();
if (isset($_POST['nuevoJugador'])) {
    $jugador = new Jugador();
    $jugador->setNombre($_POST['nombre']);
    $jugador->setApellidos($_POST['apellido']);
    $jugador->setEdad($_POST['edad']);
    echo "Jugador creado " . $jugador->getId()
        . " " . $jugador->getNombre()
        . " " . $jugador->getApellidos()
        . " " . $jugador->getEdad();
    $equipo = $entityManager->getRepository('Equipo')->find($_POST['id']);
    $jugador->setEquipo($equipo);
    $entityManager->persist($jugador);
    $entityManager->flush();
}

if (isset($_POST['crearJugador'])) {
    $jugador = new Jugador();
    $jugador->setNombre($_POST['nombre']);
    $jugador->setApellidos($_POST['apellido']);
    $jugador->setEdad($_POST['edad']);
    echo "Jugador creado " . $jugador->getId()
        . " " . $jugador->getNombre()
        . " " . $jugador->getApellidos()
        . " " . $jugador->getEdad();
    $equipo = new Equipo();
    $equipo->setNombre($_POST['team']);
    $equipo->setFundacion($_POST['fundacion']);
    $equipo->setSocios($_POST['socios']);
    $equipo->setCiudad($_POST['ciudad']);
    echo "Equipo creado " . $equipo->getId()
        . " " . $equipo->getNombre()
        . " " . $equipo->getFundacion()
        . " " . $equipo->getSocios()
        . " " . $equipo->getCiudad();
    $jugador->setEquipo($equipo);
    $entityManager->persist($equipo);
    $entityManager->persist($jugador);
    $entityManager->flush();
}
?>
<h1>Selecciona un equipo o crea uno nuevo</h1>
<form action="index.php" method="post">
    <select name="equipo">
        <option name="equipo" value="crearEquipo">Añadir equipo</option>
        <?php
        $entityManager = getEntityManager();
        $equipos = $entityManager->getRepository("Equipo")->findAll();
        for ($i = 0; $i < count($equipos); $i++) {
        ?>
            <option name="equipo" value="<?php echo $equipos[$i]->id ?>"><?php echo $equipos[$i]->nombre ?></option>
        <?php
        }
        ?>
    </select>
    <input type="submit" name="seleccionarEquipo" value="Confirmar equipo" class="mt-3 btn btn-success">
</form>
<?php
if (isset($_POST['seleccionarEquipo'])) {
    $id = $_POST['equipo'];
    session_start();
    $_SESSION['idEquipo'] = $id;
}
if ($_SESSION['idEquipo'] == 'crearEquipo') {
?>
    <h1>Añadir jugador</h1>
    <form action="createJugador.php" method="post" enctype="multipart/form-data">
        <label for="nombre">Nombre</label>
        <input name="nombre" id="nombre" type="text" class="form-control"><br>
        <label for="apellido">Apellido</label>
        <input name="apellido" id="apellido" type="numeric" class="form-control"><br>
        <label for="edad">Edad</label>
        <input name="edad" id="edad" type="numeric" class="form-control"><br>
        <br>
        <label for="team">Team</label>
        <input name="team" id="team" type="text" class="form-control"><br>
        <label for="fundacion">Fundacion</label>
        <input name="fundacion" id="fundacion" type="text" class="form-control"><br>
        <label for="socios">Socios</label>
        <input name="socios" id="socios" type="numeric" class="form-control"><br>
        <label for="ciudad">Ciudad</label>
        <input name="ciudad" id="ciudad" type="text" class="form-control"><br>
        <input type="submit" name="crearJugador" value="Añadir jugador" class="mt-3 btn btn-success">
    </form>
<?php
} else {
?>
    <?php
    $idEquipo = $_SESSION['idEquipo'];
    $entityManager = getEntityManager();
    $equipos = $entityManager->getRepository("Equipo")->find($idEquipo);
    echo "Añade el nuevo jugador del " . $equipos->getNombre();
    ?>
    <form action="index.php" method="post" enctype="multipart/form-data">
        <label for="nombre">Nombre</label>
        <input name="nombre" id="nombre" type="text" class="form-control"><br>
        <label for="apellido">Apellido</label>
        <input name="apellido" id="apellido" type="numeric" class="form-control"><br>
        <label for="edad">Edad</label>
        <input name="edad" id="edad" type="numeric" class="form-control"><br>
        <input name="id" id="id" type="hidden" value="<?php echo $idEquipo ?>" class="form-control"><br>
        <input type="submit" name="nuevoJugador" value="Añadir nuevo jugador" class="mt-3 btn btn-success">
    <?php
}
    ?>