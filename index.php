<?php

function retornarComentarios($valor){
    if($valor == 1){
        return [
            "Paulo Ferreira" => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.",
            "Maria dos Reis" => "The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.",
            "Julia Pelegrini" => "Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.",
            ];
    } elseif($valor == 2){
        return [
            "Maria dos Reis" => "The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.",
            "Julia Pelegrini" => "Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.",
            "Gabriel Pereira" => "There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.",
            ];
    } elseif($valor == 3){
        return [
            "Julia Pelegrini" => "Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.",
            "Gabriel Pereira" => "There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.",
            "Rebeca Santos" => "The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from 'de Finibus Bonorum et Malorum' by Cicero",
            ];
    }
}

if(isset($_POST['value'])){
    $contador = $_POST['value'];
} else{
    $contador = 1;
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The PHProject</title>

    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <div class="container">
        <h1>Veja nossa pagina de comentarios</h1>
        <div class="coments-container">
            <form action="index.php" method="post">
                <?php
                if($contador == 1 || $contador == 2){
                ?>
                    <input type="hidden" name="value" value="1">
                <?php
                } elseif($contador == 3){
                ?>
                    <input type="hidden" name="value" value="2">
                <?php    
                }
                ?>
                <input type="submit" value="<">
            </form>
            <?php
                if(isset($_POST['value'])){
                    $valor = $_POST['value'];
                    $arrComentarios = retornarComentarios($valor);              
                    foreach($arrComentarios as $nome => $comentario){
            ?>
                        <div class="coments-container">
                            <div class="coments">
                                <p><?= $comentario ?></p>
                                <h3><?= $nome ?></h3>
                            </div>
                        </div>
            <?php
                    }
                } else{
                    $arrComentarios = retornarComentarios(1);              
                    foreach($arrComentarios as $nome => $comentario){
            ?>
                        <div class="coments-container">
                            <div class="coments">
                                <p><?= $comentario ?></p>
                                <h3><?= $nome ?></h3>
                            </div>
                        </div>
            <?php
                    }
                }              
            ?>
            <form action="index.php" method="post">
                <?php
                if($contador == 3 || $contador == 2){
                ?>
                    <input type="hidden" name="value" value="3">
                <?php
                } elseif($contador == 1){
                ?>
                    <input type="hidden" name="value" value="2">
                <?php    
                }
                ?>
                <input type="submit" value=">">
            </form>
        </div>
    </div>
</body>
</html>