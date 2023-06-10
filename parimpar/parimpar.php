<?PHP
include "../POO.php";   
if(isset($_GET['numero'])){
    if(!empty($_GET['numero'])){
        if(isset($_GET['parouimpar'])){
            if(!empty($_GET['parouimpar']))
                $numero = $_GET['numero'];
                $parouimpar = $_GET['parouimpar'];
                
                $pi = new parimpar();
                $pi->SetNumUser($numero);
                $pi->SetNumComp();
                $pi->SetParouImpar($parouimpar);
                $pi->VerificarVencedor();
                session_start();
                $_SESSION["resultado"] = $pi->MostrarResultado();
                $_SESSION["Unumero"] = $pi->GetNumUser();
                $_SESSION["numeroC"] = $pi->GetNumComp();
                $_SESSION["Paridade"] = $pi->GetParouImpar();
                
                header('location: index.php');
        }
    }
}
else{header('location: index.php');}