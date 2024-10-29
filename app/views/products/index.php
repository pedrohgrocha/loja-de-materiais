<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Produtos</title>
</head>
<body>
    <h1>Lista de Produtos</h1>
    <a href="/products/create">Adicionar Produto</a>
    <ul>
        <?php foreach ($products as $product): ?>
            <li>
                <?= $product['name'] ?> - R$ <?= number_format($product['price'], 2, ',', '.') ?>
                <a href="/products/edit/<?= $product['id'] ?>">Editar</a>
                <a href="/products/delete/<?= $product['id'] ?>">Excluir</a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
