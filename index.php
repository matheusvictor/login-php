<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Home</title>
    </head>
    <body>
        <h1>Login</h1>
        <form action="valida_login.php" method="POST">
            nome: <input type="text" name="login" required><br>
            senha: <input type="password" name="senha" required><br>

            <?php
                if(isset($_GET['erro-login'])){ //verifica se a url está definida
                    echo '<p>Usuário ou senha inválidos!</p>'; //se a url está definida, apresenta essa msg
                    unset($_GET['erro-login']); // se apresentar a msg anterior, retira a definição da variável
                }
            ?>

            <br>
            <input type="submit">
        </form>
    </body>
    <!-- php -S localhost:8000 -->
</html>