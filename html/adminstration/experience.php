<?php
  session_start();
  if(isset($_SESSION['username']) && $_SESSION['username'] !== ""){
    $user = $_SESSION['username'];
  } else {
         header('Location: ./connect.php'); // utilisateur ou mot de passe incorrect
         exit();

  }
?>

<!DOCTYPE html>
<html lang="en">
<?php require('./../request.php'); ?>


<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Admin Experiences">
  <meta name="author" content="Florian Léveil">

  <title>Experiences</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Admin</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="index.html">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Interface
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#">
          <span>Menu</span>
        </a>
        <a class="nav-link collapsed" href="presentation.php">
          <span>Présentation</span>
        </a>
        <a class="nav-link collapsed" href="competence.php">
          <span>Compétences</span>
        </a>
        <a class="nav-link collapsed" href="projet.php">
          <span>Projets</span>
        </a>
        <a class="nav-link collapsed" href="experience.php">
          <span>Expériences</span>
        </a>
        
      </li>
  

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">


    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">
      <div class="container">

        <div class="row">
          <div class="col-sm">
            <h1 class="text-center " style="margin-top: 20px">Expérience</h1>
          </div>
        </div>

        <?php foreach($data_exp as $exp) { ?>
        <div class="container" style="margin-top: 6%">
          <form action="modifexp.php" method="post">
            <div class="row justify-content-md-center">
              <div class="col-lg-2">
                <label for="new_titre">Titre:</label>
                <textarea class="form-control" name="new_titre" id="new_titre" rows="8"><?=$exp["exp_titre"];?></textarea>
              </div>
              <div class="col-lg-4">
                <label for="new_deti">Déscription:</label>
                <textarea class="form-control" name="new_deti" id="new_deti" rows="8"><?=$exp["exp_deti"];?></textarea>
              </div>
              <div class="col-lg-2">
                <label for="new_dure">Duré</label>
                <textarea class="form-control" name="new_dure" id="new_dure" rows="8"><?=$exp["exp_dure"];?></textarea>
              </div>
              <div class="col-lg-4">
                <label for="new_texte">Apprentissage</label>
                <textarea class="form-control" name="new_texte" id="new_texte" rows="8"><?=$exp["exp_texte"];?></textarea>
              </div>
            </div>
            <div class="row justify-content-md-center">
              <input type="hidden" name="exp_id" id="exp_id" value="<?=$exp["exp_id"];?>">
              <input class="btn btn-primary col-sm"  name="submit" id="submit" type="submit" value="MODIFIER" style='margin-top: 3%; margin-bottom: 3%'>
            </div>
          </form>
          <div class="row justify-content-md-center">
            
            <div class="col-lg-2">
              <form action="deleteexp.php" method="post">
              <input type="hidden" name="exp_id" id="exp_id" value="<?=$exp["exp_id"];?>">
              <input class="btn btn-primary col-sm"  name="submit" id="submit" type="submit" value="DELETE" style='margin-top: 3%; margin-bottom: 3%'>
              </form>
            </div>

          </div>
          <hr class="d-none d-lg-block">

      </div>
      <?php }?>
      <div class="container">
        <div class="row">
          <div class="col-sm">
            <h2 class="text-center " style="margin-top: 20px">Nouvelle Expérience</h2>
          </div>
        </div>
        <form style="width: 100%" action="newexperience.php" method="post">
          <div class="row justify-content-md-center">
              <div class="col-lg-2">
                <label for="new_titre">Titre:</label>
                <input type="text" class="form-control" name="new_titre" id="new_titre" placeholder="Titre">
              </div>
              <div class="col-lg-4">
                <label for="new_desc">Déscritpion:</label>
                <input type="text" class="form-control" name="new_desc" id="new_desc" placeholder="Déscription">
              </div>
              <div class="col-lg-2">
                <label for="new_dure">Duré</label>
                <input type="text" class="form-control" name="new_dure" id="new_dure" placeholder="Duré">
              </div>
              <div class="col-lg-4">
                <label for="new_appr">Apprentissage:</label>
                <input type="text" class="form-control" name="new_appr" id="new_appr" placeholder="Apprentissage">
              </div>
          </div>
          <input class="btn btn-primary col-sm"  name="submit" id="submit" type="submit" style='margin-top: 3%; margin-bottom: 3%'>
        </form>

    </div>
  </div>


  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
