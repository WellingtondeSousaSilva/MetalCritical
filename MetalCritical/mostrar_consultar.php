<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Consulta de registro de Cliente</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Senha</th>
            </tr>
        </thead>
        <tbody>
            <php 
                include_once 'consultar.php';
            ?>

            <tr>
                <a href="home.php">Inserrir novo Cliente</a>
            </tr>
        </tbody>

    </table>
</body>
</html>