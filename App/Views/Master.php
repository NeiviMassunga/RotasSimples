<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $this->e($title ?? 'Rotas Simples') ?></title>
</head>
<body>
    <header>
        <h2>Exemplo de Sistema com Rotas em PHP</h2>
        <hr>
    </header>

    <main>
        <?= $this->section('content') ?>
    </main>

    <footer>
        <hr>
        <p>Instituto Politécnico do Uíge © <?= date('Y') ?></p>
    </footer>
</body>
</html>