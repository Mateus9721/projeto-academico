<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>CloudFlix</title>
</head>
<body>
    <header>
         <h1>CloudFlix: O seu catálogo fictício de filmes</h1>  
    </header>
    <?php include 'nav.php'; ?>
    <main>
        <h2>Serviço de Atendimento ao Cliente</h2>
        <p>Entre em contato enviando uma mensagem para a equipe do site.</p>
        <form action="#" method="post">
            <label for="id_nome">Nome do cliente:</label><br>
            <input type="text" name="nome" id="id_nome"><br><br>
            <label for="id_email">Email do cliente:</label><br>
            <input type="text" name="email" id="id_email"><br><br>
            <label for="id_assunto">Assunto:</label><br>
            <input type="text" name="assunto" id="id_assunto"><br><br>
            <label for="id_mensagem">Mensagem:</label><br>
            <textarea name="mensagem" id="id_mensagem"></textarea><br><br>
            <button type="submit">Enviar</button>
        </form>

    </main>
    <?php include 'footer.php'; ?> 
    <script src="js/tema.js"></script>
</body>
</html>