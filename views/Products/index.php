<body>

    This is the products index

    <?php foreach ($products as $product): ?>

    <h2>
        <?= htmlspecialchars($product["name"]) ?>
    </h2>
    <p>
        <?= htmlspecialchars($product["description"]) ?>
    </p>

    <?php endforeach; ?>

</body>

</html>