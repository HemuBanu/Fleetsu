<!DOCTYPE html>
<html lang="en">

<head>
    <base href="<?php echo base_url(); ?>"/>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title> Tasty Food </title>

  <!-- Custom fonts for this template-->
  <link href="<?= base_url('template/backend/vendor/fontawesome-free/css/all.min.css'); ?>" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?= base_url('template/backend/css/sb-admin-2.min.css') ?>" rel="stylesheet">

  <style>
   .sidebar { width: 51rem!important;
}
</style>
</head>

<body class="bg-gradient-primary">

  <div class="container mt-5">


    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9 mt-5">
        <?php $this->load->view('eu_topnavigation'); ?>

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">

              <div class="col-lg-12">
                <div class="p-5">
                  <div class="text-center">
                    <img src="<?= base_url('template/logo.png') ?>" class="img-fluid" style="width: 100px; height:100px">
                    <?php foreach ($category_name as $key => $value) { ?>
                      <h1 class="h4 text-gray-900 mb-4 mt-5"><?php echo $value->categories_name; ?></h1>
                    <?php } ?>

                  </div>

                  <?php if(isset($error_message)): ?>

                  <div class="alert alert-danger alert-dismissible fade show" role="alert">
                      <strong>FAIL!</strong>
                      <?= $error_message ?>

                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>

                    <?php endif ?>


                  <form class="user" action="#" method="POST">
                    <hr>
                    <ul class="navbar-nav " id="">
                      <?php if(isset($meals) && !empty($meals)){ foreach ($meals as $key => $meal) { ?>
                      <li class="nav-item">
                        <a class="nav-link " href="recipe_details/<?php echo $meal->meals_id; ?>">
                          <i class="fas fa-utensils"></i>
                          <span> <?php echo  $meal->meals_name; ?> </span></a>
                      </li>
                    <?php } }else{
                      echo "No Recipes in this category. Please contact admin";
                    } ?>
                    </ul>

                    <hr>

                  </form>


                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="<?= base_url('template/backend/vendor/jquery/jquery.min.js') ?>"></script>
  <script src="<?= base_url('template/backend/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?= base_url('template/backend/vendor/jquery-easing/jquery.easing.min.js') ?>"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?= base_url('template/backend/js/sb-admin-2.min.js') ?>"></script>

</body>

</html>
