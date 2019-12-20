<?php require_once 'conexao.php';

 
if (isset($_POST['submit-search'])) {
    $search = $_POST['search'];
    $result = $mysqli->query("SELECT  * FROM pokemon WHERE id='$search' OR name LIKE '%".$search."%' ");
               
}else{
$result = $mysqli->query("SELECT  * FROM pokemon LIMIT 0, 12");
}





?>

