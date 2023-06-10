<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Jokenpô</title>
</head>
<body>
    <p class="margin"><h1>Jokenpô</h1>
    <form method="get" action="jokenpo.php">
        <p>Escolha pedra, papel ou tesoura</p>
        <input type="radio" id="pedra" name="ppt" value="pedra">
        <label for="pedra">Pedra</label>
        <input type="radio" id="papel" name="ppt" value="papel">
        <label for="papel">Papel</label>
        <input type="radio" id="tesoura" name="ppt" value="tesoura">
        <label for="tesoura">Tesoura</label><br><br>
        <input type="submit">
    </form>
    <br>
</p>
    <?php 
    session_start();
    if(isset($_SESSION['resultado'])){
        echo "<h6> O símbolo que o usuário escolheu foi " . $_SESSION["UserPPT"] . "</h6>";
        echo "<h6> O símbolo que o computador digitou foi " . $_SESSION["CompPPT"] . "</h6>";      
        echo "<h5> O ganhador foi o " . $_SESSION["resultado"] . "</h5>";
    }
    session_destroy()   
    ?>
    </body>
</html>