<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= PATH ?>node_modules/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= PATH ?>node_modules/@fortawesome/fontawesome-free/css/all.css">
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> -->

    <title><?= Config::get('site_title'); ?></title>
  </head>
  <body>

    <!-- Navigation Bar -->
    <?php include ROOT.DS.'app/views/layouts/nav.php' ?>
    
    <div class="container-fluid" style="min-height: 450px">
    <!-- Content -->
    <?php include $view ?>
    </div>

    <hr>
    <footer>
      <p class="text-center">&copy; MVC Site 2017</p>
    </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="<?= PATH ?>node_modules/jquery/dist/jquery.min.js"></script>
	<script src="<?= PATH ?>node_modules/popper.js/dist/popper.min.js"></script>
	<script src="<?= PATH ?>node_modules/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script> -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" ></script> -->
    <!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script> -->
  </body>
</html>
