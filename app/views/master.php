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

    <title><?= Config::get('site_title'); ?></title>
  </head>
  <body>

    <!-- Navigation Bar -->
    <?php include ROOT.DS.'app/views/layouts/nav.php' ?>
    
    <div class="container-fluid">
    <!-- Content -->
    <?php include $view ?>

    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="<?= PATH ?>node_modules/jquery/dist/jquery.min.js"></script>
	<script src="<?= PATH ?>node_modules/popper.js/dist/popper.min.js"></script>
	<script src="<?= PATH ?>node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
  </body>
</html>
