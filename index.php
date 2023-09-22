<?php
    require_once "./src/Livro.php";

    $livro1 = new Livro;
    $livro1->setTitulo("As Cronicas de Nárnia");
    $livro1->setAutor("Stephen Hawking");
    $livro1->setPaginas(394);

    $livro2 = new Livro;
    $livro2->setTitulo("Star Wars");
    $livro2->setAutor("J. K. Rowling");
    $livro2->setPaginas(621);

    $livro3 = new Livro;
    $livro3->setTitulo("Diário de um Banana");
    $livro3->setAutor("Martin Luther King");
    $livro3->setPaginas(186);

    $livro4 = new Livro;
    $livro4->setTitulo("Coração de Tinta");
    $livro4->setAutor("George R. R. Martin");
    $livro4->setPaginas(475);

    $livro5 = new Livro;
    $livro5->setTitulo("Querido Diário Otário");
    $livro5->setAutor("George Orwell");
    $livro5->setPaginas(227);

    $livro6 = new Livro;
    $livro6->setTitulo("20.000 Léguas Submarinas");
    $livro6->setAutor("Stephen King");
    $livro6->setPaginas(500);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 01</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <header class="text-center">
        <h1>Exercicio 01</h1>
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
                    </tr>
                </thead>
                <tbody class="table-group-divider">
                    <tr>
                        <td><?=$livro1->getTitulo()?></td>
                        <td><?=$livro1->getAutor()?></td>
                        <td><?=$livro1->getPaginas()?></td>
                    </tr>
                    <tr>
                        <td><?=$livro2->getTitulo()?></td>
                        <td><?=$livro2->getAutor()?></td>
                        <td><?=$livro2->getPaginas()?></td>
                    </tr>
                    <tr>
                        <td><?=$livro3->getTitulo()?></td>
                        <td><?=$livro3->getAutor()?></td>
                        <td><?=$livro3->getPaginas()?></td>
                    </tr>
                    <tr>
                        <td><?=$livro4->getTitulo()?></td>
                        <td><?=$livro4->getAutor()?></td>
                        <td><?=$livro4->getPaginas()?></td>
                    </tr>
                    <tr>
                        <td><?=$livro5->getTitulo()?></td>
                        <td><?=$livro5->getAutor()?></td>
                        <td><?=$livro5->getPaginas()?></td>
                    </tr>
                    <tr>
                        <td><?=$livro6->getTitulo()?></td>
                        <td><?=$livro6->getAutor()?></td>
                        <td><?=$livro6->getPaginas()?></td>
                    </tr>
                </tbody>
            </table>
        </section>
    </main>
</body>
</html>