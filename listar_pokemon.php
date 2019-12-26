<?php require_once 'conexao.php';

//Verificar se está sendo passado a pagina na URL
$pagina = (isset($_GET['pagina'])) ? ($_GET['pagina']) : 1;


//Selecionar os dados dos Pokemons
$result = $mysqli->query("SELECT  * FROM pokemon");

// Contar o total de Pokemons na pesquisa
$totPok = mysqli_num_rows($result);

// O total de resultados por página
$qtndPg = 32;

//Calcular o número de páginas necessárias para apresentar os pokemons
$numPg = ceil($totPok / $qtndPg);

//Calcular o inicio da visualização
$inicio = ($qtndPg * $pagina) - $qtndPg;

if (isset($_POST['submit-search']) && !empty($_POST['search'])) {

    $search = $_POST['search'];
    // O total de resultados por página
    $qtndPg = 8;
    //Calcular o inicio da visualização
    $inicio = ($qtndPg * $pagina) - $qtndPg;

    $result = $mysqli->query("SELECT  * FROM pokemon WHERE id='$search' OR name LIKE '%" . $search . "%' LIMIT $inicio, $qtndPg");

    // Contar o total de Pokemons na pesquisa
    $totPok = mysqli_num_rows($result);
    //Calcular o número de páginas necessárias para apresentar os pokemons
    $numPg = ceil($totPok / $qtndPg);
} else {
    $result = $mysqli->query("SELECT  * FROM pokemon LIMIT $inicio, $qtndPg ");
}
