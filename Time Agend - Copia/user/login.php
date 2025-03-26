<?php
include_once('../config/url.php');

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?= BASE_URL?>/user/assets/css/login.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>
   

    <main>
        
      <div class="menu">
        <ul>
            <a href="<?= BASE_URL?>/public/index.php"><li>Início</li></a>
            <a href="#"><li>Sobre-nós</li></a>
            <a href="#"><li>Ajuda</li></a>
            
         </ul>
      </div>
      
      

    <div class="container">
        <div class="login-box">
            <h2>ACESSE SUA CONTA</h2>
            <form action="<?= BASE_URL ?>/models/auth/DBlogin.php" method="POST">
                <div class="input-group">
                    <label for="username">Usuário:</label>
                    <input type="text" id="username" placeholder="Digite seu usuário" required>
                    <p class="error-message" id="usernameError" ></p>
                </div>
                <div class="input-group">
                    <label for="email">Email:</label>
                    <input type="email" name="email" placeholder="Digite seu email" required>
                </div>
                <div class="input-group">
                    <label for="password">Senha:</label>
                    <input type="password" name="password" placeholder="Digite sua senha" required/>
                    
                </div>
                <a href="<?= BASE_URL ?>user/logout.php" class="forgot-password">Esqueceu a senha?</a> <!-- Adicionando o link "Esqueceu a senha?"-->
                <button type="submit" id="loginButton" >LOGIN</button>
            </form>
            <p class="cadastre-se">Não tem conta? <br> <a href="#" id="open-modal">Cadastre-se aqui</a></p>  
        </div>
        
    </div>
    
        
            <div class="contact-info">
               <!-- Item 1 -->
                <div class="intem-1">
                    <div class="info-item">
                        <div class="icon-1"><i class="bi bi-telephone"></i></div>
                        <p class="tel1" >Telefone</p>
                        <p class="tel2" >+123-456-7890</p>
                    </div>
                </div>

                <div class="intem-2">
                    <div class="info-item">
                </div>
                    <div class="icon-2"><i class="bi bi-envelope"></i></div>
                    <p class="email1" >E-Mail</p>
                    <p class="email2" >hello@reallygreatsite.com</p>
                </div>

                <div class="item-3">
                    <div class="info-item">
                        <div class="icon-3"><i class="bi bi-globe2"></i></div>
                        <p class="web1">Website</p>
                        <p class="web2" >www.reallygreatsite.com</p>
                    </div>
                </div>

               
                    <div class="info-item">
                        <div class="icon-4"><i class="bi bi-house-door"></i></div>
                        <p class="end1">Endereço</p>
                        <p class="end2">123 Anywhere St., Any City</p>
                    </div>
                
           
        </div>
    

    <div id="modal-cadastro" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <h2 class="conta">CRIE SUA CONTA</h2>
            <form action="<?= BASE_URL?>models/auth/DBregister.php" method="POST">
                <div class="input-groupy">
                    <label for="cadastro-username">Usuário:</label>
                    <input type="text" name="cadastro-username" placeholder="Digite seu usuário" required>
                </div>
                <div class="input-groupy">
                    <label for="cadastro-email">Email:</label>
                    <input type="email" name="cadastro-email" placeholder="Digite seu email" required>
                </div>
                <div class="input-groupy">
                    <label for="cadastro-numero">Telefone:</label>
                    <input type="text" name="cadastro-numero" placeholder="Digite seu número" required>
                </div>
                <div class="input-groupy">
                    <label for="cadastro-senha">Senha:</label>
                    <input type="password" name="cadastro-senha" placeholder="Digite sua senha" required>
                </div>
                <div class="input-groupy">
                    <label for="cadastro-confirma-senha">Confirme a senha:</label>
                    <input type="password" name="cadastro-confirma-senha" placeholder="Confirme sua senha" required>
                </div>
                <button class="button" type="submit">CADASTRE-SE</button>
            </form>
        </div>
    </div>
</main>

<script src="<?= BASE_URL?>/user/assets/script/cadastro.js"></script>

</body>
</html>
   
</body>
</html>