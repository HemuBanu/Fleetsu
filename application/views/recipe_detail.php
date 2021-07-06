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
                <div class="card-header py-3">
                  <h4 class="m-0 font-weight-bold text-primary"> Update Category

                    <a href="javascript:void(0);" onclick="window.history.back();" class="btn btn-outline-dark float-right">
                      <i class="fas fa-backward"></i> Go Back
                    </a>

                  </h4>
                </div>
                <div class="p-5">
                  <div class="text-center">
                    <?php foreach ($meals as $key => $meal) {

                      $ingredients = $meal->meals_ingredients;
                      $instruction = $meal->meals_instruction;
                      $meals_photo = $meal->meals_photo;
                      ?>
                    <img src="<?= base_url($meals_photo) ?>" class="img-fluid" style="width: 100px; height:100px">

                      <h1 class="h4 text-gray-900 mb-4 mt-5"><?php echo $meal->meals_name; ?></h1>
                    <?php } ?>
                    <div class="rating">
                      <ul class="list-inline">
                        <?php $rating_value = ceil($ratings);
                        if(isset($rating_value) && !empty($rating_value)){
                          if ($rating_value >= 1) {
                            echo '<li class="list-inline-item"><a class="fa fa-star" href="javascript:void(0);"></a></li>';
                          }else{ echo '<li class="list-inline-item"><a class="fa fa-star-o" href="#"></a></li>'; } ?>
                          <?php if ($rating_value >=2) {
                            echo '<li class="list-inline-item"><a class="fa fa-star" href="javascript:void(0);"></a></li>';
                          }else{ echo '<li class="list-inline-item"><a class="fa fa-star-o" href="#"></a></li>'; } ?>
                          <?php if ($rating_value >=3) {
                            echo '<li class="list-inline-item"><a class="fa fa-star" href="javascript:void(0);"></a></li>';
                          }else{ echo '<li class="list-inline-item"><a class="fa fa-star-o" href="#"></a></li>'; } ?>
                          <?php if ($rating_value >=4) {
                            echo '<li class="list-inline-item"><a class="fa fa-star" href="javascript:void(0);"></a></li>';
                          }else{ echo '<li class="list-inline-item"><a class="fa fa-star-o" href="#"></a></li>'; } ?>
                          <?php if ($rating_value >=5) {
                            echo '<li class="list-inline-item"><a class="fa fa-star" href="javascript:void(0);"></a></li>';
                          }else{ echo '<li class="list-inline-item"><a class="fa fa-star-o" href="#"></a></li>'; }
                        }else{
                          echo "No Ratings Yet";
                        } ?>
                      </ul>
                    </div>

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
                    <h3>Ingredients</h3><br>
                    <?php echo str_replace(',', '<br />', $ingredients); ?><br>
                    <br><h3>Directions</h3><br>
                    <?php echo str_replace(',', '<br />', $instruction); ?><br>
                    <hr>

                  </form>
                  <div class="card-body">
                    <h3 class="card-title">Ratings:</h3>
                    Rating : <span id='numeric_rating_<?php echo $meal->meals_id; ?>'></span>
                    <input type="hidden" class="meal_id" name="meal_id" id="meal_id" value="<?php echo $meal->meals_id; ?>" />
                    <!-- 5 Star Rating -->
                    <select name="star_rating_option" class="rating" id='star_rating' data-id='rating_<?php echo $meal->meals_id; ?>'>
                      <option value="0">-</option>
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="5">5</option>
                    </select>

                  </div>
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
  <script src="<?= base_url('template/backend/js/star-rating.min.js') ?>"></script>
  <script src="<?= base_url('template/backend/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?= base_url('template/backend/vendor/jquery-easing/jquery.easing.min.js') ?>"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?= base_url('template/backend/js/sb-admin-2.min.js') ?>"></script>

  <script type='text/javascript'>

    $(document).ready(function(){

      // Rating change
      $(document).on('change', '.rating', function() {
      // $('.rating').onchange(function() {
        var ratings = $("#star_rating").val();
        var mealid = $("#meal_id").val();

        $.ajax({
          url: '<?= base_url() ?>update_rating',
          type: 'post',
          data: {mealid: mealid, rating: ratings},
          success: function(response){
             window.location.reload();
          }
        });
      });
    });
</script>

</body>

</html>
