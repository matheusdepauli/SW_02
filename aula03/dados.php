<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recebe dados</title>
</head>
<body>   
    <?php
        //$nome = $_POST['nome'];
        $nome = htmlspecialchars($_POST['nome']);
        $email = $_POST['email'];
        $idade = $_POST['idade'];
    ?>
    <p>O nome é: <?php echo $nome; ?></p>
    <p>O email é: <?php echo $email; ?></p>
    <p>A idade é: <?php echo $idade; ?></p>
    <?php
    $ano_atual = date('Y');
    $ano = $ano_atual - $idade; ?>
    <p>Você nasceu no ano de <?php echo $ano?></p>
    <?php 
        if($idade >= 18){
            echo"<p style='color:blue;'>Você é maior de 18";
        } elseif ($idade<=0) {
            echo"<p style='color:green;'>Sua idade é negativa";
        } else {
            echo"<p style='color:red;'>Você é menor de 18";
        }

    ?>
</body>
</html>
