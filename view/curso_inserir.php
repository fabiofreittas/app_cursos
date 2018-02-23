<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>View</title>
</head>
<body>
    <?php
        if ($_POST){
            include '../vendor/autoload.php';

            $curso = new \App\Model\Curso();
            $curso->setNome($_POST{'nome'});
            $curso->setValor($_POST{'valor'});

            $cursoDAO= new  \App\DAO\CursoDAO();
            if ($cursoDAO->inserir($curso))
                echo "Curso cadastrado com sucesso!";
        }
    ?>
    <form action="curso_inserir.php" method="post">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" autofocus>
        <label for="valor">Valor:</label>
        <input type="text" id="valor" name="valor">
        <input type="submit" value="Cadastrar">
    </form>
</body>
</html>