<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>COMO VOCÊ ESTÁ HOJE?</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

     <!-- Customized Bootstrap Stylesheet -->
     <link href="css/style.css" rel="stylesheet">
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
</head>

<body>



    <!-- CABEÇALHO INICIO -->
     <div class="container-fluid position-relative nav-bar p-0">
        <div class="container-lg position-relative p-0 px-lg-3" style="z-index: 9;">
            <nav class="navbar navbar-expand-lg bg-light navbar-light shadow-lg py-3 py-lg-0 pl-3 pl-lg-5">
                <a href="" class="navbar-brand">
                    <h1 class="m-0 text-primary"><span class="text-dark">PSICOLOG</span>IA</h1>
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse">
                    <div class="navbar-nav ml-auto py-0">
                        
                        <a href="index.php" class="nav-item nav-link active">Início</a>
                        <a href="emocoes.php" class="nav-item nav-link"> Como você está hoje?</a>
                            <?php
                        session_start();
                        include_once('conexao.php');
                                if ((isset($_SESSION['email']) == true) && (isset($_SESSION['senha']) == true) && (!empty($_SESSION['email'])) && (!empty($_SESSION['senha']))){
                                 $email = $_SESSION['email'];
                                $senha = ($_SESSION['senha']);
                                $sql = "SELECT * FROM usuarios WHERE email = '$email' and senha = '$senha'";
                                
                                $resultado = $connect->query($sql);
                                $row = $resultado->fetch_assoc();
                                 if($row['psicologo'] != 1){
                                    echo"  <a href='pgalunos.php' class='nav-item nav-link'>Agendar Horário</a>";
                                 }else{
                                    echo"<a href='pghenrique.php' class='nav-item nav-link'>Cadastrar Horários</a>";
                                 }
                                 
                                }else{
                                    ?>
                                    <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Conecte-se</a>
                            <div class="dropdown-menu border-0 rounded-0 m-0">
                                <a href="Telalogin.php" class="dropdown-item">Login</a>
                                <a href="cadastro.php" class="dropdown-item">Cadastro</a>
                            </div>
                        </div>
                                <?php
                                }
                            ?> 
                        
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- CABEÇALHO FINAL -->


    <!-- Header Start -->
    <div class="container-fluid page-header" id="Humor">
        <div class="container">
            <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 400px">
                <h3 class="display-4 text-white text-uppercase">COMO VOCÊ ESTÁ HOJE?</h3>
                <div class="d-inline-flex text-white">
                    <p class="m-0 text-uppercase"><a class="text-white"> Olá, sinta-se à vontade.</a></p>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->





    <!-- DICAS, MEDITAÇÕES E DIZERES -->
    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <div class="text-center mb-3 pb-3">
                <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;"> DICAS </h6>
                <h1> MEDITAÇÕES E ALGUNS DIZERES</h1>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4" id="red" onclick="Ans()">
                    <div class="service-item bg-white text-center mb-2 py-5 px-4">
                        <i class="bi bi-patch-question-fill"  style="font-size: 4rem; margin-left: 120px;height: 100px; width:100px ;; "></i><br> 
                        <h5 class="mb-2"> ANSIOSO </h5>
                        <p class="m-0"> Ansiedade é um sentimento. Nesse mundo corrido é imprescindível  saber lidar com isso, que em excesso se torna doença. </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4" id="orange" onclick="nerv()">
                    <div class="service-item bg-white text-center mb-2 py-5 px-4">
                        <i class="bi bi-emoji-angry-fill"style="font-size: 4rem; margin-left: 120px;height: 100px; width:100px ; "></i><br>
                        <h5 class="mb-2"> NERVOSO </h5>
                        <p class="m-0">Acalme-se, a vida é composta de coisas que nos alegram e nos estressam, por isso devemos saber lidar com as mesmas.<br></p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4" id="yellow" onclick="cans()">
                    <div class="service-item bg-white text-center mb-2 py-5 px-4">
                        <i class="bi bi-clipboard-data-fill"style="font-size: 4rem; margin-left: 120px;height: 100px; width:100px ; "></i><br>
                        <h5 class="mb-2">CANSADO</h5>
                        <p class="m-0">Dê um tempo para você descansar, as tarefas do dia a dia são muito importantes, mas para serem realizadas é preciso estar bem.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4" id="blue"onclick="trist()">
                    <div class="service-item bg-white text-center py-5 mb-4 px-4" style='padding-bottom: 1200px;'>
                        <i class="bi bi-emoji-frown-fill" id="azul" style="font-size: 4rem; margin-left: 115px;height: 100px; width:110px ; "></i><br>
                        <h5 class="mb-2">TRISTE</h5>
                        <p class="m-0">Não fique assim, a tristeza é uma fase que passa, mas não devemos negligencia-la. Nada em excesso faz bem. </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4" id="marine" onclick="sozi()">
                    <div class="service-item bg-white text-center py-5 px-4">
                        <i class="bi bi-person-x-fill"style="font-size: 4rem; margin-left: 120px;height: 100px; width:100px ; "></i> <br>
                        <h5 class="">SOZINHO</h5>
                        <p class="m-0">O convívio em sociedade pode ser difícil, mas faz bem a sua saúde viver em sociedade e viver, também, tempos consigo mesmo.    </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4" id="gray" onclick="infoadd()">
                    <div class="service-item bg-white text-center py-5 px-4">
                        <i class="bi bi-clipboard-plus-fill"style="font-size: 4rem; margin-left: 120px;height: 100px; width:100px ; "></i><br>
                        <h5 class="">INFORMAÇÕES ADICIONAIS</h5>
                        <p class="m-0">Aqui se um encontra um espaço com vários materiais que vão te ajudar a se auto-conhecer ainda mais! apps e indicações exclusivas. </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- DICAS, MEDTIAÇÕES E ALGUNS DIZERES FINAL -->


    <!-- Testimonial Start -->

    <!-- Testimonial End -->


    <!-- RODAPE INICIO-->
   <div class="container-fluid bg-dark text-white-50 py-5 px-sm-3 px-lg-5" style="margin-top: 90px; display: inline-block;">
    <div class="row pt-5">
        <div class="col-lg-3 col-md-6 mb-5">
            <a href="" class="navbar-brand">
                <h1 class="text-primary"><span class="text-white">PSICOLOG</span>IA</h1>
            </a>
            <p>SISTEMA DE APOIO PSICOLÓGICO 
                <BR>
               CAMPUS ARRAIAL DO CABO 
            </p>
        </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-5" style="display: inline-block;">
            <h5 class="text-white text-uppercase mb-4" style="letter-spacing: 5px;">Contate-nos</h5>
            <p><i class="fa fa-map-marker-alt mr-2"></i>R. José Pinto de Macedo, s/n - Prainha, Arraial do Cabo - RJ, 28930-000</p>

            <h6 class="text-white text-uppercase mt-4 mb-3" style="letter-spacing: 5px;">Canal de Notícias</h6>
            <div class="w-100">
                <div class="input-group">
                    <input type="text" class="form-control border-light" style="padding: 25px;" placeholder="Seu e-mail">
                    <div class="input-group-append">
                        <button class="btn btn-primary px-3">Cadastre-se</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    <!-- RODAPÉ FINAL -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>


    <script>
        function Ans(){
            window.open("ansioso.php",'_self')
        }
        function nerv(){
            window.open("nervoso.php",'_self')
        }
        function trist(){
            window.open("triste.php",'_self')
        }
        function cans(){
            window.open("cansado.php","_self")
        }
        function sozi(){
            window.open("sozinho.php",'_self')
        }
        function infoadd(){
            window.open("info_add.php",'_self')
        }
    </script>
</body>

</html>