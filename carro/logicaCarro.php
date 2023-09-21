<?php
session_start();//inicializa o uso da sessao

//1 verifica
if(isset($_POST['carroNome']) && isset($_POST['carroMarca']) && isset($_POST['carroModelo']) && isset($_POST['carroAno'])){
//2 recebe os dados do form
    $carNom = $_POST['carroNome'];
    $carMar = $_POST['carroMarca'];
    $carMod = $_POST['carroModelo'];
    $carAno = $_POST['carroAno'];

    $carNomInfo = Array();
    $carMarInfo = Array();
    $carModInfo = Array();
    $carAnoInfo = Array();
    
//3 inserindo dados na sessão
    if(isset($_SESSION['carNomInfo']) && isset($_SESSION['carMarInfo']) && isset($_SESSION['carModInfo']) && isset($_SESSION['carAnoInfo'])){
        $carNomInfo = $_SESSION['carNomInfo'];
        $carMarInfo = $_SESSION['carMarInfo'];
        $carModInfo = $_SESSION['carModInfo'];
        $carAnoInfo = $_SESSION['carAnoInfo'];
    }

    array_push($carNomInfo, $carNom);
    $_SESSION['carNomInfo'] = $carNomInfo;
    array_push($carMarInfo, $carMar);
    $_SESSION['carMarInfo'] = $carMarInfo;
    array_push($carModInfo, $carMod);
    $_SESSION['carModInfo'] = $carModInfo;
    array_push($carAnoInfo, $carAno);
    $_SESSION['carAnoInfo'] = $carAnoInfo;
    header('location: mostraCarro.php');

}
?>
