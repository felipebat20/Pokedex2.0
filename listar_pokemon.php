<?php require_once 'conexao.php';
//consultar no banco de dados
$pesquisa = false;  
if (isset($_POST['submit-search'])) {
    $search = $_POST['search'];
    $result = $mysqli->query("SELECT  * FROM pokemon WHERE id='$search'");
    $pesquisa = true;           
}else{
$result = $mysqli->query("SELECT  * FROM pokemon LIMIT 0, 12");
}


//Efetuar a busca
// if (isset($_GET['submit-search'])) {
//     $search = $_GET['search'];
//     $result = $mysqli->query("SELECT  * FROM pokemon WHERE id='$search'");  
//     $pesquisa = true;
//     header('location: index.php');
// }


?>

