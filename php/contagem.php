<?php
$numeroInicio = filter_input(INPUT_GET, "startNumber", FILTER_VALIDATE_INT);
$numeroFinal = filter_input(INPUT_GET, "finalNumber", FILTER_VALIDATE_INT);

// $variavelQualquer=23;
// filter_var($variavelQualquer, FILTER_VALIDATE_INT);

if ($numeroInicio == false || $numeroInicio == null || $numeroFinal == false || $numeroFinal == null) {
    header("location ./../index.html?success=0");
    exit;
}

function renderizaListaContagemRegressiva(int $inicial, int $final)
{
    for ($i = $inicial; $i >= $final; $i--) {
        echo "<li> $i </li>";
    }
}
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <header>
        <h1>Contagem Regressiva</h1>
    </header>
    <main>
        <section>
            <ul>
                <?php renderizaListaContagemRegressiva($numeroInicio, $numeroFinal); ?>
            </ul>
        </section>
        <section>
            <ul>
                <?php for ($i = $numeroInicio; $i >= $numeroFinal; $i--) {
                ?>
                    <li class="item-da-lista">
                        <?php echo $i; ?>
                    </li>
                <?php
                }
                ?>
            </ul>
        </section>
        <section>
            <ul>
                <?php for ($i = $numeroInicio; $i >= $numeroFinal; $i--) {
                    echo "<li class=\"item-da-lista\">" . $i . "</li>";
                }
                ?>
            </ul>
        </section>

    </main>
</body>

</html>