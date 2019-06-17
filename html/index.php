<!DOCTYPE html>
<html lang="fr">
<?php require('request.php'); ?>
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="CV Florian Léveil">
  <meta name="author" content="Florian Léveil">

  <title>Florian Léveil CV</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/grayscale.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">CV</a>
      <a class="navbar-brand js-scroll-trigger" href="#page-top">Blog</a>

      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#about">A propos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#competences">Compétences</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#projects">Projets</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#experiences">Expérience</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#signup">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Header -->
  <header class="masthead">
    <div class="container d-flex h-100 align-items-center">
      <div class="mx-auto text-center">
        <h1 class="mx-auto my-0 text-uppercase">Florian Léveil</h1>
        <h2 class="text-white-50 mx-auto mt-2 mb-5">Curriculum vitae</h2>
        <a href="#about" class="btn btn-primary js-scroll-trigger">Get Started</a>
      </div>
    </div>
  </header>

<!-- -----------------------------------------------------------------------------presntation------------------------------------------------------------------------------------- -->

  <section id="about" class="about-section ">
    <div class="container">
      <div class="row">
        <img src="img/<?= $data['pres_img'];?>" class="img-fluid" alt="" style="width: 30%;height: 30%;">
        <div class="col-lg-8 mx-auto" style="margin: auto ">
          <h2 class="text-white mb-4">Présentation</h2>
          <p class="text-white-50" style="margin-bottom: 0%">
          <?=nl2br($data["pres_txt"]); ?></p>
        </div>
      </div>
    </div>
  </section>

<!-- -----------------------------------------------------------------------------compétences------------------------------------------------------------------------------------- -->

  <section id="competences" class="projects-section bg-light">
    <div class="container">
      
        <div class="container d-flex h-100 align-items-center" style="padding-bottom: 10em">
          <div class="mx-auto text-center">
            <h4 class="mx-auto my-0 text-uppercase" style="font-family: 'Varela Round'; font-size: 2.5rem; line-height: 2.5rem; letter-spacing: 0.8rem;" >Compétences</h4>
          </div>
        </div>

      <?php 
      $isLeft = 0;
      foreach($data_comp as $comp) { 
        $isLeft += 1;
        
        
        if($isLeft %2 == 0) { ?>

          <div class="row justify-content-center no-gutters mb-5 mb-lg-0">
          <div class="col-lg-6">
            <img class="img-fluid" src="img/<?=$comp["comp_img"];?>" alt="">
          </div>
          <div class="col-lg-6">
            <div class="bg-black text-center h-100 project">
              <div class="d-flex h-100">
                <div class="project-text w-100 my-auto text-center text-lg-left">
                  <h4 class="text-white"><?=$comp["comp_titre"];?></h4>
                  <p class="mb-0 text-white-50"><?=$comp["comp_txt"];?></p>
                  <hr class="d-none d-lg-block mb-0 ml-0">
                </div>
              </div>
            </div>
          </div>
        </div>
       <?php } else { ?>

      <div class="row justify-content-center no-gutters">
        <div class="col-lg-6">
          <img class="img-fluid" src="img/<?=$comp["comp_img"];?>" alt="">
        </div>
        <div class="col-lg-6 order-lg-first">
          <div class="bg-black text-center h-100 project">
            <div class="d-flex h-100">
              <div class="project-text w-100 my-auto text-center text-lg-right">
                <h4 class="text-white"><?=$comp["comp_titre"];?></h4>
                <p class="mb-0 text-white-50"><?=$comp["comp_txt"];?></p>
                <hr class="d-none d-lg-block mb-0 mr-0">
              </div>
            </div>
          </div>
        </div>
      </div>

      <?php } }?>
    
    </div>
  </section>

<!-- -----------------------------------------------------------------------------projets------------------------------------------------------------------------------------- -->


  <section id="projects" class="projects-section bg-black">
    <div class="container">
    
        <div class="container d-flex h-100 align-items-center" style="padding-bottom: 10em">
          <div class="mx-auto text-center">
            <h4 class="mx-auto my-0 text-white" style="font-family: 'Varela Round'; font-size: 2.5rem; line-height: 2.5rem; letter-spacing: 0.8rem;" >PROJETS</h4>
          </div>
        </div>
      <div class="row justify-content-center no-gutters">
      <?php foreach($data_projet as $projet) { ?>

        <div class="col-lg-4">
          <div class="bg-black text-center project">
            <div class="col-lg" style='padding-left:0px !important'>
              <img class="img-fluid" style='max-width:370px;max-height:210px;' src="img/<?=$projet["proj_img"];?>" alt="">
            </div>
            <div class="d-flex">
              <div class="project-text w-100 text-center">
                <h4 class="text-white"><?=$projet["proj_titre"];?></h4>
                <p class="mb-0 text-white-50"><?=$projet["proj_txt"];?></p>
                <hr class="d-none d-lg-block">
              </div>
            </div>
          </div>
        </div>
        <?php } ?>
      </div>
    </div>
  </section>

<!-- -----------------------------------------------------------------------------experiences------------------------------------------------------------------------------------- -->

  <section id="experiences" class="projects-section bg-light">
    <div class="container">
      
      <!-- Featured Project Row -->
        <div class="container d-flex h-100 align-items-center" style="padding-bottom: 10em">
          <div class="mx-auto text-center">
            <h4 class="mx-auto my-0 text-uppercase" style="font-family: 'Varela Round'; font-size: 2.5rem; line-height: 2.5rem; letter-spacing: 0.8rem;" >Expérience</h4>
          </div>
        </div>


      <?php 
      $isblack = 1;
      foreach($data_exp as $exp) { 
      $isblack += 1;
        if($isblack %2 == 0) { ?>

      <div class="row justify-content-center">
        <div class="col-lg-12">
          <div class="bg-black text-center h-100 project">
            <div class="d-flex h-100">
              <div class="project-text w-100 my-auto text-center">
                <h4 class="text-white"><?=$exp["exp_titre"];?></h4>
                <p class="mb-0 text-white-50"><?=$exp["exp_deti"];?></p>
                <h5 class="text-white mt-4">Duré</h5>
                <p class="mb-0 text-white-50"><?=$exp["exp_dure"];?></p>
                <h5 class="text-white mt-4">Apprentissage</h5>
                <p class="mb-0 text-white-50"><?=$exp["exp_texte"];?></p>
                <hr class="d-none d-lg-block">
              </div>
            </div>
          </div>
        </div>
      </div>

      <?php } else { ?>

      <div class="row justify-content-center">
        <div class="col-lg-12">
          <div class="text-center h-100 project">
            <div class="d-flex h-100">
              <div class="project-text w-100 my-auto text-center">
                <h4 class="text-black"><?=$exp["exp_titre"];?></h4>
                <p class="mb-0 text-black-50"><?=$exp["exp_deti"];?>/p>
                <h5 class="text-black mt-4">Duré</h5>
                <p class="mb-0 text-black-50"><?=$exp["exp_dure"];?></p>
                <h5 class="text-black mt-4">Apprentissage</h5>
                <p class="mb-0 text-black-50"><?=$exp["exp_texte"];?></p>
                <hr class="d-none d-lg-block">
              </div>
            </div>
          </div>
        </div>
      </div>      

      <?php } }?>

    </div>
  </section>

<!-- -----------------------------------------------------------------------------signup------------------------------------------------------------------------------------- -->




<!-- -----------------------------------------------------------------------------contact------------------------------------------------------------------------------------- -->
   <section id="signup" class="signup-section">
    <div class="container">
      <div class="row">
        <div class="col-md-10 col-lg-8 mx-auto text-center">

          <i class="far fa-paper-plane fa-2x mb-2 text-white"></i>
          <h2 class="text-white mb-5">Send me a Mail!</h2>

          <form class="form-inline d-flex" action="./adminstration/mail.php" method="post">
          <div class="col-lg-12">
            <input type="email" name="email" class="form-control flex-fill mr-0 mr-sm-2 mb-3 mb-sm-3" id="email" placeholder="Enter email address...">
          </div>
          <div class="col-lg-12">
            <input type="text" name="name" class="form-control flex-fill mr-0 mr-sm-2 mb-3 mb-sm-3" id="name" placeholder="Enter your subjet...">
          </div>
          <div class="col-lg-12">

            <input type="text" name="message" class="form-control flex-fill mr-0 mr-sm-2 mb-3 mb-sm-3" id="message" placeholder="Enter your text...">
          </div>
            <button name="answer" type="submit" class="btn btn-primary mx-auto">Send</button>
          </form>
        </div>
      </div>
    </div>
  </section>

<section class="contact-section bg-black">
    <div class="container">
      <div class="social d-flex justify-content-center">
        <a href="#" class="mx-2">
          <i class="fab fa-twitter"></i>
        </a>
        <a href="https://www.linkedin.com/in/florian-l%C3%A9veil-ab6a54167/" class="mx-2">
          <i class="fab fa-linkedin"></i>
        </a>
        <a href="https://github.com/FlorianLeveil" class="mx-2">
          <i class="fab fa-github"></i>
        </a>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="bg-black small text-center text-white-50" style="height: 100px" >
    <div class="container">
      Copyright &copy; Your Website 2019
    </div>
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/grayscale.min.js"></script>

</body>

</html>
