<!DOCTYPE html>
<html>
<head>
    <title>Lista de Productos</title>
</head>
<body>
    <h1>Lista de Productos</h1>
    <ul>
        <?php foreach ($products as $product): ?>
            <li><?php echo $product->getName(); ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>