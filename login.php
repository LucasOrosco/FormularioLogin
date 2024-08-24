<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <metaa name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Processando Login</title>
</head>
<body>
    <h1>Resultado do Login</h1>

    <?php
    //Nome de Usuario e senha corretos
    $usuario_correto = "admin";
    $senha_correta = "1234";
    // Verifica se o formulario foi enviado via POST
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Recebe os dado do formulario
        $username = $_POST['username'];
        $password = $_POST['password'];

        // Verifica se o nome de usuario e a senha estao corretos
        if ($username == $usuario_correto && $password == $senha_correta) {
            echo "<p>Login bem-sucedido! Bem-vindo, $username.</p>";
        } else {
            echo "<p>Nome de usuario ou senha incorretos.</p>";
        }
    }    else {
        echo "<p>Acesso invalido. Porfavor, use o formulario de login.</p>";
    }
    ?>

    <br>
    <a href="index.php">Voltar ao formulario de login</a>
</body>
</html>