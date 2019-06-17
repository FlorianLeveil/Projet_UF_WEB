<? require_once('logco.php'); ?>


<html>
    <head>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <meta name="description" content="CV Florian Léveil">
        <meta name="author" content="Florian Léveil">
        <meta charset="utf-8">
        <title>Connection</title>

    </head>
    <body>
        <div class="container h-80">
            <div class="row align-items-center h-100">
                <div class="col-3 mx-auto">
                    <div class="text-center">
                        <form  class="form-signin" action="login.php" method="POST">
                            <input type="text" name="username" class="form-control form-group" placeholder="login" required autofocus>
                            <input type="password" name="password" class="form-control form-group" placeholder="password" required autofocus>
                            <input type="submit" id='submit' value='LOGIN' >
                            <?php
                            if(isset($_GET['erreur'])){
                            $err = $_GET['erreur'];
                            if($err==1 || $err==2)
                                echo "<p style='color:red'>Utilisateur ou mot de passe incorrect</p>";
                            }
                            ?>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    
    </body>
</html>
