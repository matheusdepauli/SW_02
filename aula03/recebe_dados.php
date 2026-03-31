<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RECEBE DADOS</title>
</head>
<body>

    <?php
        $nome = htmlspecialchars($_POST['nome']);
        $email = $_POST['email'];
        $idade = $_POST['idade'];

        $anoatual = date('Y');
        $ano = $anoatual - $idade;

        if ($idade >=18){
            echo "<p style='color:blue;'> VOCÊ É MAIOR DE IDADE</p>";
        } else{
            echo "<p style='color:red;'> VOCÊ É MENOR DE IDADE</p>";
        }
    ?>


    <p>O nome é: <?php echo $nome; ?></p>
    <p>O email é: <?php echo $email; ?></p>
    <p>A idade é: <?php echo $idade; ?></p>
    <p>Você nasceu no ano: <?php echo $ano; ?></p>    

</body>
</html>