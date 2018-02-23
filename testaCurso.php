<?php

include 'vendor\autoload.php';

$c1 = new App\Model\Curso();
$c1-> setNome("java");

$c1DAO = new App\DAO\CursoDAO();
foreach ($c1DAO->pesquisar($c1) as $item){
    echo $item->getId() . $item->getNome() . $item->getValor() . "<br>";
}