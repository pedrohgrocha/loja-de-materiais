<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Editar Produto</title>
</head>
<body>
    <h1>Editar Produto</h1>
    <form method="POST">
        <input type="text" name="name" value="<?= htmlspecialchars($product['name']) ?>" required placeholder="Nome do Produto">
        <input type="number" step="0.01" name="price" value="<?= htmlspecialchars($product['price']) ?>" required placeholder="Preço">
        <input type="number" name="quantity" value="<?= htmlspecialchars($product['quantity']) ?>" required placeholder="Quantidade">
        <button type="submit">Atualizar</button>
    </form>
    <a href="/products">Voltar para a lista de produtos</a>
</body>
</html>
