<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Múltiplos de 5</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <h1>Múltiplos de 5 entre 1 e 100</h1>

    <ul>
        <?php
        for ($i = 1; $i <= 100; $i++) {
            if ($i % 5 == 0) {
                echo "<li>$i</li>";
            }
        }
        ?>
    </ul>

</body>
</html>
