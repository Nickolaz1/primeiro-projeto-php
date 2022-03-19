<?php

function retornarComentarios($valor){
    if($valor == 1){
        return [
            "Paulo Ferreira" => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s",
            "Maria dos Reis" => "The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.",
            "Julia Pelegrini" => "Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.",
            ];
    } elseif($valor == 2){
        return [
            "Maria dos Reis" => "The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.",
            "Julia Pelegrini" => "Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.",
            "Gabriel Pereira" => "There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour",
            ];
    } elseif($valor == 3){
        return [
            "Julia Pelegrini" => "Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.",
            "Gabriel Pereira" => "There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour",
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

    <img style="width: 100%; height: 500px;" src="img/paisagem.jpg" alt="Casa do lago no inverno">

    <div class="container">

        <h2>Comentarios de experiencias</h2>

        <section class="coments-container">
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
        </section>
        <hr class="line">

        <h1>Sobre a casa</h1>

        <section class="info-house">
            <div class="house-text">
                <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p>
                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>
                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
            </div>

            <img style="height: 450px; width: 350px;" src="img/lateral-janela.jpg" alt="">
        </section>
        <hr class="line">

        <h2 class="title-galery">Galeria de fotos</h2>

        <section class="images-container">
            <img style="height: 300px; width: 790px;" src="img/paisagem.jpg" alt="Casa do lago no inverno">
            <div class="house-images">                
                <img style="height: 300px; width: 250px;" src="img/lateral-janela.jpg" alt="">
                <img style="height: 300px; width: 250px;" src="img/lareira.jpg" alt="">
                <img style="height: 300px; width: 250px;" src="img/fundos.jpg" alt="">
            </div>
        </section>
    </div>
</body>
</html>