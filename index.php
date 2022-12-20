
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <title>Psicologia - IFRJ Campus Arraial</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="fontawesome-free-6.2.0-web/css/all.css" rel="stylesheet">

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


    <!-- Carousel Start -->
    <div class="container-fluid p-0">
        <div id="header-carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="img/carousel-1.png" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-white text-uppercase mb-md-3">A felicidade demanda uma mente sã</h4>
                            <h1 class="display-3 text-white mb-md-4">Cuidar da sua Saúde Mental Deve Ser Sua Prioridade</h1>
                            
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/carousel-2.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-white text-uppercase mb-md-3">Autoconhecimento & Saúde Mental</h4>
                            <h1 class="display-3 text-white mb-md-4" style="font-size: 47pt;">Conheça-se. O Autoconhecimento Serve Para Que Você Se Adapte Ao Seu Melhor</h1>
                            
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
                <div class="btn btn-dark" style="width: 45px; height: 45px;">
                    <span class="carousel-control-prev-icon mb-n2"></span>
                </div>
            </a>
            <a class="carousel-control-next" href="#header-carousel" data-slide="next">
                <div class="btn btn-dark" style="width: 45px; height: 45px;">
                    <span class="carousel-control-next-icon mb-n2"></span>
                </div>
            </a>
        </div>
    </div>
    <!-- Carousel End -->

    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container pt-5">
            <div class="row">
                <div class="col-lg-6" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100" src="img/about.jpg" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 pt-5 pb-lg-5">
                    <div class="about-text bg-white p-4 p-lg-5 my-lg-5">
                        <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Qual o Objetivo deste site?</h6>
                        <h1 class="mb-3">Este é o site de apoio psicológico do IFRJ campus Arraial do Cabo</h1>
                        <p>Esse site foi criado com o intuito de proporcionar um espaço agradável e útil para você, aluno ou servidor, que deseja ser auxiliado psicologicamente nessa caminhada conosco.
                        </p>
                        <p>Aqui você encontra meditações, indicações de vídeos e artigos, um local preparado para agendamento de atendimento com o psicólogo do Campus Arraial do Cabo e muito mais! </p>
                        <p> E nunca se esqueçam:<b> "Quem conhece os outros é sábio; 
                                    Quem conhece a si mesmo é iluminado."</b>Lao-Tsé</b>
                        </p>
                        <div class="row mb-4">
                            <div class="col-6">
                                <img class="img-fluid" src="img/about-1.jpg" alt="">
                            </div>
                            <div class="col-6">
                                <img class="img-fluid" src="img/about-2.jpg" alt="">
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <div>
        <h3 style="text-align: center; margin-bottom: 60px ;">Benefícios da Meditação e Práticas de Relaxamento</h3>
    </div>
    <!-- Feature Start -->
    <div class="container-fluid pb-5">
        <div class="container pb-5">
            <div class="row">
                <div class="col-md-4">
                    <div class="d-flex mb-4 mb-lg-0">
                        <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-primary mr-3" style="height: 100px; width: 100px;">
                            
                            <i class="bi bi-activity" style="font-size: 4rem;"></i>
                        </div>
                        <div class="d-flex flex-column">
                            <h5 class="">Redução na Pressão Sanguínea</h5>
                            <p class="m-0" style="text-align: justify;">O estresse pode contrair os vasos sanguíneos e levar a picos temporários da pressão arterial. A meditação e exercícios para a respiração são maneiras eficientes de controlar a situação.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="d-flex mb-4 mb-lg-0">
                        <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-primary mr-3" style="height: 100px; width: 100px;">
                            <i class="bi bi-heart-pulse-fill"style="font-size: 4rem;"></i>
                        </div>
                        <div class="d-flex flex-column">
                            <h5 class="">Maior facilidade Para Lidar Com A Ansiedade</h5>
                            <p class="m-0" style="text-align: justify;">Quando você medita, concentra a atenção ao interior do si mesmo, à sua essência. Assim, pode acalmar a infinidade de pensamentos e trazer um pouco mais de tranquilidade ao dia a dia. Em longo prazo, melhora o nível de ansiedade e passa a ver diversas outras vantagens.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="d-flex mb-4 mb-lg-0">
                        <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-primary mr-3" style="height: 100px; width: 100px;">
                            <i class="bi bi-moon-stars" style="font-size: 4rem;"></i>
                        </div>
                        <div class="d-flex flex-column">
                            <h5 class="">Diminuição da Insônia e Problemas Noturnos</h5>
                            <p class="m-0" style="text-align: justify;">Desde a década de 70, a meditação vem sendo estudada para reconhecer as principais vantagens que ela reflete no corpo e na mente. E a comprovação já existe: estudos confirmam que o hábito de meditar alivia o desconforto, melhora a qualidade de vida de pessoas com insônia, dor crônica e depressão, reforça a imunidade, reduz o stress e o risco de doenças do coração, entre outras coisas.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Feature End -->



    <!-- Registration Start -->
    <div class="container-fluid bg-registration py-5" style="margin: 90px 0;">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-7 mb-5 mb-lg-0">
                    <div class="mb-4">
                        <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Faça seu cadastro para acessar o sistema de Apoio Psicológico do campus Arraial do Cabo</h6>
                        <h1 class="text-white"><span class="text-primary">Cadastre-se</span> Agora</h1>
                    </div>
                    <p class="text-white">BENEFÍCIOS DE FAZER PARTE DO SISTEMA
                    </p>
                    <ul class="list-inline text-white m-0">
                        <li class="py-2"><i class="fa fa-check text-primary mr-3"></i>Checar e marcar consultas com o profissional do campus.</li>
                        <li class="py-2"><i class="fa fa-check text-primary mr-3"></i>Receber notificações e dicas de relaxamento.</li>
                        <li class="py-2"><i class="fa fa-check text-primary mr-3"></i>Fazer parte da maior rede social do campus voltado à área de psicologia.</li>
                    </ul>
                </div>
                <div class="col-lg-5">
                    <div class="card border-0">
                        <div class="card-header bg-primary text-center p-4">
                            <h1 class="text-white m-0">Cadastre-se agora</h1>
                        </div>
                        <div class="card-body rounded-bottom bg-white p-5">
                            <form>
                                <div class="form-group">
                                    <input type="text" class="form-control p-4" placeholder="Seu nome" required="required" />
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control p-4" placeholder="Seu e-mail" required="required" />
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control p-4" placeholder="Seu número de matrícula" required="required" />
                                </div>
                                <div class="form-group">
                                    <select class="custom-select px-4" style="height: 47px;">
                                        <option selected>Selecione a sua turma</option>
                                        <option value="1">MAM 111</option>
                                        <option value="2">MAM 121</option>
                                        <option value="3">MAM 131</option>
                                        <option value="4">MAM 141</option>
                                        <option value="5">MAM 151</option>
                                        <option value="6">MAM 161</option>
                                        <option value="7">INF 211</option>
                                        <option value="8">INF 221</option>
                                        <option value="9">INF 222</option>
                                        <option value="10">INF 231</option>
                                        <option value="11">INF 241</option>
                                        <option value="12">INF 251</option>
                                        <option value="13">INF 261</option>
                                        <option value="14">INF 141</option>
                                        <option value="15">MAB 311</option>
                                        <option value="16">MAB 321</option>
                                        <option value="17">MAB 331</option>
                                        <option value="18">MAB 341</option>
                                        <option value="19">TRC 311</option>
                                        <option value="20">TRC 321</option>
                                        <option value="21">TRC 331</option>
                                        <option value="22">TRC 341</option>
                                        <option value="23">TRC 351</option>
                                        <option value="24">TRC 361</option>
                                    </select>
                                </div>
                                <div>
                                    <button class="btn btn-primary btn-block py-3" type="submit">Enviar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Registration End -->

    <!-- Testimonial Start -->
    <!--  RODAPE INICIO-->
    <div class="container-fluid bg-dark text-white-50 py-5 px-sm-3 px-lg-5" style="margin-top: 90px; display: inline-block;">
        <div class="row pt-5">
            <div class="col-lg-3 col-md-6 mb-5">
                <a href="" class="navbar-brand">
                    <h1 class="text-primary"><span class="text-white">PSICOLOG</span>IA</h1>
                </a>
                <p>SISTEMA DE APOIO PSICOLÓGICO
                    <BR> CAMPUS ARRAIAL DO CABO
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


    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>
    <!-- RODAPÉ FINAL -->


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
</body>

</html>