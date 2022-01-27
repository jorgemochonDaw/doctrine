<?php
require_once(__DIR__ . '/../bootstrap.php');

$entityManager = getEntityManager();
$jugador = new Jugador('Jorge', 'Mochon',21, 'Atletico de Madrid');
$entityManager->persist($jugador);
$entityManager->flush();

echo "Jugador creado " . $jugador->getId();

$jugador = $entityManager->getRepository("jugador")->findAll();
print "Jugadores: " . print_r($jugador, true);
