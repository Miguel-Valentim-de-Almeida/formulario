<?php
    if(isset($_POST['cpf'])){
        include_once('config.php');
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $cpf = $_POST['cpf'];
        $result = mysqli_query($conexao, "INSERT INTO usuarios(nome,email,senha,cpf) VALUES ('$nome', '$email', '$senha', '$cpf')");
        header("Location: confirmacao.html");
        exit;
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
    <link rel="stylesheet" href="style.css">
</head>
    <body>
        <section class="container">
            <header>Formulário</header>
            <form action="index.php" method="POST" class="form">
                <div class="input-box">
                    <label>Nome completo</label>
                    <input type="text" name="nome" placeholder="Digite seu nome completo" required>
                </div>
                
                <div class="input-box">
                    <label>Email</label>
                    <input type="email" name="email" placeholder="Digite seu email" required>
                </div>

                <div class="coluna">
                    <div class="input-box">
                        <label>Senha</label>
                        <input type="password" name="senha" placeholder="Digite sua senha" required>
                    </div>
                    <div class="input-box">
                        <label>CPF</label>
                        <input type="text" id="cpf" name="cpf" placeholder="Digite seu CPF" required>
                        <script>
                            $(document).ready(function () {
                                $('#cpf').mask('000.000.000-00', {reverse: true});
                            });
                        </script>                        
                    </div>
                </div>   
                <button>Enviar</button>
            </form>
        </section>
    </body>
</html>