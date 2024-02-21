<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NKL Mídias Digitais</title>
    <link rel="shortcut icon" href="favicon/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>NKL Mídias Digitais</h1>
        <p>Fotografia & Audiovisual</p>
    </header>
    <nav>
        <a href="nkl.html">HOME</a>
        <a href="empresa.html">A EMPRESA</a>
        <a href="portifolio.html">PORTIFÓLIO</a>
        <a href="orcamento.html">ORÇAMENTO</a>
        <a href="contato.html">CONTATOS</a>
    </nav>
    <main>      
        <h1>Obrigado!</h1>
        <?php
            if (isset($_POST["enviar"])){
                echo "<script>alert('Seu orçamento foi enviado com sucesso!')</script>";
            }
            if (isset($_POST["enviar"])){
                $nome=$_POST["nome"];
                $telefone=$_POST["cel"];
                $email=$_POST["email"];
                $select=$_POST["servico"];
            }
        ?>
        <div class="back"><a href="nkl.html">Voltar</a></div>
    </main>
</body>
<footer>Desenvolvido por Nikolas Oliveira. © </footer>
</html>