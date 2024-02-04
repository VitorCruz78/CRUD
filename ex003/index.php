<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variáveis e constantes</title>
</head>
<body>
    <h1>Variáveis e constantes</h1>
    <?php 
        $nome = "Vitor";
        $sobrenome = "Luiz";
        const PAIS = "Brasil";
        //
        //
        //
        $nome = "tinho"; // aqui foi feita a reatribuição
        // PAIS = "EUA" -> não é possível alterar uma constante

        echo "Muito prazer, $nome $sobrenome! Você mora no " . PAIS;
    ?>
</body>
</html>