<?php

//Função para formatar o id
function formatid($id){
    if ($id < 10) {
    $idpoke = "00" . $id;
    } elseif ($id >= 10 && $id < 100) {
    $idpoke = "0" . $id;
    } else {
    $idpoke = $id;
    }
    echo $idpoke;
}

//Função lendário
function legendary($resp){
    if ($resp == 1) {
        $legend = "Sim";
    } else {
        $legend = "Não";
    }
    echo $legend;
}

function tipo1($type1,$type2){

    switch($type1){
        case "grass":
            echo "<span style='color:#8BD36E;'><b>Grass </b></span>";
        break;

        case "poison":
            echo "<span style='color:#B66EA8;'><b>Poison </b></span>";
        break;

        case "fire":
            echo "<span style='color:#FF5F42;'><b>Fire </b></span>";
        break;

        case "water":
            echo "<span style='color:#52A8FF;'><b>Water </b></span>";
        break;

        case "bug":
            echo "<span style='color:#B6C543;'><b>Bug </b></span>";
        break;
        
        case "normal":
            echo "<span style='color:#B6B6A8;'><b>Normal </b></span>";
        break;
        case "flying":
            echo "<span style='color:#9AA8FF;'><b>Flying </b></span>";
        break;
        case "electric":
            echo "<span style='color:#FFD352;'><b>Electric </b></span>";
        break;
        case "ice":
            echo "<span style='color:#7DD3FF;'><b>Ice </b></span>";
        break;
        case "fighting":
            echo "<span style='color:#C56E60;'><b>Fighting </b></span>";
        break;
        case "ground":
            echo "<span style='color:#DDC16D;'><b>Ground </b></span>";
        break;
        case "psychic":
            echo "<span style='color:#FF6EA8;'><b>Psychic </b></span>";
        break;
        case "rock":
            echo "<span style='color:#7766EE;'><b>Rock </b></span>";
        break;
        case "ghost":
            echo "<span style='color:#7D7DC5;'><b>Ghost </b></span>";
        break;
        case "dragon":
            echo "<span style='color:#8B7DF0;'><b>Dragon </b></span>";
        break;
        case "dark":
            echo "<span style='color:#8B6E60;'><b>Dark </b></span>";
        break;
        case "steel":
            echo "<span style='color:#B6B6C5;'><b>Steel </b></span>";
        break;

        case "fairy":
            echo "<span style='color:#F0A8F0;'><b>Fairy </b></span>";
        break;
    }

//Tipo 2
    switch($type2){
        case "grass":
            echo "<span style='color:#8BD36E;'><b>Grass </b></span>";
        break;

        case "poison":
            echo "<span style='color:#B66EA8;'><b>Poison </b></span>";
        break;

        case "fire":
            echo "<span style='color:#FF5F42;'><b>Fire </b></span>";
        break;

        case "water":
            echo "<span style='color:#52A8FF;'><b>Water </b></span>";
        break;

        case "bug":
            echo "<span style='color:#B6C543;'><b>Bug </b></span>";
        break;
        
        case "normal":
            echo "<span style='color:#B6B6A8;'><b>Normal </b></span>";
        break;
        case "flying":
            echo "<span style='color:#9AA8FF;'><b>Flying </b></span>";
        break;
        case "electric":
            echo "<span style='color:#FFD352;'><b>Electric </b></span>";
        break;
        case "ice":
            echo "<span style='color:#7DD3FF;'><b>Ice </b></span>";
        break;
        case "fighting":
            echo "<span style='color:#C56E60;'><b>Fighting </b></span>";
        break;
        case "ground":
            echo "<span style='color:#DDC16D;'><b>Ground </b></span>";
        break;
        case "psychic":
            echo "<span style='color:#FF6EA8;'><b>Psychic </b></span>";
        break;
        case "rock":
            echo "<span style='color:#7766EE;'><b>Rock </b></span>";
        break;
        case "ghost":
            echo "<span style='color:#7D7DC5;'><b>Ghost </b></span>";
        break;
        case "dragon":
            echo "<span style='color:#8B7DF0;'><b>Dragon </b></span>";
        break;
        case "dark":
            echo "<span style='color:#8B6E60;'><b>Dark </b></span>";
        break;
        case "steel":
            echo "<span style='color:#B6B6C5;'><b>Steel </b></span>";
        break;
        case "fairy":
            echo "<span style='color:#F0A8F0;'><b>Fairy </b></span>";
        break;
    }
    
    
}





?>