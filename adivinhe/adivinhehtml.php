<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Adivinhe o número</title>
</head>
<body>
    <p class="margin"><h1>Adivinhe o número</h1>
    <form method="get" action="adivinhe.php">
        <p>Insira seu número</p>
        <input type="text" name="numero">
        <input type="submit">
    </form>
    <br>
</p>
    <?php 
    session_start();
    if(isset($_SESSION['resultado'])){
        echo "<h6> O número que o computador escolheu foi " . $_SESSION["numeroC"] . "</h6>";
        echo "<h6> O número que o usuário digitou foi " . $_SESSION["Unumero"] . "</h6>";        
        echo "<h5> O ganhador foi o " . $_SESSION["resultado"] . "</h5>";
    }
    session_destroy()   
    ?>
    </body>
</html>