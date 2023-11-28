<?php 
    if (isset($_POST['submit'])) {
        include_once('config.php');

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $sexo = $_POST['genero'];
        $data_nasc = $_POST['data_nasc'];
        $cidade = $_POST['cidade'];
        $estado = $_POST['estado'];
        $endereco = $_POST['endereco'];

        $result = mysqli_query($conexao, "INSERT INTO usuarios(nome, email, telefone, sexo, data_nasc, cidade, estado, endereco) VALUES ('$nome', '$email', '$telefone', '$sexo', '$data_nasc', '$cidade', '$estado', '$endereco')");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        
        <form action="formulario.php" method="post">
            <fieldset><legend>Formulario de Clientes</legend>
                <br>
                <div>
                    <input type="text" name="nome" id="nome" required>
                    <label for="nome">Nome Completo</label><br><br>
                    <input type="email" name="email" id="email" required>
                    <label for="email">Email</label><br><br>
                    <input type="tel" name="telefone" id="telefone" required>
                    <label for="telefone">Telefone</label>
                    <p>Sexo</p>
                    <input type="radio" name="genero" id="feminino" value="feminino" required>
                    <label for="feminino">Feminino</label>
                    <input type="radio" name="genero" id="masculino" value="masculino" required>
                    <label for="masculino">Masculino</label>
                    <input type="radio" name="genero" id="outro" value="outro" required>
                    <label for="outro">Outro</label><br><br>
                    <div>
                        <label for="data_nasc">Data de nascimento</label>
                        <input type="date" name="data_nasc" id="data_nasc">
                    </div><br>
                    <div>
                        <input type="text" name="cidade" id="cidade">
                        <label for="cidade">Cidade</label>
                    </div><br>
                    <div>
                        <input type="text" name="estado" id="estado">
                        <label for="estado">Estado</label>
                    </div><br>
                    <div>
                        <input type="text" name="endereco" id="endereco">
                        <label for="endereco">Endereço</label>
                    </div>
                    <input type="submit" name="submit" value="Enviar">
                </div></fieldset>
            
        </form>
    </div>
</body>
</html>