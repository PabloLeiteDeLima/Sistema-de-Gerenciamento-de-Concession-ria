<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AutoDrive | Login Administrativo</title>
    <link rel="stylesheet" href="public/css/style-login.css"/>
</head>
<body>

<script src="public/js/validaLogin.js" defer></script>

<div class="login-container">
    <div class="login-header">
        <h2>Área Restrita</h2>
        <p>Acesse o painel do estoque administrativo.</p>
    </div>

    <form id="formLogin" action="controllers/recLogin.php" method="POST" novalidate>
        
        <!-- Campo Usuário -->
        <div class="form-group">
            <label for="usuario">Usuário / E-mail</label>
            <input type="text" id="usuario" name="usuario" placeholder="Digite seu usuário">
            <div class="error-message" id="error-usuario">O campo usuário é obrigatório.</div>
        </div>

        <!-- Campo Senha -->
        <div class="form-group">
            <label for="senha">Senha</label>
            <input type="password" id="senha" name="senha" placeholder="Digite sua senha">
            <div class="error-message" id="error-senha">A senha precisa ter ao menos 4 caracteres.</div>
        </div>

        <button type="submit" class="btn-submit">Entrar no Sistema</button>
        
        <a href="#" class="back-link">Voltar para a Vitrine</a>
    </form>
</div>
</body>
</html>
