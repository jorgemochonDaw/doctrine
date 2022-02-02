<?php
require_once(__DIR__ . '/../bootstrap.php');
require_once(__DIR__ . '/mostrarJugadores.php');
require_once(__DIR__ . '/createJugador.php');

if (isset($_POST['crearJugador'])) {
    $jugador = new Jugador(
        $_POST['nombre'],
        $_POST['apellido'],
        $_POST['edad'],
        $_POST['equipo']
    );
    $entityManager->persist($jugador);
    $entityManager->flush();
    echo "Jugador creado " . $jugador->getId()
        . " " . $jugador->getNombre()
        . " " . $jugador->getApellidos()
        . " " . $jugador->getEdad()
        . " " . $jugador->getEquipo();
}

if (isset($_POST['eliminarJugador'])) {
    $id = $_POST['id'];
    $jugador = $entityManager->find('Jugador', $id);
    $entityManager->remove($jugador);
    $entityManager->flush();
    echo $jugador->nombre . ' eliminado';
}

if (isset($_POST['actualizarJugador'])) {
    $actualizarJugador = $entityManager->getReference('Jugador', $_POST['id']);
    $actualizarJugador->setNombre($_POST['nombre']);
    $actualizarJugador->setApellidos($_POST['apellido']);
    $actualizarJugador->setEdad($_POST['edad']);
    $actualizarJugador->setEquipo($_POST['equipo']);
    $entityManager->flush();
    echo 'Jugador actualizado';
}
