<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Criar Conta</title>
</head>
<body>
    <h1>Criar Conta</h1>
    <form method="POST" action="../../controllers/register.php">
        <input type="text" name="name" required placeholder="Nome">
        <input type="email" name="email" required placeholder="Email">
        <input type="password" name="password" required placeholder="Senha">
        <button type="submit">Registrar</button>
    </form>
    <p>Já tem uma conta? <a href="/login">Faça login aqui</a>.</p>
</body>
</html>
