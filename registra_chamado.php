<?php

    session_start();


    //Estamos trabalhado na montagem do texto
    $titulo = str_replace('#', '-', $_POST['titulo']);
    $categoria = str_replace('#', '-', $_POST['categoria']);
    $descricao = str_replace('#', '-', $_POST['descricao']);

    // implode('#', $_POST);

    $texto = $_SESSION['id'] . '#' . $titulo . '#' . $categoria . '#' . $descricao . PHP_EOL;
    //Estamos abrindo o arquivo de texto
    $arquivo = fopen('../../Projeto_chamados/arquivo.hd', 'a');
    //Estamos escrevendo o texto no arquivo
    fwrite($arquivo, $texto);
    //Estamos fechando o arquivo
    fclose($arquivo);

    header('Location: abrir_chamado.php');
?>