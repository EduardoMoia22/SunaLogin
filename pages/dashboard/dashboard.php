<?php
session_start();
    if((!isset($_SESSION['User']) == true) and (!isset($_SESSION['Password']) == true)){
        unset($_SESSION['User']);
        unset($_SESSION['Password']);
        header('Location: ../login/login.php');
    }

    $logged = $_SESSION['User'];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- GOOGLE FONTS ICONS -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">

    <!-- IMPORT CSS -->
    <link rel="stylesheet" href="style.css">

    <title>Dashboard</title>
</head>
<body>
    <div class="container">
        <!-- ==========ASIDE==========-->
        <aside>
            <!-- ==========NAV========== -->
            <nav class="nav">
                <div class="top">
                    <div class="logo"><a href="#"><span>n</span>otto.</a></div>
                    <!-- CLOSE ICON -->
                    <div class="close" id="close-btn">
                        <span class="material-icons-sharp">close</span>
                    </div>
                </div>
    
                <!-- ==========NAVBAR========== -->
                <div class="navbar">
                    
                        <a href="#">
                            <span class="material-icons-sharp iconSize">dashboard</span>
                            <span class="list">Dashboard</span>
                        </a>
                        
                        <a href="#">
                            <span class="material-icons-sharp iconSize">groups</span>
                            <span class="list">Clientes</span>
                        </a>
                        
                        <a href="#">
                            <span class="material-icons-sharp iconSize">contact_phone</span>
                            <span class="list">Atendimento</span>
                        </a>
                        
                        <a href="#">
                            <span class="material-icons-sharp iconSize">inventory</span>
                            <span class="list">Estoque</span>
                        </a>
                        
                        <a href="#">
                            <span class="material-icons-sharp iconSize">attach_money</span>
                            <span class="list">Financeiro</span>
                        </a>
                        
                        <a href="#">
                            <span class="material-icons-sharp iconSize">map</span>
                            <span class="list">Mapeamento</span>
                        </a>
                        
                        <a href="#">
                            <span class="material-icons-sharp iconSize">description</span>
                            <span class="list">Nota Fiscal</span>
                        </a>
                        
                        <a href="#">
                            <span class="material-icons-sharp iconSize">sensors</span>
                            <span class="list">Rede</span>
                        </a>
                        
                        <a href="#">
                            <span class="material-icons-sharp iconSize">article</span>
                            <span class="list">Relatórios</span>
                        </a>
                        
                        <a href="#">
                            <span class="material-icons-sharp iconSize">settings</span>
                            <span class="list">Configuração</span>
                        </a>
                    
                </div>

                <div class="footerNav">
                    <span>Todos os direitos reservados. <br>Notto. 2022</span>
                </div>
                <!-- ==========END NAVBAR========== -->  

            </nav>
            <!-- ==========END NAV========== -->
        </aside>
        <!-- ==========END ASIDE==========-->
        <main>
            <div class="row">
                <div class="card">
                    <div class="topCard">
                        <span>Habilitados</span>
                        <span class="material-icons-sharp">more_vert</span>
                    </div>  
                    <div class="midCard">
                        <span>299</span>
                        <span>Serviços</span>
                    </div>
                    <div class="botCard">
                        <span>Total: <strong>1273(23.5%)</strong></span>
                    </div>
                </div>
                <div class="card">
                    <div class="topCard">
                        <span>Susp. Parcialmente</span>
                        <span class="material-icons-sharp">more_vert</span>
                    </div>  
                    <div class="midCard">
                        <span>0</span>
                        <sp>Serviços</sp>
                    </div>
                    <div class="botCard">
                        <span>Total: <strong>1273(0%)</strong></span>
                    </div>
                </div>
                <div class="card">
                    <div class="topCard">
                        <span>Suspensos</span>
                        <span class="material-icons-sharp">more_vert</span>
                    </div>  
                    <div class="midCard">
                        <span>964</span>
                        <span>Serviços</span>
                    </div>
                    <div class="botCard">
                        <span>Total: <strong>1273(75.7%)</strong></span>
                    </div>
                </div>
                <div class="card">
                    <div class="topCard">
                        <span>OS Pendentes</span>
                        <span class="material-icons-sharp">more_vert</span>
                    </div>  
                    <div class="midCard">
                        <span>17</span>
                        <span>OS</span>
                    </div>
                    <div class="botCard">
                        <span>Total: <strong>26(65.4%)</strong></span>
                    </div>
                </div>
                <div class="card">
                    <div class="topCard">
                        <span>OS Aguardando</span>
                        <span class="material-icons-sharp">more_vert</span>
                    </div>  
                    <div class="midCard">
                        <span>9</span>
                        <span>OS</span>
                    </div>
                    <div class="botCard">
                        <span>Total: <strong>26(34.6%)</strong></span>
                    </div>
                </div>
            </div>
            <div class="chart">
                <div class="topChart"><span>Serviços novos x Cancelados x Migrados</span></div>
                <div class="contentChart">
                </div>
            </div>
        </main>
    </div>
</body>
</html>