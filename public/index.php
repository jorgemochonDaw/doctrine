<?php
require_once(__DIR__ . '/../bootstrap.php');
require_once(__DIR__ . '/mostrarEquipos.php');

if (isset($_POST['eliminarEquipo'])) {
    echo 's';
    $id = $_POST['id'];
    $equipo = $entityManager->find('Jugador', $id);
    var_dump($equipo);
    $entityManager->remove($equipo);
    $entityManager->flush();
    echo $equipo->nombre . ' eliminado';
}

if (isset($_POST['actualizarEquipo'])) {
    $actualizarEquipo = $entityManager->getReference('Equipo', $_POST['id']);
    $actualizarEquipo->setNombre($_POST['nombre']);
    $actualizarEquipo->setFundacion($_POST['fundacion']);
    $actualizarEquipo->setSocios($_POST['socios']);
    $actualizarEquipo->setCiudad($_POST['ciudad']);
    $entityManager->flush();
    echo 'Equipo actualizado';
}

require_once(__DIR__ . '/createJugador.php');

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
    $entityManager->flush();
    echo 'Jugador actualizado';
}



