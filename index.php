<?php require_once 'listar_pokemon.php'; ?>
<?php require_once 'conexao.php';
?>
<?php require_once 'funcoes.php'; ?>

<?php

// $qnt_result_pg = 5;
// $pagina = filter_input(INPUT_POST, 'pagina', FILTER_SANITIZE_NUMBER_INT);
// $qnt_result_pg = filter_input(INPUT_POST, 'qnt_result_pg', FILTER_SANITIZE_NUMBER_INT);
// //calcular o inicio visualização
// $inicio = ($pagina * $qnt_result_pg) - $qnt_result_pg;
// $result_pokemons = "SELECT * FROM pokemon ORDER BY id LIMIT $inicio, $qnt_result_pg";
// $result = mysqli_query($mysqli, $result_pokemons);

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pokedex Testando</title>
    <link rel="stylesheet" href="_css/estilo.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
    <div id="interface">
        <header id="cabecalho"></header>
        
        <div id="bloco">
        <form action="index.php" method="POST">
            <div class="form-group">
                <label for="search">Procure</label>
                <input type="text" name="search" placeholder="Procure pelo nome ou ID" class="form-control">
                <button type="submit" name="submit-search" class="btn btn-primary">Search</button>
                <?php 
                    if(is_null($result)){
                        $result = $mysqli->query("SELECT  * FROM pokemon LIMIT 0, 100");
                    }
                ?>
            </div>
        </form>
            <div class="row justify-content-center">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Pokemon</th>
                            <th>Numero</th>
                            <th>Nome</th>
                            <th>Tipo</th>
                            <th>Ataque</th>
                            <th>Defesa</th>
                            <th>HP</th>
                            <th>Lendário</th>

                        </tr>
                    </thead>

                    <!-- Para percorrer o array -->
                    <?php while ($row = $result->fetch_assoc()) : ?>
                        <tr>
                            <td><?php formatid($row['id']); ?></td>

                            <td><?php echo $row['id']; ?></td>
                            <td><?php echo $row['name']; ?></td>

                            <td>
                                <?php tipo1($row['type1'],$row['type2']); ?>
                                <?php //echo $row['type2']; ?>
                            </td>

                            <td><?php echo $row['attack']; ?></td>
                            <td><?php echo $row['defense']; ?></td>
                            <td><?php echo $row['hp']; ?></td>
                            <td>
                                <?php legendary($row['is_legendary']); ?>
                            </td>

                        </tr>
                    <?php endwhile; ?>
                </table>
            </div>

</body>




</html>