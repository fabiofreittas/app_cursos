<?php

include 'vendor\autoload.php';

$c1 = new App\Model\Curso();

$c1-> setNome("Arduino em 2 horas");
$c1-> setValor(100.00);

echo $c1->getNome() . $c1->getValor();

$c1DAO = new App\DAO\CursoDAO();
$c1DAO->inserir($c1);