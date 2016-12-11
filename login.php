
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Base conhecimento Sitef</title>
        <link rel="stylesheet" href="css/login.css" >
    </head>
    <body>
        <!--teste-->

        <div class="form-wrapper">
  
          <form action="" method="post">
            <h3>Acesse sua conta</h3>

            <div class="form-item">
                <input type="text" name="usuario" required="required" placeholder="Usuário" autofocus>
            </div>

            <div class="form-item">
                <input type="password" name="senha" required="required" placeholder="Senha">
            </div>

            <div class="button-panel">
                <input type="submit" class="button" title="Log In" value="Entrar">
            </div>

          </form>
          <div class="reminder">
            <p>Não é um membro? <a href="#">Cadastre-se</a></p>
            <p><a href="#">Esqueceu a senha?</a></p>
          </div>

        </div>
        
	<?php
            require 'config.php';
            
            if($_POST){
                $usuario = $_POST['usuario'];//Cria variave usuário e senha para consultar no banco
                $senha = $_POST['senha'];
                
                $query = "SELECT * FROM usuarios WHERE usuario = '$usuario' and senha = '$senha' "; //busca o usuário no banco
                
                $result = mysql_query($query);
                $usuario = mysql_fetch_assoc($result);
                
                if($usuario){
                    session_start();//inicia a sessão
                    $_SESSION['logado'] = true;
                    $_SESSION['usuario'] = $usuario['nome'];
                    header('location:index.php');
                }  else {
                    echo '<h1>vc é um lixo</h1>';
                    
                }
            }
            
            ?>
        
        
        
        
        
        
        
        
    </body>
</html>
