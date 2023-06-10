<?PHP
include "../POO.php";   
if(isset($_GET['ppt'])){
    if(!empty($_GET['ppt'])){
        $ppt = $_GET['ppt'];
        echo "echo";
        $jkp = new jokenpo();
        $jkp->SetPPTUser($ppt);
        $jkp->SetPPTComp();
        $jkp->VerificarVencedor();
        session_start();
        $_SESSION["resultado"] = $jkp->MostrarResultado();
        $_SESSION["UserPPT"] = $jkp->GetPPTUser();
        $_SESSION["CompPPT"] = $jkp->GetPPTComp();
        
        header('location: index.php');
    }
}
else{header('location: index.php');}