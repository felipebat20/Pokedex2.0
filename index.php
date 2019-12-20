<?php require_once 'listar_pokemon.php';
require_once 'conexao.php';
require_once 'funcoes.php'; ?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pokedex Testando</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="_css/estilo.css">
    <div>Font made from <a href="http://www.onlinewebfonts.com">oNline Web Fonts</a>is licensed by CC BY 3.0</div>

</head>

<body>
    <div id="interface">
        <header id="cabecalho"></header>
        <div class="label">
            <h1>Pokedex</h1>
        </div>

        <div class="pesquisa">
            <div class="barra">
                <form action="index.php" method="POST">
                    <div class="form-group">
                        <label for="search">Nome ou número</label>
                        <div class="emlinha">
                            <input type="text" name="search" placeholder="Procure pelo nome ou ID" class="form-control">
                            <button type="submit" name="submit-search" class="fa fa-search" id="btn-search"></button>
                        </div>
                    </div>
            </div>
        </div>
        <div id="bloco">
            <!-- <form action="index.php" method="get">
                <input type="hidden" name="id">
                <input type="submit" >
            </form> -->

            <div class="cartoes">
                <?php while ($row = $result->fetch_assoc()) : ?>
                    
                        <div class="cartao">
                            <img src="https://assets.pokemon.com/assets/cms2/img/pokedex/full/<?php formatid($row['id']) ?>.png" alt="avatar">
                            <div class="info">
                                <h6><b>Nº<?php formatid($row['id']); ?></b></h6>
                                <h4><b><?php echo $row['name']; ?></b></h4>
                                <p>
                                    <?php tipo1($row['type1'], $row['type2']); ?>
                                </p>
                            </div>
                        </div>
                    

                <?php endwhile; ?>
            </div>

        </div>

</body>




</html>