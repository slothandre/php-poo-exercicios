<?php

use Biblioteca\{Didatico, Programacao, Tecnico};

    require_once "./vendor/autoload.php";

    $livro01 = new Tecnico;
    $livro01->setTitulo("Diario de um Banana");
    $livro01->setAutor("J. K. Rowling");
    $livro01->setPaginas(374);
    $livro01->setFormato(["Digital"]);

    $livro02 = new Programacao;
    $livro02->setTitulo("Algoritmos");
    $livro02->setAutor("Tolkein");
    $livro02->setPaginas(129);
    $livro02->setFormato(["Físico"]);
    $livro02->setArea("Back-end");

    $livro03 = new Didatico;
    $livro03->setTitulo("Teoria da Relatividade para Bebês");
    $livro03->setAutor("Albert Einstein");
    $livro03->setPaginas(83);
    $livro03->setFormato(["Físico"]);
    $livro03->setDisciplina("Física");
    $livro03->setNivel(["Básico"]);

    $livro04 = new Didatico;
    $livro04->setTitulo("Yeah, Science!");
    $livro04->setAutor("Jesse Pinkman");
    $livro04->setPaginas(592);
    $livro04->setFormato(["Físico"]);
    $livro04->setDisciplina("Química");
    $livro04->setNivel(["Médio"]);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 02</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <header class="text-center">
        <h1>Exercicio 02</h1>
        <hr>
    </header>
    <main>
        <section class="container">
            <table class="table table-striped table-hover caption-top">
                <caption>Estante de livros</caption>
                <thead>
                    <tr>
                        <th>Título</th>
                        <th>Autor</th>
                        <th>Páginas</th>
                        <th>Formato</th>
                        <th>Área</th>
                        <th>Disciplina</th>
                        <th>Nível</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider">
                    <tr>
                        <td><?=$livro01->getTitulo()?></td>
                        <td><?=$livro01->getAutor()?></td>
                        <td><?=$livro01->getPaginas()?></td>
                        <td><?=$livro01->getFormato()?></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td><?=$livro02->getTitulo()?></td>
                        <td><?=$livro02->getAutor()?></td>
                        <td><?=$livro02->getPaginas()?></td>
                        <td><?=$livro02->getFormato()?></td>
                        <td><?=$livro02->getArea()?></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td><?=$livro03->getTitulo()?></td>
                        <td><?=$livro03->getAutor()?></td>
                        <td><?=$livro03->getPaginas()?></td>
                        <td><?=$livro03->getFormato()?></td>
                        <td></td>
                        <td><?=$livro03->getDisciplina()?></td>
                        <td><?=$livro03->getNivel()?></td>
                    </tr>
                    <tr>
                        <td><?=$livro04->getTitulo()?></td>
                        <td><?=$livro04->getAutor()?></td>
                        <td><?=$livro04->getPaginas()?></td>
                        <td><?=$livro04->getFormato()?></td>
                        <td></td>
                        <td><?=$livro04->getDisciplina()?></td>
                        <td><?=$livro04->getNivel()?></td>
                    </tr>
                </tbody>
            </table>
        </section>
    </main>
</body>
</html>