<section class="painel">
   <?php include('./includes/header.php'); ?>
   <div class="container">
      <div class="row">
         <?php EmailAPI::MostraCards(); ?>
      </div>
   </div>
</section>
<?php include('./includes/footer.php'); ?>

          <?php EmailAPI::App(); ?>