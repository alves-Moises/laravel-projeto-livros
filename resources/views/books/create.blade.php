<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X=UA-Compatible">
    <title>Books</title>
</head>
<header style="background-color:#fab; height:50px; text-align:center">
<H1>Adicionar livro</H1>
</header>
<body>
    <section style="text-align:center; vertical-align: middle;; background-color:#aaa">
        <section class="conteiner" style="min-height: 200px;">
            <form action="{{ route('register_book') }}" method="POST">
                @csrf
                <label for=""><b>Nome do Livro</b></label><br>
                <input type="text" name="name" placeholder="Digite o nome do livro"><br>
                <label for="" ><b>Autor</b></label><br>
                <input type="text" name="author" placeholder="Nome do autor"><br>
                <label for=""><b>Data de lançamento</b></label><br>
                <input type="date" name="launch"><br>
                <label for=""><b>status</b></label><br>
                <input type="text" name="status"><br>
                <label for=""><b>Classificação</b></label><br>
                <input type="integer" name="classification"><br>
            <Button><b>Adicionar Livro</b></Button>
        </section>
    </sectio>
    </form>
</body>
<footer style="background:#baf; vertical-align: bottom;">
<H2>Isso é um footer</H2>
</footer>
</html>