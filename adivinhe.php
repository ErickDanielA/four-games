<?PHP
include "POO.php";   
if(isset($_GET['numero'])){
    if(!empty($_GET['numero'])){
        $numero = $_GET['numero'];
        
        $adv = new adivinhe();
        $adv->SetNumUser($numero);
        $adv->SetNumComp();
        $adv->VerificarVencedor();
        session_start();
        $_SESSION["resultado"] = $adv->MostrarResultado();
        $_SESSION["Unumero"] = $adv->GetNumUser();
        $_SESSION["numeroC"] = $adv->GetNumComp();
        
        header('location: adivinhehtml.php');
    }
}
else{header('location: adivinhehtml.php');}
