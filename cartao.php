<?php 
    if (isset($_POST['submit'])) {
        include_once('config.php');

        $nome = $_POST['nome'];
        $numero = $_POST['numero'];
        $venc = $_POST['venc'];
        $cod = $_POST['cod'];

        $result = mysqli_query($conexao, "INSERT INTO cartao(nome, numero, venc, cod) VALUES ('$nome', '$numero', '$venc', '$cod')");
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cartao.css">
    <title>Document</title>
</head>

<body>
    <div style=" margin-left: 10%; display: flex; justify-content: center; align-items: center; background-color: white; padding-bottom: 20px; padding-top: 20px; width: 850px; border-radius: 1rem; box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);
    -webkit-box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);
    -moz-box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);">
        <div class="cartao">
            <div class="cabeca">
                <img src="chip.png" alt="" width="120" height="80">
                <img src="master.png" alt="" width="180" height="80">
            </div>
            <div style="padding-left: 20px;">
                <input class="numeroI" type="text"
                    style="background-color: transparent; border: none; width: 320px; height: 30px; font-size: xx-large; color:whitesmoke; font-weight: bold; margin-left: 20p;"
                     pattern="^([0-9]{4}-[0-9]{4}-[0-9]{4}-[0-9]{4})$">
            </div>
            <div class="sub">
                <input type="text" class="nomeCartao" style="border: none; background-color: transparent; font-size: large; width: 310px; font-weight: bold;" >

                <input type="text" class="validade" style="width: 50px; font-size: large; background-color: transparent; border: none; font-weight: bold;">
            </div>


        </div>
        <div>
            <form action="cartao.php" method="post">
                <p>Nome</p>
            <input type="text" name="nome" class="nome" onkeypress="escreva1()" required>
            <p>Numero do cartão</p>
            <input type="text" name="numero" class="numero" onkeypress="escreva()"

                 >

            <div style="display: flex;">
                <div style="display: flex; flex-direction: column;">
                    <p>Vencimento</p> <input type="" name="venc" class="venc" onkeypress="escreva2()" required>
                </div>
                <div style="display: flex; flex-direction: column;">
                    <p>Código de segurança</p> <input type="text" name="cod" class="cod" required>
                    <input type="submit" name="submit" value="Enviar">
                </div>
               
            </div>

            </form>
            
        </div>
    </div>
    <script src="./mascara.js"></script>
</body>

</html>